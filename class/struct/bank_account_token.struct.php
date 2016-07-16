<?php
class bank_account_token extends struct
{
	protected $bank_id;
	protected $external_customer_id;
	protected $mandate_reference_number;
	
	
	public function __construct($credit_card_id, $payer_id){
		$this->credit_card_id = $credit_card_id;
		$this->payer_id = $payer_id;
	}
	
	public function set_bank_id($bank_id)
    {
        $this->bank_id = $bank_id;
    }
    public function get_bank_id()
    {
        return $this->bank_id;
    }
    public function set_external_customer_id($external_customer_id)
    {
        $this->external_customer_id = $external_customer_id;
    }
    public function get_external_customer_id()
    {
        return $this->external_customer_id;
    }
    public function set_mandate_reference_number($mandate_reference_number)
    {
        $this->mandate_reference_number = $mandate_reference_number;
    }
    public function get_mandate_reference_number()
    {
        return $this->mandate_reference_number;
    }


	
	
}
