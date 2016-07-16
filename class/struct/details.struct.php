<?php
class details extends struct
{
	protected $subtotal;
	protected $shipping;
	protected $tax;
	protected $handling_fee;
	protected $shipping_discount;
	protected $insurance;
	protected $gift_wrap;
	
	public function __construct($subtotal, $shipping, $tax, $handling_fee, $shipping_discount, $insurance, $gift_wrap){
		$this->subtotal = $subtotal;
		$this->shipping = $shipping;
		$this->tax = $tax;
		$this->handling_fee = $handling_fee;
		$this->shipping = $shipping_discount;
		$this->insurance = $insurance;
		$this->gift_wrap = $gift_wrap;
	}
	
	 public function set_subtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    }
    public function get_subtotal()
    {
        return $this->subtotal;
    }
    public function set_shipping($shipping)
    {
        $this->shipping = $shipping;
    }
    public function get_shipping()
    {
        return $this->shipping;
    }
    public function set_tax($tax)
    {
        $this->tax = $tax;
    }
    public function get_tax()
    {
        return $this->tax;
    }
    public function set_handling_fee($handling_fee)
    {
        $this->handling_fee = $handling_fee;
    }
    public function get_handling_fee()
    {
        return $this->handling_fee;
    }
    public function set_shipping_discount($shipping_discount)
    {
        $this->shipping_discount = $shipping_discount;
    }
    public function get_shipping_discount()
    {
        return $this->shipping_discount;
    }
    public function set_insurance($insurance)
    {
        $this->insurance = $insurance;
    }
    public function get_insurance()
    {
        return $this->insurance;
    }
    public function set_gift_wrap($gift_wrap)
    {
        $this->gift_wrap = $gift_wrap;
    }
    public function get_gift_wrap()
    {
        return $this->gift_wrap;
    }


	
}