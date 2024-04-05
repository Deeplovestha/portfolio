<?php 
	require_once('Database/database.php');
	//require_once('../Database/util.php');
	$database = new Database();
	//$util = new Util();

	
	 $about = $database->getAbout();
     $contact = $database->getContact();
	 $slider = $database->getSlider();

	 $contactNo = $contact[0]["c_phoneno"];
	 $email = $contact[0]["c_email"];
	 $mapCode = $contact[0]["c_mapcode"];
	 $location = $contact[0]["c_location"];

   $companyName = "DeepLove Shrestha"
?>