<?php
class credit_card_token extends struct
{
	protected $credit_card_id;
	protected $payer_id;
	
	public function __construct($credit_card_id, $payer_id){
		$this->credit_card_id = $credit_card_id;
		$this->payer_id = $payer_id;
	}

	public function set_credit_card_id($credit_card_id)
    {
        $this->credit_card_id = $credit_card_id;
    }
    public function get_credit_card_id()
    {
        return $this->credit_card_id;
    }
    public function set_payer_id($payer_id)
    {
        $this->payer_id = $payer_id;
    }
    public function get_payer_id()
    {
        return $this->payer_id;
    }


}
