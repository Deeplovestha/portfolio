<?php //require_once("../common/topscript.php");
  class Database{
    // public $conn;
    public function __construct(){

        // $this->dbCon=mysql_connect('localhost','root','')or die(mysql_close());
        // $selDb=mysql_select_db('accounting')or die(mysql_error());
        //$selDb=mysql_select_db('company_db')or die(mysql_error());

    }

    public function config(){
    $host = 'localhost';
    $database = 'db_portfolio';
    $user = 'root';
    $password = '';
    $connection  = mysqli_connect($host, $user, $password, $database); 
    return $connection;

    }

 

    // public function config(){
    // $host = 'localhost';
    // $database = 'sajilodo_dbsajilodokan';
    // $user = 'sajilodo_sajilodokan';
    // $password = 'tRDrDy}{]DfA';
    // $connection  = mysqli_connect($host, $user, $password, $database); 
    // return $connection;

    // }

    public function executeSQL($sql){
      $resultArray=array();
      $result=mysqli_query($this->config(),$sql);
      return $result;
    }



    public function getAbout(){
      $about = array();
        
      $sql='SELECT * FROM tbl_about order by abt_id desc';
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($about,$row);
        }
      }
      else{
        return false;
      }
      return $about;
    }

 public function getSingleAbout($aboutID){
      $about = array();  
      $sql='SELECT * FROM tbl_about WHERE abt_id="'.$aboutID.'"';
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($about,$row);
        }
      }
      else{
        return false;
      }
      return $about[0];
    }

public function getContact(){
      $contact = array();
        
      $sql='SELECT * FROM tbl_contact order by c_id desc';
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($contact,$row);
        }
      }
      else{
        return false;
      }
      return $contact;
    }

 public function getSingleContact($contactID){
      $contact = array();  
      $sql='SELECT * FROM tbl_contact WHERE c_id="'.$contactID.'"';
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($contact,$row);
        }
      }
      else{
        return false;
      }
      return $contact[0];
    }


    public function getSlider(){
      $slider = array();
        
      $sql='SELECT * FROM tbl_slider order by slider_id desc';
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($slider,$row);
        }
      }
      else{
        return false;
      }
      return $slider;
    }

 public function getSingleSlider($sliderID){
      $slider = array();  
      $sql='SELECT * FROM tbl_slider WHERE slider_id="'.$sliderID.'"';
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($slider,$row);
        }
      }
      else{
        return false;
      }
      return $slider[0];
    }


    public function getBiodata(){
      $biodata = array();
        
      $sql='SELECT * FROM tbl_biodata order by b_id desc';
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($biodata,$row);
        }
      }
      else{
        return false;
      }
      return $biodata;
    }

 public function getSingleBiodata($biodataID){
      $biodata = array();  
      $sql='SELECT * FROM tbl_biodata WHERE b_id="'.$biodataID.'"';
      $result =$this->executeSQL($sql);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($biodata,$row);
        }
      }
      else{
        return false;
      }
      return $biodata[0];
    }


   
    public function getTokenFromUser($username){
      $tokens = array();
      $sql = 'SELECT session_token FROM tbl_admin_sessions WHERE session_user = "'.$username.'" ORDER BY session_id DESC';
      //echo $sql;   
      $result = $this->executeSQL($sql);
      // print_r($result);
      if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($tokens,$row);
        }
      }
      else{
        return false;
      }
      // echo 'The token is'. $tokens[0]["session_token"];
      return $tokens[0]["session_token"];
    }

    public function clearUserSession($token){
      $sql = "DELETE FROM tbl_admin_sessions WHERE session_token='".$token."'";
      $result = $this ->executeSQL($sql);
      $cleared = false;
      if($result){
        $cleared = true;
      }
      else{
        $cleared=false;
      }
      return $cleared;
    }


    



  }
?>
