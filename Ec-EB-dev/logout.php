
<?php session_start(); ?>

<?php 
	
	$_SESSION['name'] 	=  null;
    session_destroy();



	header("Location: index.php");

?>