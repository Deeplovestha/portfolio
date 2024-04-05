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
                        <h1 class="mt-4">Contact</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
                                                <th>Phone no</th>
                                                <th>Email
                                                </th>
                                                  <th>Web
                                                  </th>
                                                  <th>
                                                    Location
                                                  </th>
                                                  <th>Map code</th>
                                                  
                                                 
                                                
                                              
                                               
                                                <th>Edit</th>
                                                <th>Delete</th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            <?php 

                                            foreach($contact as $row) {
                                                $deleteBtnId = "deletebtn".$row["c_id"];
                                                # code...
                                                echo '<tr>
                                                <td>'.$row["c_phoneno"].'</td>
                                                <td>'.$row["c_email"].'</td>
                                                 <td>'.$row["c_web"].'</td>
                                                 <td>'.$row["c_location"].'</td>
                                                 <td>'.$row["c_mapcode"].'</td>
                                                
                                                 
                                                
                                                
                                                <td> 

                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editjobcatmodal'.$row["c_id"].'">Edit</button>';
                                                      $_GET["c_id"]= $row["c_id"];
                                                     include("edit.php");
                                                    


                                                echo '</td>
                                                <td>
                                                     <button class="btn btn-danger" data-toggle="modal" data-target="#deletejobcatmodal'.$row["c_id"].'">Delete</button>';
                                                      $_GET["c_id"]= $row["c_id"];
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
