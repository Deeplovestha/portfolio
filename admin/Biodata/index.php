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
                        <h1 class="mt-4">Biodata</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Biodata</li>
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
                                                <th>Address
                                                </th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Degree</th>
                                                 
                                                 
                                                  
                                                 
                                                
                                              
                                               
                                                <th>Edit</th>
                                                <th>Delete</th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            <?php 

                                            foreach($biodata as $row) {
                                                $deleteBtnId = "deletebtn".$row["b_id"];
                                                # code...
                                                echo '<tr>
                                                
                                                <td>'.$row["b_phoneno"].'</td>
                                                <td>'.$row["b_address"].'</td>
                                                <td>'.$row["b_email"].'</td>
                                                <td>'.$row["b_age"].'</td>
                                                <td>'.$row["b_degree"].'</td>
                                                
                                                
                                                 
                                                
                                                
                                                <td> 

                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editjobcatmodal'.$row["b_id"].'">Edit</button>';
                                                      $_GET["b_id"]= $row["b_id"];
                                                     include("edit.php");
                                                    


                                                echo '</td>
                                                <td>
                                                     <button class="btn btn-danger" data-toggle="modal" data-target="#deletejobcatmodal'.$row["b_id"].'">Delete</button>';
                                                      $_GET["b_id"]= $row["b_id"];
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
