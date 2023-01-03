<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BancoController extends Controller
{
    public function getToken()
        {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://oauth.hm.bb.com.br/oauth/token",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYPEER=> false,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "grant_type=client_credentials&scope=pix.read%20pix.write%20cob.read%20cob.write%20pix.read%20pix.write",
                //CURLOPT_COOKIE => "JSESSIONID=mhx1IQ4-Dy59iw_60APuyZosEoMjx1C6Z0UVcPdXSRoHC8zKL5Nm!-1439702139",
                CURLOPT_HTTPHEADER => [
                    "Authorization: ".env("BB_BASIC"),
                    "Content-Type: application/x-www-form-urlencoded"
                ],
                ]);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            return "cURL Error #:" . $err;
            } else {
                $strAccessToken = json_decode($response)->access_token;
            return $strAccessToken;
            }
        }
}
