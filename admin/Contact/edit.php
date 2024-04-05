<?php $contactID = $_GET["c_id"];
  $selectedContact = $database->getSingleContact($contactID);
?>

<div id="editjobcatmodal<?php echo $contactID;?>" class="modal fade" role="dialog">
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
                  <input type="hidden" name="c_id" value="<?php echo $contactID;?>"/>
                          <label for="exampleInputPassword1">Phone no </label>
                          <input type="number" class="form-control" id="c_phoneno" placeholder="Phone no...." name="c_phoneno" required="true"  value="<?php echo $selectedContact["c_phoneno"];?>" />
                         </div>

                          <div class="form-group">
                  <input type="hidden" name="c_id" value="<?php echo $selectedContact["c_id"];?>"/>
                          <label for="exampleInputPassword1"> Email </label>
                          <input type="text" class="form-control" id="c_email" placeholder="Email..." name="c_email" required="true"  value="<?php echo $selectedContact["c_email"];?>" />
                         </div>


                <div class="form-group">
                  <input type="hidden" name="c_id" value="<?php echo $selectedContact["c_id"];?>"/>
                          <label for="exampleInputPassword1"> Web </label>
                          <input type="text" class="form-control" id="c_web" placeholder="Web..." name="c_web" required="true"  value="<?php echo $selectedContact["c_web"];?>" />
                         </div>

               
                          <div class="form-group">
                  <input type="hidden" name="c_id" value="<?php echo $selectedContact["c_id"];?>"/>
                          <label for="exampleInputPassword1"> Location </label>
                          <textarea name="c_location" class="form-control" lines="10"><?= $selectedContact["c_location"];?></textarea>
                         </div>

                         <div class="form-group">
                  <input type="hidden" name="c_id" value="<?php echo $selectedContact["c_id"];?>"/>
                          <label for="exampleInputPassword1"> Map code </label>
                          <textarea name="c_mapcode" class="form-control" lines="10"><?= $selectedContact["c_mapcode"];?></textarea>
                         </div>
                         

                          
                        
          <input type='submit' class='btn btn-success' value='Save' id='btn_save' onclick="Save"/>
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

