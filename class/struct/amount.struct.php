<?php
class amount extends struct
{
	protected $currency;
	protected $total;
	protected $details;
	
	public function __construct($currency, $total, $details){
		$this->currency = $currency;
		$this->total = $total;
		$this->details = $details;
	}
	
	public function set_currency($currency)
    {
        $this->currency = $currency;
    }
    public function get_currency()
    {
        return $this->currency;
    }
    public function set_total($total)
    {
        $this->total = $total;
    }
    public function get_total()
    {
        return $this->total;
    }
    public function set_details($details)
    {
        $this->details = $details;
    }
    public function get_details()
    {
        return $this->details;
    }



}