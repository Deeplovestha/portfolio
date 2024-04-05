<?php
require_once ("../Database/database.php"); 
require_once ("../Database/util.php"); 
$database = new Database();
$util = new Util();
 $conn=$database->config();

 
 $phoneno = $_POST["b_phoneno"];
 $address = $_POST["b_address"];
 $email = $_POST["b_email"];
 $age = $_POST["b_age"];
 $degree = $_POST["b_degree"];
 
 
 
 

$query="insert into tbl_biodata(b_phoneno,b_address,b_email,b_age,b_degree) values ('$phoneno','$address','$email','$age','$degree')";
//echo $query;


    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
     	//$util->uploadImage($photoFile);
      header("location:index.php");
       // echo'<a href="../AboutSchool/"></a>';
      echo'<script language="javascript">';
       echo'window.location.href = "index.php"';
      echo' </script>';
    }
    else{
       
       // die();
         print (mysqli_error($conn));
    }
    
?>
