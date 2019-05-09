<?php
namespace EtniasPeru\Helpers;

class PasarelaVisa{
    
public function __construct() {
    $Merchant="515776502";
    $AccessKey="AKIAJMS5RZP6ISU4T35Q";
    $SecretAccessKey="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";
    $merchantidtest="602545705";
    $usrtest="integraciones.visanet@necomplus.com";
    // $pwdprd="d5e7nk$M";
    $securityapitest="https://apitestenv.vnforapps.com/api.security/v1/security";
    $sessionapitest="https://apitestenv.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/";
    $autorizationapitest="https://apitestenv.vnforapps.com/api.authorization/v3/authorization/ecommerce/";

    $merchantidprd="";
    $usr="";
    $pwd="";
    $securityapiprd="https://apiprod.vnforapps.com/api.security/v1/security";
    $sessionapiprd="https://apiprod.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/";
    $autorizationapiprd="https://apiprod.vnforapps.com/api.authorization/v3/authorization/ecommerce/";

    //$MerchantPRD="110402505";
    //$AccessKeyPRD="AKIAI3S45ADIBHPAB5NQ";
    //$SecretAccessKeyPRD="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";

    #$MerchantPRD="148131802";
    #$AccessKeyPRD="AKIAJRWJQBFYLRVB22ZQ";
    #$SecretAccessKeyPRD="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";

    $MerchantPRD="341198210";
    $AccessKeyPRD="AKIAI737YRU5WIQ5W6JQ";
    $SecretAccessKeyPRD="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";
}
public function usrtest_()
    {
        return $this->usrtest;
        
    }
public static function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12).$hyphen
            .chr(125);// "}"
        $uuid = substr($uuid, 1, 36);
        return $uuid;
    }
}
public static function create_json_post($post){
            $request="{";
            for ($i=0; $i < count($post) ; $i++) { 
                $llave = key($post);
                $valor = $post[$llave];
                if($i==count($post)-1){
                    $request = $request. "\"$llave\":\"$valor\"";
                }else{
                    $request = $request. "\"$llave\":\"$valor\",";
                }
                next($post);
            }
            $request = $request."}";
            return $request;
}

public static function contador(){
    $archivo = "contador.txt"; 
    $contador = 0; 
    $fp = fopen($archivo,"r"); 
    $contador = fgets($fp, 26); 
    fclose($fp); 
    ++$contador; 
    $fp = fopen($archivo,"w+"); 
    fwrite($fp, $contador, 26); 
    fclose($fp); 
    return $contador;
}

public static function securitykey($environment,$user,$password){
    switch ($environment) {
        case 'prd':
            $merchantId = merchantidprd;
            $url = securityapiprd;
            $accessKey=usr;
            $secretKey=pwd;
            break;
        case 'dev':
            $merchantId = merchantidtest;
            $url = securityapitest;
            $accessKey=usrtest;
            $secretKey=pwdtest;
            break;
    }
    $header = array("Content-Type: application/json");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "$accessKey:$secretKey");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    #curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    #curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $key = curl_exec($ch);
    return $key;
}

public static function create_token($environment,$amount,$key){
    switch ($environment) {
        case 'prd':
            #$merchantId = merchantIdprd;
            $url = sessionapiprd.merchantidprd;
            $accessKey=usr;
            $secretKey=pwd;
            break;
        case 'dev':
            #$merchantId = merchantidtest;
            $url = sessionapitest.merchantidtest;
            $accessKey=usrtest;
            $secretKey=pwdtest;
            break;
    }
    $header = array("Content-Type: application/json","Authorization: $key");
    //var_dump($header);
    $request_body="{
        \"amount\" : {$amount},
        \"channel\" : \"web\",
        \"antifraud\" : {
            \"clientIp\" : \"192.168.22.11\",
            \"merchantDefineData\" : {
                \"MDD1\" : \"web\",
                \"MDD2\" : \"Canl\",
                \"MDD3\" : \"Canl\"
            }
        }
    }";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($ch, CURLOPT_USERPWD, "$accessKey:$secretKey");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($ch);
    #var_dump($response);
    $json = json_decode($response);
    $dato = $json->sessionKey;
    return $dato;
}

public static function authorization($environment,$key,$amount,$transactionToken,$purchaseNumber){
    switch ($environment) {
        case 'prd':
            #$merchantId = merchantIdprd;
            $url = autorizationapiprd.merchantidprd;
            break;
        case 'dev':
            #$merchantId = merchantidtest;
            $url = autorizationapitest.merchantidtest;
            break;
    }
    $header = array("Content-Type: application/json","Authorization: $key");
    $request_body="{

        \"antifraud\" : null,
        \"captureType\" : \"manual\",
        \"channel\" : \"web\",
        \"countable\" : true,
        \"order\" : {
            \"amount\" : \"$amount\",
            \"tokenId\" : \"$transactionToken\",
            \"purchaseNumber\" : \"$purchaseNumber\",
            \"currency\" : \"PEN\"
        }
    }";

    echo "<hr>";
    echo $url;
    echo "<br>";
    echo $request_body;
    echo "<hr>";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    #curl_setopt($ch, CURLOPT_USERPWD, "$accessKey:$secretKey");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($ch);
    var_dump($response);
    $json = json_decode($response);
    $json = json_encode($json, JSON_PRETTY_PRINT);
    //$dato = $json->sessionKey;
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "<hr>".$status."<hr>";
    return $json;
}




public static function post_form($array_post,$url){
    $html="<html>
    <head>
    </head>
    <Body onload=\"f1.submit();\">
    <form name=\"f1\" method=\"post\" action=\"{$url}\">";
    for ($i=0; $i < count($array_post) ; $i++) { 
        $llave = key($array_post);
        $valor = $array_post[$llave];
        $html = $html."<input type=\"hidden\" name=\"$llave\" value=\"$valor\" />";
        next($array_post);
    }
    $html = $html."</form>
    </body>
    </html>";
    return $html;
}

    
}
