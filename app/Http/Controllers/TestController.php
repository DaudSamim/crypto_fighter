<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;
use Browser\Casper;
use Symfony\Component\Panther\PantherTestCase;

use Spatie\Browsershot\Browsershot;
class TestController extends Controller
{

    public function webscrap()
    {


            $ch = curl_init();

            // set url
            curl_setopt($ch, CURLOPT_URL, 'https://app.scrapingbee.com/api/v1/?api_key=58I5XPC2YS6ZA0KUT1ZZ5M35Z71RO0GXDYHYRZ65R5OGXS162HXZYBY7UVQB7QDL3BCD8OUYIULZAIC7&url=https%3A%2F%2Fbscscan.com%2Ftoken%2F0xec3422ef92b2fb59e84c8b02ba73f1fe84ed8d71');

            // set method
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

            // return the transfer as a string
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // send the request and save response to $response
            $response = curl_exec($ch);

            // stop if fails
            if (!$response) {
            die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
            }
            $result=[];

            libxml_use_internal_errors(true);
            $doc = new \DOMDocument();
            $doc->loadHTML($response);
            $xpath = new \DOMXPath($doc);
            $trans_name=$xpath->evaluate('//div[@id="ContentPlaceHolder1_trNoOfTxns"]//div[@class="row align-items-center"]//div[@class="col-md-4 mb-1 mb-md-0"]');

            $trans = $xpath->evaluate('//div[@class="col-md-8"]//span[@id="totaltxns"]');
            // dd($val);
            foreach ($trans as $key => $transfer) {

                //  echo $trans_name[$key]->textContent . $transfer->textContent;
                $result['transfer'] =$transfer->textContent;
            }
                    echo "<pre>";
                    print_r($result);
                    exit;
                    curl_close($ch);
    }
}
