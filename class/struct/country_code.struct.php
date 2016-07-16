<?php
class country_code extends struct
{
	protected $country_code;

	
	public function __construct($country_code){
		$this->country_code = $country_code;
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
