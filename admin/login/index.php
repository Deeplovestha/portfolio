<html lang="en">
    <head>
        <?php include("../common/content.php");?>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Accounting</title>
        <link href="../dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary" style="background-image: url('login-bg.jpg'); background-repeat: no-repeat;
  background-size: cover;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: white;">
                                    <div class="card-header text-center">
                                        <!-- <img src="../logo.png" class="img img-thumbnail center" style=" height: 120px;" /> <hr> -->
                                        <strong><?= $companyName;?></strong>
                                        <h6 class="text-center font-weight-light my-4">Accounting System Login</h6></div>
                                    <div class="card-body">
                                      
                                            <div class="form-group"><label class="small mb-1" for="usertf">Email</label>
                                                <input class="form-control py-4" id="usertf" type="email" name="username" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="passwordtf">Password</label>
                                                <input class="form-control py-4" id="passwordtf" type="password" name="password" placeholder="Enter password" /></div>
                                           
                                           
                                      
                                    </div>
                                   
                               
                                <div class="card-footer text-right">

                                                <button name="Login" class="btn btn-primary" onclick="performLogin();">Login </button>

                                </div>
                                 

                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../dist/js/scripts.js"></script>

    </body>
    <script>
         function performLogin(){
                var username = document.getElementById("usertf").value;
                var password = document.getElementById("passwordtf").value;
              
                 var url = "loginaction.php";
                var data = "username="+username +"&password="+password;
       





        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           
            var responsejson = JSON.parse(this.responseText);
            if(responsejson.status==0){
                alert("Invalid Credentials");
            }
            else{
                alert(responsejson.status);
                location.replace("../Dashboard/"); 
            }
        }
        else{
          
        }
    };
     
        xhttp.open("POST",url,true);
               xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp.send(data);
              
              // location.replace("../PurchaseOrders/");
             }
    </script>
</html>
