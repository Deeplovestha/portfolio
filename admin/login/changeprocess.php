<?php require_once "../Database/database.php"; 
    $database = new Database();
    //echo "hello world";

    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    if($password == $confirmpassword){
        $encpassword = md5($password);
        //echo $encpassword;
        //die();
    }else{
        echo'<a href="error.php"></a>';
      echo'<script language="javascript">';
      echo'window.location.href = "error.php"';
      echo' </script>';
    }
    $email = $_POST["changepassemail"];
      //echo $email;
      //echo $password;
      //die();
    $sql = "UPDATE tbl_users set user_password = '$encpassword' where user_login='$email'";
        //echo $sql;
        //die();
    $result = $database->executeSQL($sql);
    if($result){
          session_destroy();
      echo'<a href="../login/"></a>';
      echo'<script language="javascript">';
      echo'window.location.href = "../login/"';
      echo' </script>';
        //header("location:../cart.php");
    }
    else{

    }
?>