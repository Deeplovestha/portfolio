<?php $aboutID = $_GET["abt_id"];
  $selectedAbout = $database->getSingleAbout($aboutID);
?>

<div id="editjobcatmodal<?php echo $aboutID;?>" class="modal fade" role="dialog">
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
                  <input type="hidden" name="abt_id" value="<?php echo $aboutID;?>"/>
                          <label for="exampleInputPassword1">Photo </label>
                          <input type="file" class="form-control" id="abt_photo" placeholder="Photo...." name="abt_photo"  value="<?php echo $selectedAbout["abt_photo"];?>" />
                         </div>

                          <div class="form-group">
                  <input type="hidden" name="abt_id" value="<?php echo $aboutID;?>"/>
                          <label for="exampleInputPassword1">Title </label>
                          <input type="text" class="form-control" id="abt_title" placeholder="Title...." name="abt_title"  value="<?php echo $selectedAbout["abt_title"];?>" />
                         </div>

                          <div class="form-group">
                  <input type="hidden" name="abt_id" value="<?php echo $selectedAbout["abt_id"];?>"/>
                          <label for="exampleInputPassword1"> Content </label>
                          <textarea class="form-control ckeditor" name="abt_content" placeholder="Content.." id="abt_content" ><?php echo $selectedAbout["abt_content"];?></textarea>
                         </div>


                
                         

                          
                        
          <input type='submit' class='btn btn-success' value='Save' id='btn_save' onclick="Save"/>
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

