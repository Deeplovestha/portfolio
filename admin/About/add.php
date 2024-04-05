<div id="addjobcatmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Add</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action='addprocess.php' enctype="multipart/form-data" id="upload_form">

        

          
                         <div class="row">
                           <div class="col-md-6">
                         <div class="form-group">
                        <label for="exampleInputPassword1"> Photo </label>
                          <input type="file" class="form-control" id="abt_photo" placeholder="Photo..." name="abt_photo" required="true" />
                         </div>
                       </div>


                        <div class="col-md-6">
                         <div class="form-group">
                        <label for="exampleInputPassword1"> Title </label>
                          <input type="text" class="form-control" id="abt_title" placeholder="Title..." name="abt_title" required="true" />
                         </div>
                       </div>
                     </div>

                   
                         
                          <div class="form-group">
                         <label for="exampleInputPassword">content </label>
                        <textarea class="form-control ckeditor" name="abt_content" placeholder="Content" id="abt_content"></textarea>
                         </div>
                     
                     

                       

                     

                         
                        
          <input type='submit' class='btn btn-success' value='Save' id='btn_save' onclick="Save"/>
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

