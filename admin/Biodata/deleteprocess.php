<?php 
      require_once "../Database/database.php"; 
      $database = new Database();
      $biodataID = $_POST["b_id"];
      $sql = 'DELETE FROM tbl_biodata WHERE b_id = "'.$biodataID.'"';

      $result = $database->executeSQL($sql);
      if($result){
          header("location:index.php");
      }
      else{

      }
   
  
 
?>