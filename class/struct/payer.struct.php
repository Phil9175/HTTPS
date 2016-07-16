<?php
class payer extends struct
{
	protected $payment_method;
	protected $funding_instruments;
	protected $payer_info;
	
	public function __construct($payment_method, $funding_instruments, $payer_info){
		$this->payment_method = ($payment_method == "credit_card")?"credit_card":"paypal";
		$this->funding_instruments = $funding_instruments;
		$this->payer_info = $payer_info;
	}

	public function set_payment_method($payment_method)
    {
        $this->payment_method = $payment_method;
    }
    public function get_payment_method()
    {
        return $this->payment_method;
    }
    public function set_funding_instruments($funding_instruments)
    {
        $this->funding_instruments = $funding_instruments;
    }
    public function get_funding_instruments()
    {
        return $this->funding_instruments;
    }
    public function set_payer_info($payer_info)
    {
        $this->payer_info = $payer_info;
    }
    public function get_payer_info()
    {
        return $this->payer_info;
    }


}