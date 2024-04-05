<?php
require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();


$bID = $_POST["b_id"];
 $phoneno = $_POST["b_phoneno"];
 $address = $_POST["b_address"];
 $email = $_POST["b_email"];
 $age = $_POST["b_age"];
 $degree = $_POST["b_degree"];


  $query = 'UPDATE tbl_biodata set  b_phoneno = "'.$phoneno.'", b_address = "'.$address.'", b_email = "'.$email.'", b_age = "'.$age.'", b_degree = "'.$degree.'" WHERE b_id = '.$bID;




 
  
   //$query = 'UPDATE tbl_slider set slider_photo="'.$photo.'", slider_caption = "'.$caption.'" WHERE slider_id = '.$sliderID;

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