<?php 
      require_once "../Database/database.php"; 
      $database = new Database();
      $contactID = $_POST["c_id"];
      $sql = 'DELETE FROM tbl_contact WHERE c_id = "'.$contactID.'"';

      $result = $database->executeSQL($sql);
      if($result){
          header("location:index.php");
      }
      else{

      }
   
  
 
?>