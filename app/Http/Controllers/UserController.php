<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;



// use Goutte\Client;
use Symfony\Component\Panther\Client;
use Longman\TelegramBot\Entities\Update;
use Telegram\Bot\Api;




class UserController extends Controller
{
///////////////////    LOGIN METHODS   /////////////////
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt(['username' => $request['username'], 'password' => $request['password']]))
        {

            return redirect('/home');
        }
        else return redirect()->back()->with('info', "Incorrect username or password");
    }
/////////////////////    LOGOUT     ////////////////////
    public function getLogout()
    {
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function postAddCoin(Request $request){


        if(!$request->has('id')){
           $this->validate($request, [
               'smart_chain' => 'required|unique:coins',
           ]);
       }else{
          $this->validate($request, [
               'smart_chain' => 'required||unique:coins',
           ]);
       }

         // Code for coin validation

         $client = new CoinGeckoClient();
         $data = $client->derivatives()->getExchanges();
         $response = $client->getLastResponse();
         $headers = $response->getHeaders();

         try{
         $info = $client->contract()->getContract('binance-smart-chain', $request->smart_chain);
         }
          catch(\Exception $e){
               try{
               $info = $client->contract()->getContract('ethereum', $request->smart_chain);
               }
                catch(\Exception $e){
                   return redirect()->back()->with('alert','Please enter valid Smart Chain Contact Address');
               }
         }





             if ($request->hasFile('logo')) {
                     $image = $request->file('logo');
                     $filename =  time().'.'.$image->getClientOriginalExtension();
                     $destinationPath = public_path();
                     $image->move($destinationPath, $filename);
               }

             DB::table('coins')->insert([
                 'name' => $request->name??$info['name'],
                 'user_id' => auth()->user()->id,
                 'symbol' => $request->symbol??$info['symbol'],
                 'description' => $request->description??$info['description']['en'],
                 'logo' => $filename??$info['image']['large'],
                 'price' => $request->price??$info['market_data']['current_price']['usd'],
                 'market_cap' => $request->market_cap??$info['market_data']['market_cap']['usd'],
                 'volume' => $info['market_data']['price_change_24h']??null,
                 'rank' => $info['market_cap_rank']??null,
                 'launch_date' => $request->launch_date??$info['last_updated'],
                 'smart_chain' => $request->smart_chain??null,
                 'website' => $request->website??$info['links']['homepage'][0],
                 'telegram' => $request->telegram??$info['telegram_channel_identifier']??null,
                 'twitter' => $request->twitter??$info['twitter_screen_name']??null,
                 'pancake' => $request->pancake??$info['announcement_url'][0]??null,
                 'discord' => $request->discord??$info['chat_url'][0]??null,
             ]);


         return redirect('home')->with('success','Successfully Added a Coin');
    }

    public function test()
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot1948749330:AAHXw2bkqClqRJ6KyUWqH4tgU4EYmRzHHfE/getUpdates');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = '';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        // dd($result);
        $data = json_decode($result,true)['result'];

        $data = end($data);
        dd($data);

        $data = $data['channel_post']['text'];
        // $data = json_last_error();
        // $data = json_encode($data, JSON_UNESCAPED_SLASHES);
        // $data = json_decode($data);
         DB::table('coins')->insert([
                'name' => $data
            ]);

        $data = DB::table('coins')->orderBy('id','desc')->pluck('name')->first();
        $data = explode('Initial', $data);
        $data[1] = explode('Token', $data[1]);
        $data[2] = explode('DEXTools:', $data[1][1]);


        // dd($data[0],$data[1][0],$data[2][0]);
        $data[2][0] = str_replace(' contract:','',$data[2][0]);
        $data[1][0] = str_replace('Liquidity: ','',$data[1][0]);
        $data[0] = str_replace('🥞 New pair at Pancakeswap V2 🥞','',$data[0]);

        if(DB::table('coins')->where('name',$data[0])->first()){
            DB::table('coins')->orderBy('id','desc')->limit(1)->delete();

            $res = (object) null;
            $res->msg = false;
            return $res;
        }
        else{
             DB::table('coins')->insert([
            'name' => $data[0],
            'smart_chain' => $data[2][0],
            'price' => $data[1][0],
            ]);

            $id = DB::table('coins')->orderBy('id','desc')->pluck('id')->first();
            $id--;

            DB::table('coins')->where('id', $id)->delete();
            $obj = DB::table('coins')->orderBy('id','desc')->first();
            $res = (object) null;
            $res->msg = true;
            $res->data = '<tr class="text-center"><td><a target="_blank" href="https://poocoin.app/tokens/'.$obj->smart_chain.'">'.$data[0].'</a></td><td>'.\Carbon\Carbon::createFromTimeStamp(strtotime($obj->created_at))->diffForHumans().'</td><td><i class="fas fa-check-circle text-success font-size-xl"></i></td><td><i class="fas fa-times-circle text-danger font-size-xl"></i></td><td><img src="img/3020989.png" class="img-fluid " style="height: 35px;"
                                            alt="Waitting">
                                    </td>
                                    <td>
                                        <i class="fas fa-exclamation-triangle font-size-xl text-warning mr-3"></i>
                                        0
                                    </td>
                                    <td>
                                        <!-- <img src="img/3020989.png" class="img-fluid " style="height: 35px;"
                                            alt="Waitting"> -->'.$data[1][0].'

                                    </td>
                                    <td>
                                        <a href=""><i class="fas fa-paper-plane font-size-xl text-success"></i></a>
                                    </td>
                                    <td>
                                        <span class="d-flex">
                                            <a target="_blank" href="https://exchange.pancakeswap.finance/#/swap?outputCurrency='.$obj->smart_chain.'"><img src="img/face.png" class="img-fluid m-0"></a>
                                            <a target="_blank" href="https://poocoin.app/tokens/'.$obj->smart_chain.'" class="text-drbg"> <i
                                                    class="fas fa-poo font-size-xl mx-2"></i></a>
                                            <a href=""><i class="fas fa-share-alt text-primary font-size-xl"></i></a>
                                        </span>
                                    </td>
                                </tr>';

            // dd($res->data);
            return $res;
        }
        
    }
    public function testing(){
        

        
            $bot_api_key  = '1928834633:AAEVUaOwT6XKiv4rdS7z73eoOhFNnXyniVA';
            $bot_username = 'saddddbot';

            $mysql_credentials = [
               'host'     => 'localhost',
               'port'     => 3306, // optional
               'user'     => 'dbuser',
               'password' => 'dbpass',
               'database' => 'dbname',
            ];

            try {
                // Create Telegram API object
                $telegram = new \Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

                // Enable MySQL
                $telegram->useGetUpdatesWithoutDatabase();

                // Handle telegram getUpdates request
                $data = $telegram->handleGetUpdates();
                dd($data);
                DB::table('coins')->insert([
                    'name' => $data->result
                ]);
                $data = DB::table('coins')->orderBy('id','desc')->pluck('name')->first();
                $data = explode('Initial', $data);
        $data[1] = explode('Token', $data[1]);
        $data[2] = explode('DEXTools:', $data[1][1]);


        // dd($data[0],$data[1][0],$data[2][0]);
        $data[2][0] = str_replace(' contract:','',$data[2][0]);
        $data[1][0] = str_replace('Liquidity: ','',$data[1][0]);
        $data[0] = str_replace('🥞 New pair at Pancakeswap V2 🥞','',$data[0]);

        if(DB::table('coins')->where('name',$data[0])->first()){
            DB::table('coins')->orderBy('id','desc')->limit(1)->delete();

            $res = (object) null;
            $res->msg = false;
            return $res;
        }
        else{
             DB::table('coins')->insert([
            'name' => $data[0],
            'smart_chain' => $data[2][0],
            'price' => $data[1][0],
            ]);

            $id = DB::table('coins')->orderBy('id','desc')->pluck('id')->first();
            $id--;

            DB::table('coins')->where('id', $id)->delete();
            $obj = DB::table('coins')->orderBy('id','desc')->first();
            $res = (object) null;
            $res->msg = true;
            $res->data = '<tr class="text-center"><td><a target="_blank" href="https://poocoin.app/tokens/'.$obj->smart_chain.'">'.$data[0].'</a></td><td>'.\Carbon\Carbon::createFromTimeStamp(strtotime($obj->created_at))->diffForHumans().'</td><td><i class="fas fa-check-circle text-success font-size-xl"></i></td><td><i class="fas fa-times-circle text-danger font-size-xl"></i></td><td><img src="img/3020989.png" class="img-fluid " style="height: 35px;"
                                            alt="Waitting">
                                    </td>
                                    <td>
                                        <i class="fas fa-exclamation-triangle font-size-xl text-warning mr-3"></i>
                                        0
                                    </td>
                                    <td>
                                        <!-- <img src="img/3020989.png" class="img-fluid " style="height: 35px;"
                                            alt="Waitting"> -->'.$data[1][0].'
                                            
                                    </td>
                                    <td>
                                        <a href=""><i class="fas fa-paper-plane font-size-xl text-success"></i></a>
                                    </td>
                                    <td>
                                        <span class="d-flex">
                                            <a target="_blank" href="https://exchange.pancakeswap.finance/#/swap?outputCurrency='.$obj->smart_chain.'"><img src="img/face.png" class="img-fluid m-0"></a>
                                            <a target="_blank" href="https://poocoin.app/tokens/'.$obj->smart_chain.'" class="text-drbg"> <i
                                                    class="fas fa-poo font-size-xl mx-2"></i></a>
                                            <a href=""><i class="fas fa-share-alt text-primary font-size-xl"></i></a>
                                        </span>
                                    </td>
                                </tr>';

            // dd($res->data);                    
            return $res;
        }

                

                // $updates = $telegram->getWebhookUpdates();
                // dd($updates);

            } catch (Longman\TelegramBot\Exception\TelegramException $e) {
                // log telegram errors
                echo $e->getMessage();
            }


    }

    

}
