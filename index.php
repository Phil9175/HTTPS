<?php
session_start();
header('Content-type: text/html; charset=UTF-8') ;
ini_set('display_errors', true);
date_default_timezone_set("Europe/Paris");

include_once("class/autoload.php");
echo $_POST["envoie"];
if (isset($_POST["envoie"]) && $_POST["envoie"] == "yes"){
	if (is_numeric($_POST["montant"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
		$paypal = new paypal();
		$redirect_urls = new redirect_urls("http://nobox.info/success.php", "http://nobox.info/cancel.php");
		$payer = new payer("paypal", NULL, NULL);
		$amount = new amount("EUR", $_POST["montant"], NULL);	
		$paiement = $paypal->make_payment($redirect_urls, $payer, $amount);
		header('Location: '.$paiement->links[1]->href);
	}
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Paypal HTTPS</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<style>
.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form {
	font-family: Arial, Helvetica, sans-serif;
	color: black
}
.bootstrap-iso form button, .bootstrap-iso form button:hover {
	color: white !important;
}
.asteriskField {
	color: red;
}
</style>
</head>
<body>
<div class="bootstrap-iso">
	<div class="container-fluid">
		<div class="row">
			<?php
  	if (isset($_SESSION["flash"])):
  		foreach($_SESSION["flash"] as $value => $key):
  ?>
			<div class="alert alert-<?php echo $key["style"]; ?>"> <?php echo $key["message"]; ?> </div>
			<?php
		endforeach;
		unset($_SESSION["flash"]);
	endif;
	?>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<form method="post" action="index.php">
					<input type="hidden" name="envoie" value="yes">
					<div class="form-group ">
						<label class="control-label requiredField" for="name"> Nom <span class="asteriskField"> * </span> </label>
						<div class="input-group">
							<div class="input-group-addon"> <i class="fa fa-male"> </i> </div>
							<input class="form-control" id="name" name="name" type="text"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label requiredField" for="email"> Email <span class="asteriskField"> * </span> </label>
						<div class="input-group">
							<div class="input-group-addon"> <i class="fa fa-paypal"> </i> </div>
							<input class="form-control" id="email" name="email" type="text"/>
						</div>
					</div>
					<div class="form-group ">
						<label class="control-label requiredField" for="montant"> Montant <span class="asteriskField"> * </span> </label>
						<div class="input-group">
							<div class="input-group-addon"> <i class="fa fa-eur"> </i> </div>
							<input class="form-control" id="montant" name="montant" type="text"/>
						</div>
					</div>
					<div class="form-group">
						<div>
							<button class="btn btn-primary " name="submit" type="submit"> Envoyer </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
