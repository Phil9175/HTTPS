<?php
class bank_account extends struct
{
	protected $account_number;
	protected $account_number_type;
	protected $routing_number;
	protected $account_type;
	protected $account_name;
	protected $check_type;
	protected $auth_type;
	protected $auth_capture_timestamp;
	protected $bank_name;
	protected $country_code;
	protected $first_name;
	protected $last_name;
	protected $birth_date;
	protected $billing_address;
	protected $payer_id;
	protected $external_customer_id;
	protected $merchant_id;
	
	public function __construct($account_number, $account_number_type, $routing_number, $account_type, $account_name, $check_type, $auth_type, $auth_capture_timestamp, $bank_name, $country_code, $first_name, $last_name, $birth_date, $billing_address, $payer_id, $external_customer_id, $merchant_id){
		
	}
	
	public function set_account_number($account_number)
    {
        $this->account_number = $account_number;
    }
    public function get_account_number()
    {
        return $this->account_number;
    }
    public function set_account_number_type($account_number_type)
    {
        $this->account_number_type = $account_number_type;
    }
    public function get_account_number_type()
    {
        return $this->account_number_type;
    }
    public function set_routing_number($routing_number)
    {
        $this->routing_number = $routing_number;
    }
    public function get_routing_number()
    {
        return $this->routing_number;
    }
    public function set_account_type($account_type)
    {
        $this->account_type = $account_type;
    }
    public function get_account_type()
    {
        return $this->account_type;
    }
    public function set_account_name($account_name)
    {
        $this->account_name = $account_name;
    }
    public function get_account_name()
    {
        return $this->account_name;
    }
    public function set_check_type($check_type)
    {
        $this->check_type = $check_type;
    }
    public function get_check_type()
    {
        return $this->check_type;
    }
    public function set_auth_type($auth_type)
    {
        $this->auth_type = $auth_type;
    }
    public function get_auth_type()
    {
        return $this->auth_type;
    }
    public function set_auth_capture_timestamp($auth_capture_timestamp)
    {
        $this->auth_capture_timestamp = $auth_capture_timestamp;
    }
    public function get_auth_capture_timestamp()
    {
        return $this->auth_capture_timestamp;
    }
    public function set_bank_name($bank_name)
    {
        $this->bank_name = $bank_name;
    }
    public function get_bank_name()
    {
        return $this->bank_name;
    }
    public function set_country_code($country_code)
    {
        $this->country_code = $country_code;
    }
    public function get_country_code()
    {
        return $this->country_code;
    }
    public function set_first_name($first_name)
    {
        $this->first_name = $first_name;
    }
    public function get_first_name()
    {
        return $this->first_name;
    }
    public function set_last_name($last_name)
    {
        $this->last_name = $last_name;
    }
    public function get_last_name()
    {
        return $this->last_name;
    }
    public function set_birth_date($birth_date)
    {
        $this->birth_date = $birth_date;
    }
    public function get_birth_date()
    {
        return $this->birth_date;
    }
    public function set_billing_address($billing_address)
    {
        $this->billing_address = $billing_address;
    }
    public function get_billing_address()
    {
        return $this->billing_address;
    }
    public function set_payer_id($payer_id)
    {
        $this->payer_id = $payer_id;
    }
    public function get_payer_id()
    {
        return $this->payer_id;
    }
    public function set_external_customer_id($external_customer_id)
    {
        $this->external_customer_id = $external_customer_id;
    }
    public function get_external_customer_id()
    {
        return $this->external_customer_id;
    }
    public function set_merchant_id($merchant_id)
    {
        $this->merchant_id = $merchant_id;
    }
    public function get_merchant_id()
    {
        return $this->merchant_id;
    }
	


}