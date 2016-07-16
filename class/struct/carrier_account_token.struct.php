<?php
class carrier_account_token extends struct
{
	protected $carrier_account_id;
	protected $external_customer_id;
	
	public function __construct($carrier_account_id, $external_customer_id){
		$this->carrier_account_id = $carrier_account_id;
		$this->external_customer_id = $external_customer_id;
	}

	public function set_carrier_account_id($carrier_account_id)
    {
        $this->carrier_account_id = $carrier_account_id;
    }
    public function get_carrier_account_id()
    {
        return $this->carrier_account_id;
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
