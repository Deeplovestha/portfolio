<?php $sliderID = $_GET["slider_id"];
  $selectedSlider = $database->getSingleSlider($sliderID);
?>

<div id="editjobcatmodal<?php echo $sliderID;?>" class="modal fade" role="dialog">
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
                  <input type="hidden" name="slider_id" value="<?php echo $sliderID;?>"/>
                          <label for="exampleInputPassword1">Photo </label>
                          <input type="file" class="form-control" id="slider_photo" placeholder="Photo...." name="slider_photo"  value="<?php echo $selectedSlider["slider_photo"];?>" />
                         </div>

                          <div class="form-group">
                  <input type="hidden" name="slider_id" value="<?php echo $selectedSlider["slider_id"];?>"/>
                          <label for="exampleInputPassword1"> Caption </label>
                          <input type="text" class="form-control" id="slider_caption" placeholder="Caption..." name="slider_caption" required="true"  value="<?php echo $selectedSlider["slider_caption"];?>" />
                         </div>


                
                         

                          
                        
          <input type='submit' class='btn btn-success' value='Save' id='btn_save' onclick="Save"/>
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

