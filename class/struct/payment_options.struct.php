<?php
class payment_options extends struct
{
	protected $allowed_payment_method;
	
	public function __construct($allowed_payment_method){
		$this->allowed_payment_method = $allowed_payment_method;
	}
	
	public function set_allowed_payment_method($allowed_payment_method)
    {
        $this->allowed_payment_method = $allowed_payment_method;
    }
    
    public function get_allowed_payment_method()
    {
        return $this->allowed_payment_method;
    }
}