<?php
class shipping_address extends struct
{
	protected $line1;
	protected $line2;
	protected $city;
	protected $country_code;
	protected $postal_code;
	protected $state;
	protected $phone;
	protected $status;
	protected $recipient_name;
	
	public function __construct($line1, $line2, $city, $country_code, $postal_code, $state, $phone, $status, $recipient_name){
		$this->line1 = $line1;
		$this->line2 = $line2;
		$this->city = $city;
		$this->country_code = $country_code;
		$this->postal_code = $postal_code;
		$this->state = $state;
		$this->phone = $phone;
		$this->status = $status;
		$this->recipient_name = $recipient_name;
	}
	
	public function set_line1($line1)
	{
		$this->line1 = $line1;
	}
	public function get_line1()
	{
		return $this->line1;
	}
	public function set_line2($line2)
	{
		$this->line2 = $line2;
	}
	public function get_line2()
	{
		return $this->line2;
	}
	public function set_city($city)
	{
		$this->city = $city;
	}
	public function get_city()
	{
		return $this->city;
	}
	public function set_country_code($country_code)
	{
		$this->country_code = $country_code;
	}
	public function get_country_code()
	{
		return $this->country_code;
	}
	public function set_postal_code($postal_code)
	{
		$this->postal_code = $postal_code;
	}
	public function get_postal_code()
	{
		return $this->postal_code;
	}
	public function set_state($state)
	{
		$this->state = $state;
	}
	public function get_state()
	{
		return $this->state;
	}
	public function set_phone($phone)
	{
		$this->phone = $phone;
	}
	public function get_phone()
	{
		return $this->phone;
	}
	public function set_status($status)
	{
		$this->status = $status;
	}
	public function get_status()
	{
		return $this->status;
	}
	public function set_recipient_name($recipient_name)
	{
		$this->recipient_name = $recipient_name;
	}
	public function get_recipient_name()
	{
		return $this->recipient_name;
	}


	
}