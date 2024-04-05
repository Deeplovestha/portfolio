<?php include("../common/topscript.php");?>
<?php include('../common/content.php');?>
<body class="sb-nav-fixed">
         <?php include("../common/navbar.php");?>
          

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include("../common/sidebar.php");?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Slider</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Slider</li>
                             <li class="breadcrumb-item active">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#addjobcatmodal"><i class="fas fa-user-plus" style="color:#fff;"></i></button>
                            </li>
                        </ol>
                        <?php include('add.php');?>

                       
                        <div class="card mb-4">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Caption
                                                </th>
                                                 
                                                 
                                                  
                                                 
                                                
                                              
                                               
                                                <th>Edit</th>
                                                <th>Delete</th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            <?php 

                                            foreach($slider as $row) {
                                                $deleteBtnId = "deletebtn".$row["slider_id"];
                                                # code...
                                                echo '<tr>
                                                <td><img src="../../uploads/'.$row["slider_photo"].'" style="width:50px;"/></td>
                                                <td>'.$row["slider_caption"].'</td>
                                                
                                                 
                                                
                                                
                                                <td> 

                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editjobcatmodal'.$row["slider_id"].'">Edit</button>';
                                                      $_GET["slider_id"]= $row["slider_id"];
                                                     include("edit.php");
                                                    


                                                echo '</td>
                                                <td>
                                                     <button class="btn btn-danger" data-toggle="modal" data-target="#deletejobcatmodal'.$row["slider_id"].'">Delete</button>';
                                                      $_GET["slider_id"]= $row["slider_id"];
                                                     include("delete.php");
                                               echo '</td>
                                               
                                            </tr>';

                                            }?>

                                            
                                            
                                        </tbody>

                                    </table>


                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include("../common/footer.php");?>
            </div>
        </div>
        <?php 
         //     function edit($customerID){
         //        $_GET["customer_id"]= $customerID;
         // include("../modals/editcustomermodal.php");
         //    }
        ?>
       <?php include("../common/footerscript.php");?>
    </body>
   
</html>
