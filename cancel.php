<?php
session_start();
header('Content-type: text/html; charset=UTF-8') ;
ini_set('display_errors', true);
date_default_timezone_set("Europe/Paris");

include_once("class/autoload.php");

if (!isset($_SESSION["flash"])){
	$_SESSION["flash"] = array();
}

$_SESSION["flash"][] = ["message" => "Le paiement a ete refuse ou abandonne par Paypal", "style" => "danger"];

header('Location: http://nobox.info/index.php');

?>