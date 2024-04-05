<?php 
      require_once "../Database/database.php"; 
      $database = new Database();
      $sliderID = $_POST["slider_id"];
      $sql = 'DELETE FROM tbl_slider WHERE slider_id = "'.$sliderID.'"';

      $result = $database->executeSQL($sql);
      if($result){
          header("location:index.php");
      }
      else{

      }
   
  
 
?>