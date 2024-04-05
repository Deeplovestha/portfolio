<?php include("../common/topscript.php");
include("../common/content.php");
?>

<html lang="en">
    <head>
      
    </head>
    <body class="sb-nav-fixed">
         <?php include("../common/navbar.php");?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include("../common/sidebar.php");?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Change Your Password</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                        <div class="jumbotron">
                            
                        <form action="changeprocess.php" method="POST">
                            <center>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail1">New Password</label>
                                <div class="controls">
                                <input class="form-control col-md-4"  type="password" id="inputEmail1" placeholder="New Password" name="password" required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail1">Confirm Password</label>
                                <div class="controls">
                                <input class="form-control col-md-4"  type="password" id="inputEmail1" placeholder="Confirm Password" name="confirmpassword" required="true">
                                </div>
                            </div>
                            <input type="hidden" name="changepassemail" value="<?php echo $_SESSION['username'];?>"/>
                            <br>
                            <div class="control-group">
                                <div class="controls">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                
                            </div>
                            </center>
                        </form>
                            
                            
                        </div>
                        
                        
                    </div>
                </main>
                <?php include("../common/footer.php");?>
            </div>
        </div>
       <?php include("../common/footerscript.php");?>
    </body>
</html>
