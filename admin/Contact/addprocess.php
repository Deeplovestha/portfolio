<?php
require_once ("../Database/database.php"); 
require_once ("../Database/util.php"); 
$database = new Database();
$util = new Util();
 $conn=$database->config();

 $phoneno = $_POST["c_phoneno"];
 $email = $_POST["c_email"];
 $web = $_POST["c_web"];
 $location = $_POST["c_location"];
 $mapcode = $_POST["c_mapcode"];

 
 

$query="insert into tbl_contact(c_phoneno,c_email,c_web,c_location,c_mapcode) values ('$phoneno','$email','$web','$location','$mapcode')";
//echo $query;


    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
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
