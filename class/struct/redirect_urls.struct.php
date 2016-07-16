<?php
class redirect_urls extends struct
{
	protected $return_url;
	protected $cancel_url;
	
	public function __construct($return_url, $cancel_url){
		$this->return_url = $return_url;
		$this->cancel_url = $cancel_url;	
	}
	
	public function __toString(){
		return json_encode(["return_url" => $this->return_url, "cancel_url" => $this->cancel_url]);
	}
	
	public function set_return_url($return_url)
    {
        $this->return_url = $return_url;
    }
    public function get_return_url()
    {
        return $this->return_url;
    }
    public function set_cancel_url($cancel_url)
    {
        $this->cancel_url = $cancel_url;
    }
    public function get_cancel_url()
    {
        return $this->cancel_url;
    }

}