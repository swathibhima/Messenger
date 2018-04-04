<?php


include "db.php";
//check if form is submiyyed

if(isset($_POST['submit'])){
	
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	// set timezons
	
	date_default_timezone_set('America/Los_Angeles');
	$time= date('H:i:s', time());
	
	
	if(!isset($user) || $user == '' || !isset($message) || $message== '' ){
		
		
		$error = "please fill in your name and message";
		header("Location: index.php? error=".urlencode($error));
		exit();
		
	}else{
		
		echo $query = "insert into shouts (user,message,time) values('$user','$message','$time')";
		if(!mysqli_query($con, $query)){
			
			die('Error:' . mysqli_error($con));
			
			
			
		}else{
		
		header("Location: index.php");
		exit();
	}
	
	}
	
}




?>