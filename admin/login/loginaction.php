<?php session_start(); require_once("../Database/database.php");
	require_once("../Database/util.php");

	$database = new Database();
	$util = new Util();

	$username = $_POST["username"];
	$password = $_POST["password"];
	$encPassword = md5($password);

	//echo $username;
	//echo $encPassword;

	 $sql = "SELECT user_login, user_password FROM tbl_users WHERE user_login = '".$username ."' AND user_password='".$encPassword."'";
  
	
    
	//echo $sql;
	//die();
	 //$connection = $database->config();
	 //$connection = mysqli_connect("localhost","ehsnepal_himchuli","PRGeN2UNAat!","ehsnepal_himchulipay");
    $connection = $database->config();
	//print_r($connection);
	//die();
   $result=mysqli_query($connection,$sql);
		   //print_r($result);
		   //die();
   $count = mysqli_num_rows($result);
  //echo $count;
 // die();
   
  if($count=='1'){

	   //echo "Logged In";
	   //die();
   		$token = $util->generateToken();

   	
   		//die();
   		$_SESSION["username"]= $username;
   		$_SESSION["token"]= $token;
   		$util->saveToken($username,$token);
   		//echo $_SESSION["username"];
		//die();


   		$loginarray = array("status"=>"1", "token"=>$token);
   			echo json_encode($loginarray);
   }

   else{
	$loginarray = array("status"=>"0","message"=>"Not logged in..");
   			echo json_encode($loginarray);
}
      

  


?>