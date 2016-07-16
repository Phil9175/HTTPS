<?php
include_once("paypal.class.php");
include_once("struct/struct.class.php");

spl_autoload_register( function($class_name) {
    if (file_exists("class/struct/" . $class_name . ".struct.php"))
	{
		include_once("class/struct/" . $class_name . ".struct.php");
	}
	
});
?>