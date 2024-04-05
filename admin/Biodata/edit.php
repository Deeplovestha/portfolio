<?php $biodataID = $_GET["b_id"];
  $selectedBiodata = $database->getSingleBiodata($biodataID);
?>

<div id="editjobcatmodal<?php echo $biodataID;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Edit</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
          <form method='post' action='editprocess.php' enctype="multipart/form-data" id="upload_form">

        

          

                <div class="form-group">
                  <input type="hidden" name="b_id" value="<?php echo $biodataID;?>"/>
                          <label for="exampleInputPassword1">Phone no </label>
                          <input type="text" class="form-control" id="b_phoneno" placeholder="Phone no...." name="b_phoneno"  value="<?php echo $selectedBiodata["b_phoneno"];?>" />
                         </div>

                          <div class="form-group">
                  <input type="hidden" name="b_id" value="<?php echo $biodataID;?>"/>
                          <label for="exampleInputPassword1">Address </label>
                          <input type="text" class="form-control" id="b_address" placeholder="Address...." name="b_address"  value="<?php echo $selectedBiodata["b_address"];?>" />
                         </div>

                          <div class="form-group">
                  <input type="hidden" name="b_id" value="<?php echo $selectedBiodata["b_id"];?>"/>
                          <label for="exampleInputPassword1"> Email </label>
                          <input class="form-control ckeditor" name="b_email" placeholder="Email.." id="b_email" value="<?php echo $selectedBiodata["b_email"];?>" /> 
                         </div>

                         <div class="form-group">
                  <input type="hidden" name="b_id" value="<?php echo $biodataID;?>"/>
                          <label for="exampleInputPassword1">Age </label>
                          <input type="text" class="form-control" id="b_age" placeholder="Age...." name="b_age"  value="<?php echo $selectedBiodata["b_age"];?>" />
                         </div>

                         <div class="form-group">
                  <input type="hidden" name="b_id" value="<?php echo $biodataID;?>"/>
                          <label for="exampleInputPassword1">Degree </label>
                          <input type="text" class="form-control" id="b_degree" placeholder="Degree...." name="b_degree"  value="<?php echo $selectedBiodata["b_degree"];?>" />
                         </div>


                
                         

                          
                        
          <input type='submit' class='btn btn-success' value='Save' id='btn_save' onclick="Save"/>
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

