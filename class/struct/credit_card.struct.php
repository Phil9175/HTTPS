<?php
class credit_card extends struct
{
	protected $number;
	protected $type;
	protected $expire_month;
	protected $expire_year;
	protected $cvv2;
	protected $first_name;
	protected $last_name;
	protected $billing_address;
	protected $external_customer_id;
	
	public function __construct($number, $type, $expire_month, $expire_year, $cvv2, $first_name, $last_name, $billing_address, $external_customer_id){
		$this->number = $number;
		$this->type = $type;
		$this->expire_month = $expire_month;
		$this->expire_year = $expire_year;
		$this->cvv2 = $cvv2;
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->billing_address = $billing_address;
		$this->external_customer_id = $external_customer_id;
	}
	
	public function set_number($number)
    {
        $this->number = $number;
    }
    public function get_number()
    {
        return $this->number;
    }
    public function set_type($type)
    {
        $this->type = $type;
    }
    public function get_type()
    {
        return $this->type;
    }
    public function set_expire_month($expire_month)
    {
        $this->expire_month = $expire_month;
    }
    public function get_expire_month()
    {
        return $this->expire_month;
    }
    public function set_expire_year($expire_year)
    {
        $this->expire_year = $expire_year;
    }
    public function get_expire_year()
    {
        return $this->expire_year;
    }
    public function set_cvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
    }
    public function get_cvv2()
    {
        return $this->cvv2;
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
    public function set_billing_address($billing_address)
    {
        $this->billing_address = $billing_address;
    }
    public function get_billing_address()
    {
        return $this->billing_address;
    }
    public function set_external_customer_id($external_customer_id)
    {
        $this->external_customer_id = $external_customer_id;
    }
    public function get_external_customer_id()
    {
        return $this->external_customer_id;
    }


	
	
	
}