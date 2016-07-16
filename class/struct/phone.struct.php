<?php
class phone extends struct
{
	protected $country_code;
	protected $national_number;
	protected $extension;
		
	public function __construct($country_code, $national_number, $extension){
		$this->country_code = $country_code;
		$this->national_number = $national_number;
		$this->extension = $extension;
	}
	
	public function set_country_code($country_code)
    {
        $this->country_code = $country_code;
    }
    public function get_country_code()
    {
        return $this->country_code;
    }
    public function set_national_number($national_number)
    {
        $this->national_number = $national_number;
    }
    public function get_national_number()
    {
        return $this->national_number;
    }
    public function set_extension($extension)
    {
        $this->extension = $extension;
    }
    public function get_extension()
    {
        return $this->extension;
    }


	
}