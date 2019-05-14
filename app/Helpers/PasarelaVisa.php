<?php
namespace EtniasPeru\Helpers;

class PasarelaVisa{
    
    protected $Merchant = "";
    protected $AccessKey = "";
    protected $SecretAccessKey = "";
    protected $merchantidtest = "";
    protected $usrtest = "";
    protected $pwdtest = "";
    protected $securityapitest = "";
    protected $sessionapitest = "";
    protected $autorizationapitest = "";
    protected $merchantidprd = "";
    protected $usr = "";
    protected $pwd = "";
    protected $securityapiprd = "";
    protected $sessionapiprd = "";
    protected $autorizationapiprd = "";
    protected $MerchantPRD = "";
    protected $AccessKeyPRD = "";
    protected $SecretAccessKeyPRD = "";
    
    protected $url = "";
    public function __construct() {
        // $this->Merchant="342062522";
        // $this->AccessKey="AKIAJMS5RZP6ISU4T35Q";
        // $this->SecretAccessKey="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";
        $this->merchantidtest="342062522";
        $this->usrtest="integraciones.visanet@necomplus.com";
        $this->pwdtest='d5e7nk$M';
        $this->securityapitest="https://apitestenv.vnforapps.com/api.security/v1/security";
        $this->sessionapitest="https://apitestenv.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/";
        $this->autorizationapitest="https://apitestenv.vnforapps.com/api.authorization/v3/authorization/ecommerce/";

        $this->merchantidprd="";
        $this->usr="";
        $this->pwd='';
        $this->securityapiprd="https://apiprod.vnforapps.com/api.security/v1/security";
        $this->sessionapiprd="https://apiprod.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/";
        $this->autorizationapiprd="https://apiprod.vnforapps.com/api.authorization/v3/authorization/ecommerce/";

        //$this->MerchantPRD="110402505";
        //$this->AccessKeyPRD="AKIAI3S45ADIBHPAB5NQ";
        //$this->SecretAccessKeyPRD="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";

        #$this->MerchantPRD="148131802";
        #$this->AccessKeyPRD="AKIAJRWJQBFYLRVB22ZQ";
        #$this->SecretAccessKeyPRD="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";

        $this->MerchantPRD="341198210";
        $this->AccessKeyPRD="AKIAI737YRU5WIQ5W6JQ";
        $this->SecretAccessKeyPRD="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";
    }
    
    public function Merchant()
    {
        return $this->Merchant;
        
    }
    
    public function AccessKey()
    {
        return $this->AccessKey;
        
    }
    public function SecretAccessKey()
    {
        return $this->SecretAccessKey;
        
    }
    public function merchantidtest()
    {
        return $this->merchantidtest;   
    }
    public function usrtest()
    {
        return $this->usrtest;   
    }
    public function pwdtest()
    {
        return $this->pwdtest;   
    }
    public function securityapitest()
    {
        return $this->securityapitest;   
    }
    public function sessionapitest()
    {
        return $this->sessionapitest;   
    }
    public function autorizationapitest()
    {
        return $this->autorizationapitest;   
    }
    public function merchantidprd()
    {
        return $this->merchantidprd;   
    }
    public function usr()
    {
        return $this->usr;   
    }
    public function pwd()
    {
        return $this->pwd;   
    }
    public function securityapiprd()
    {
        return $this->securityapiprd;   
    }
    public function sessionapiprd()
    {
        return $this->sessionapiprd;   
    }
    public function autorizationapiprd()
    {
        return $this->autorizationapiprd;   
    }
    public function MerchantPRD()
    {
        return $this->MerchantPRD;   
    }
    public function AccessKeyPRD()
    {
        return $this->AccessKeyPRD;   
    }
    public function SecretAccessKeyPRD()
    {
        return $this->SecretAccessKeyPRD;   
    }
    public function url()
    {
        return $this->url;   
    }
    
public  function getGUID(){
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
public  function create_json_post($post){
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

public  function contador(){
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

public  function securitykey($environment,$user,$password){
    switch ($environment) {
        case 'prd':
            $merchantId = $this->merchantidprd;
            $url = $this->securityapiprd;
            $accessKey=$this->usr;
            $secretKey=$this->pwd;
            break;
        case 'dev':
            $merchantId = $this->merchantidtest;
            $url = $this->securityapitest;
            $accessKey=$this->usrtest;
            $secretKey=$this->pwdtest;
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

public  function create_token($environment,$amount,$key){
    switch ($environment) {
        case 'prd':
            #$merchantId = merchantIdprd;
            $url = $this->sessionapiprd.$this->merchantidprd;
            $accessKey=$this->usr;
            $secretKey=$this->pwd;
            break;
        case 'dev':
            #$merchantId = merchantidtest;
            $url = $this->sessionapitest.$this->merchantidtest;
            $accessKey=$this->usrtest;
            $secretKey=$this->pwdtest;
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

public  function authorization($environment,$key,$amount,$transactionToken,$purchaseNumber){
    switch ($environment) {
        case 'prd':
            #$merchantId = merchantIdprd;
            $this->url = $this->autorizationapiprd.$this->merchantidprd;
            break;
        case 'dev':
            #$merchantId = merchantidtest;
            $this->url = $this->autorizationapitest.$this->merchantidtest;
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
    
    $dds=$this->url ;
    echo "<hr>";
    echo $this->url;
    echo "<br>";
    echo $request_body;
    echo "<hr>";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $dds);
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

public  function post_form($array_post,$url_){
    $html="<html>
    <head>
    </head>
    <Body onload=\"f1.submit();\">
    <form name=\"f1\" method=\"post\" action=\"{$url_}\">";
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
