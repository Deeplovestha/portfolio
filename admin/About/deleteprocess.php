<?php 
      require_once "../Database/database.php"; 
      $database = new Database();
      $aboutID = $_POST["abt_id"];
      $sql = 'DELETE FROM tbl_about WHERE abt_id = "'.$aboutID.'"';

      $result = $database->executeSQL($sql);
      if($result){
          header("location:index.php");
      }
      else{

      }
   
  
 
?>