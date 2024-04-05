<?php
require_once ("../Database/database.php"); 
require_once ("../Database/util.php"); 
$database = new Database();
$util = new Util();
 $conn=$database->config();

 $photoFile = $_FILES['abt_photo'];
 $photo = $photoFile["name"];
 $content = $_POST["abt_content"];
 $title = $_POST["abt_title"];
 
 
 
 

$query="insert into tbl_about(abt_photo,abt_content,abt_title) values ('$photo','$content','$title')";
//echo $query;


    $result = $database->executeSQL($query);
    if($result){//if $result was right then print data recorded and if wrong print not recorded 
     	$util->uploadImage($photoFile);
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
