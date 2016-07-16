<?php
session_start();
header('Content-type: text/html; charset=UTF-8') ;
ini_set('display_errors', true);
date_default_timezone_set("Europe/Paris");

include_once("class/autoload.php");

$_GET["paymentId"];
$_GET["token"];
$_GET["PayerID"];

$paypal = new paypal();
$paypal->execute_payment($_GET["paymentId"], $_GET["PayerID"]);

?>