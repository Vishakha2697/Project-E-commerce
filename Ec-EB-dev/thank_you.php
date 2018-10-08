<?php include "includes/db.php"; ?>
<?php //include "includes/functions.php"; ?>

<?php require_once("cart.php"); ?>


<?php 

if(isset($_GET['tx'])){
	$amount = $_GET['amt'];
	$currency = $_GET['cc'];
	$transaction = $_GET['tx'];
	$astatus = $_GET['st'];


$query = query("INSERT INTO orders(order_amount,order_transaction,order_status,order_currency)VALUES('{$amount}','{$currency}','{$transaction}','{$status}')");

confirm($query);

session_destroy();

}


 ?>
<html>
<head>
   
    <title>Finishing Touch | Thank You</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Finishing Touch</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="js/lib/jquery-1.10.2.min.js"></script>
	<script src="js/web.js"></script>
	

</head>
<body>
    
</body>
</html>

<div class="container"> 

<h1 class="text-center">THANK YOU</h1>
<h2 class="text-center">WE HOPE TO SEE YOU AGAIN SOON...</h2>

</div>


