<?php
require_once ("../Database/database.php"); 
require_once ("../Database/util.php"); 
$database = new Database();
$util = new Util();
 $conn=$database->config();

 $photoFile = $_FILES['slider_photo'];
 $photo = $photoFile["name"];
 $caption = $_POST["slider_caption"];
 
 
 
 

$query="insert into tbl_slider(slider_photo,slider_caption) values ('$photo','$caption')";
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
