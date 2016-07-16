<?php
class carrier_account extends struct
{
	protected $id;
	protected $phone_number;
	protected $external_customer_id;
	protected $phone_source;
	protected $country_code;

	
	public function __construct($credit_card_id, $payer_id){
		$this->credit_card_id = $credit_card_id;
		$this->payer_id = $payer_id;
	}

	public function set_id($id)
    {
        $this->id = $id;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function set_phone_number($phone_number)
    {
        $this->phone_number = $phone_number;
    }
    public function get_phone_number()
    {
        return $this->phone_number;
    }
    public function set_external_customer_id($external_customer_id)
    {
        $this->external_customer_id = $external_customer_id;
    }
    public function get_external_customer_id()
    {
        return $this->external_customer_id;
    }
    public function set_phone_source($phone_source)
    {
        $this->phone_source = $phone_source;
    }
    public function get_phone_source()
    {
        return $this->phone_source;
    }
    public function set_country_code($country_code)
    {
        $this->country_code = $country_code;
    }
    public function get_country_code()
    {
        return $this->country_code;
    }

}
