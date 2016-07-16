<?php
class incentive extends struct
{
	protected $code;
	
	public function __construct($code){
		$this->code = $code;
	}

	public function set_code($code)
    {
        $this->code = $code;
    }
    public function get_code()
    {
        return $this->code;
    }


}
