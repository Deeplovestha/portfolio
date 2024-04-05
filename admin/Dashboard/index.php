<?php require_once("../common/topscript.php");
require_once("../common/content.php");
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
                        <h1 class="mt-4" >Portfolio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        
                        
                    </div>
                </main>
                <?php include("../common/footer.php");?>
            </div>
        </div>
       <?php include("../common/footerscript.php");?>
    </body>
</html>
