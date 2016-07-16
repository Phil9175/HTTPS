<?php
class struct 
{
	private $classe;
	
	public function __construct(){
		$this->classe = get_called_class();
	}
	
	public function __toString(){
		$return = array();
		
		$all_vars = array_keys(get_object_vars($this));
		$pdo_vars = array_keys(get_class_vars(get_class()));
		$child_vars = array_diff($all_vars, $pdo_vars);
		
		foreach($child_vars as $var){
			if ($this->$var != NULL){
				$return[$var] = $this->$var;
			}
		}
			
		return json_encode($return);
		
	}
	
	
	
}