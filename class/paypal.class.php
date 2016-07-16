<?php
class paypal
{
	public static $url = "https://api.sandbox.paypal.com";
	public static $clientId = "";
	public static $secret = "";
	protected $token;
	
	public function __construct(){
        $curl = curl_init(self::$url."/v1/oauth2/token");
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Accept: application/json',
			'Accept-Language: en_US'
			));
		curl_setopt($curl, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
	    curl_setopt($curl, CURLOPT_USERPWD, self::$clientId.":".self::$secret);
		if (curl_exec($curl) == false){
			var_dump(curl_error($curl));
		}else{
			$curl_response = curl_exec($curl);
		}
        curl_close($curl);
		$response = json_decode($curl_response);
		$this->token = $response->access_token;
	}
	
	
    public function make_payment($redirect_urls, $payer, $amount)
    {	
		$curl = curl_init(self::$url."/v1/payments/payment");
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type:application/json',
			'Authorization: Bearer '.$this->token
			));
			
		$champ = array();
		$champ = ["intent" => "sale",
					"redirect_urls" => $redirect_urls,
					"payer" => $payer,
					"transactions" => ["reference_id" => "12",
					"amount" => $amount]
					];
					
		curl_setopt($curl, CURLOPT_POSTFIELDS, '{
												"intent":"sale",
												"redirect_urls":'.$redirect_urls.',
												"payer":'.$payer.',
												"transactions":[
												  {
													"amount":'.$amount.'
												  }
												]
											  }');
		if (curl_exec($curl) == false){
			var_dump(curl_error($curl));
		}else{
			$curl_response = curl_exec($curl);
		}
        curl_close($curl);
		return json_decode($curl_response);
    }
	
	public function execute_payment($identifiant, $payer_id)
	{
		$curl = curl_init(self::$url."/v1/payments/payment/".$identifiant."/execute/");
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type:application/json',
			'Authorization: Bearer '.$this->token
			));
		$champ = array();
		$champ = ["intent" => "sale",
					"redirect_urls" => $redirect_urls,
					"payer" => $payer,
					"transactions" => ["reference_id" => "12",
					"amount" => $amount]
					];
					
		curl_setopt($curl, CURLOPT_POSTFIELDS, '{ "payer_id" : "'.$payer_id.'" }');
		if (curl_exec($curl) == false){
			var_dump(curl_error($curl));
		}else{
			$curl_response = curl_exec($curl);
		}
        curl_close($curl);
		return json_decode($curl_response);
	}
	
}