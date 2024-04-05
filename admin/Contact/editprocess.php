<?php
require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();


$contactID = $_POST["c_id"];
 $phoneno = $_POST["c_phoneno"];
 $email = $_POST["c_email"];
 $web = $_POST["c_web"];
 $location = $_POST["c_location"];
   $mapcode = $_POST["c_mapcode"];


   $query = 'UPDATE tbl_contact set c_phoneno="'.$phoneno.'", c_email = "'.$email.'" , c_web = "'.$web.'", c_location = "'.$location.'",c_mapcode="'.$mapcode.'" WHERE c_id = '.$contactID;

   //echo $query;
  

    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
     
          header("location:index.php");
    
  
     
    }
    else{
       
       // die();
         print (mysqli_error($conn));
    }
    
?>