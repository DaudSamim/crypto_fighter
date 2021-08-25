<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;
use Browser\Casper;
use Symfony\Component\Panther\PantherTestCase;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use Spatie\Browsershot\Browsershot;
class TestController extends Controller
{

    public function webscrap()
    {

        require '../vendor/autoload.php';

        $httpClient3 = new \GuzzleHttp\Client();
        $token='0xd319feb7403c675fa54c22e2524574f72c3f8e61';
        $response3 = $httpClient3->get('https://bscscan.com/readContract?m=normal&a='.$token.'&v='.$token.'&t=false');
        $htmlString3 = (string) $response3->getBody();

        // HTML is often wonky, this suppresses a lot of warnings
        libxml_use_internal_errors(true);

        $doc3 = new \DOMDocument();
        $doc3->loadHTML($htmlString3);
        $xpath3 = new \DOMXPath($doc3);

        $owner = $xpath3->evaluate('//div[@class="alert alert-warning mb-0"]');

        // dd($owner);
        $result3=[];
        foreach ($owner as $key => $own) {

            $result3['owner'] =$own->textContent;
        }

            if(empty($result3))
            {
                $owner_verifed=1;
            }
            elseif($result3['owner']=="Sorry, we were unable to retrieve a valid Contract ABI for this contract. Unable to read contract information"){
           $owner_verifed=0;
             }


            dd($owner_verifed);



        $client = new Client();
        $client = new Client(HttpClient::create(['timeout' => 60]));
        $crawler = $client->request('GET', 'http://bscscan.com/address/0xb0de30f586c358d084c520309b17f08e7cf84f7f#code');
        $key=null;
        $text=  $crawler->filter('h3[class="h6 text-dark font-weight-bold mb-4"]')->text();
        dd($text);
        $dataw=explode(' ',$text);



            $target = "Contract Source Code Verified ";
            if (in_array($target, $dataw)) {
                $key = array_search($target, $dataw);
            }

dd($key);
            // $ch = curl_init();

            // // set url
            // curl_setopt($ch, CURLOPT_URL, 'https://app.scrapingbee.com/api/v1/?api_key=58I5XPC2YS6ZA0KUT1ZZ5M35Z71RO0GXDYHYRZ65R5OGXS162HXZYBY7UVQB7QDL3BCD8OUYIULZAIC7&url=https%3A%2F%2Fbscscan.com%2Ftoken%2F0xec3422ef92b2fb59e84c8b02ba73f1fe84ed8d71');

            // // set method
            // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

            // // return the transfer as a string
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // // send the request and save response to $response
            // $response = curl_exec($ch);

            // // stop if fails
            // if (!$response) {
            // die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
            // }
            // $result=[];

            // libxml_use_internal_errors(true);
            // $doc = new \DOMDocument();
            // $doc->loadHTML($response);
            // $xpath = new \DOMXPath($doc);
            // $trans_name=$xpath->evaluate('//div[@id="ContentPlaceHolder1_trNoOfTxns"]//div[@class="row align-items-center"]//div[@class="col-md-4 mb-1 mb-md-0"]');

            // $trans = $xpath->evaluate('//div[@class="col-md-8"]//span[@id="totaltxns"]');
            // // dd($val);
            // foreach ($trans as $key => $transfer) {

            //     //  echo $trans_name[$key]->textContent . $transfer->textContent;
            //     $result['transfer'] =$transfer->textContent;
            // }
            //         echo "<pre>";
            //         print_r($result);
            //         exit;
            //         curl_close($ch);
    }
}
