<?php
require_once "../Database/database.php"; 
require_once "../Database/util.php"; 
$database = new Database();
$util = new Util();
$conn=$database->config();


$aboutID = $_POST["abt_id"];
$photoFile = $_FILES['abt_photo'];
 $photo = $photoFile["name"];
 $content = $_POST["abt_content"];
 $title = $_POST["abt_title"];

if($photo== ""){
  $query = 'UPDATE tbl_about set  abt_content = "'.$content.'", abt_title = "'.$title.'" WHERE abt_id = '.$aboutID;

} else {
  
  $query = 'UPDATE tbl_about set abt_photo="'.$photo.'", abt_content = "'.$content.'", abt_title = "'.$title.'" WHERE abt_id = '.$aboutID;
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