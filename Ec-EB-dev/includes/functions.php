
<?php

function redirect($location){
	header("Location: $location");
}

function query($statement){
	global $conn;
	return mysqli_query($conn,$statement);
}

function confirm($result){
	global $conn;
	if(!$result){
		die("QUERY FAILED" . mysqli_error($conn));
	}
}

function escape_string($string){
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}

function fetch_array($result){
	return mysqli_fetch_assoc($result);
}


function set_message($message){
	return $message;
}


?>