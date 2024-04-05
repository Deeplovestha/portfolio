<?php 
	require_once('../Database/database.php');
	require_once('../Database/util.php');
	$database = new Database();
	$util = new Util();

	
	 $about = $database->getAbout();
		 $contact = $database->getContact();
		 $slider = $database->getSlider();
		  $biodata = $database->getBiodata();


?>