<?php
require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();


$sliderID = $_POST["slider_id"];
$photoFile = $_FILES['slider_photo'];
 $photo = $photoFile["name"];
 $caption = $_POST["slider_caption"];

if($photo== ""){
  $query = 'UPDATE tbl_slider set  slider_caption = "'.$caption.'" WHERE slider_id = '.$sliderID;

} else {
  
  $query = 'UPDATE tbl_slider set slider_photo="'.$photo.'", slider_caption = "'.$caption.'" WHERE slider_id = '.$sliderID;
     $util->uploadImage($photoFile);

}
 
  
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