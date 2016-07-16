<?php
class credit_card_token extends struct
{
	protected $code;
	protected $funding_account_id;
	protected $amount;


	public function set_code($code)
    {
        $this->code = $code;
    }
    public function get_code()
    {
        return $this->code;
    }
    public function set_funding_account_id($funding_account_id)
    {
        $this->funding_account_id = $funding_account_id;
    }
    public function get_funding_account_id()
    {
        return $this->funding_account_id;
    }
    public function set_amount($amount)
    {
        $this->amount = $amount;
    }
    public function get_amount()
    {
        return $this->amount;
    }




}
