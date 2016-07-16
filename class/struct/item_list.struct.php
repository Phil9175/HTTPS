<?php
class item_list extends struct
{
	protected $items;
	protected $shipping_address;
	protected $shipping_method;
	protected $shipping_phone_number;
	
	public function __construct ($items, $shipping_address, $shipping_method, $shipping_phone_number){
		$this->items = $items;
		$this->shipping_address = $shipping_address;
		$this->shipping_method = $shipping_method;
		$this->shipping_phone_number = $shipping_phone_number;
	}
	
	public function set_items($items)
    {
        $this->items = $items;
    }
    public function get_items()
    {
        return $this->items;
    }
    public function set_shipping_address($shipping_address)
    {
        $this->shipping_address = $shipping_address;
    }
    public function get_shipping_address()
    {
        return $this->shipping_address;
    }
    public function set_shipping_method($shipping_method)
    {
        $this->shipping_method = $shipping_method;
    }
    public function get_shipping_method()
    {
        return $this->shipping_method;
    }
    public function set_shipping_phone_number($shipping_phone_number)
    {
        $this->shipping_phone_number = $shipping_phone_number;
    }
    public function get_shipping_phone_number()
    {
        return $this->shipping_phone_number;
    }


	
}