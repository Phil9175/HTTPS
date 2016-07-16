<?php
class payer_info extends struct
{
	protected $email;
	protected $external_remember_me_id;
	protected $phone;
	protected $phone_type;
	protected $birth_date;
	protected $tax_id;
	protected $tax_id_type;
	protected $country_code;
	protected $billing_address;
	
	public function __construct($email, $external_remember_me_id, $phone, $phone_type, $birth_date, $tax_id, $tax_id_type, $country_code, $billing_address){
		$this->email = $email;
		$this->external_remember_me_id = $external_remember_me_id;
		$this->phone = $phone;
		$this->phone_type = $phone_type;
		$this->birth_date = $birth_date;
		$this->tax_id = $tax_id;
		$this->tax_id_type = $tax_id_type;
		$this->country_code = $country_code;
		$this->billing_address = $billing_address;
	}
	
	 public function set_email($email)
    {
        $this->email = $email;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function set_external_remember_me_id($external_remember_me_id)
    {
        $this->external_remember_me_id = $external_remember_me_id;
    }
    public function get_external_remember_me_id()
    {
        return $this->external_remember_me_id;
    }
    public function set_phone($phone)
    {
        $this->phone = $phone;
    }
    public function get_phone()
    {
        return $this->phone;
    }
    public function set_phone_type($phone_type)
    {
        $this->phone_type = $phone_type;
    }
    public function get_phone_type()
    {
        return $this->phone_type;
    }
    public function set_birth_date($birth_date)
    {
        $this->birth_date = $birth_date;
    }
    public function get_birth_date()
    {
        return $this->birth_date;
    }
    public function set_tax_id($tax_id)
    {
        $this->tax_id = $tax_id;
    }
    public function get_tax_id()
    {
        return $this->tax_id;
    }
    public function set_tax_id_type($tax_id_type)
    {
        $this->tax_id_type = $tax_id_type;
    }
    public function get_tax_id_type()
    {
        return $this->tax_id_type;
    }
    public function set_country_code($country_code)
    {
        $this->country_code = $country_code;
    }
    public function get_country_code()
    {
        return $this->country_code;
    }
    public function set_billing_address($billing_address)
    {
        $this->billing_address = $billing_address;
    }
    public function get_billing_address()
    {
        return $this->billing_address;
    }




}