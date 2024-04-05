<?php session_start();
	 require_once("../Database/database.php");
	 $database = new Database();
	
	 $userName = $_SESSION["username"];
	 $token = $_SESSION["token"];
	$databaseToken = $database->getTokenFromUser($userName);
	
	//die();
	 
	if($token==$databaseToken){
		if(is_null($token)){
			
			echo'<script language="javascript">';
			echo'window.location.href = "../login/"';
			echo' </script>';
		}
		
	}
	else{
		
		echo'<script language="javascript">';
		echo'window.location.href = "../login/"';
		echo' </script>';
	}


	


?>