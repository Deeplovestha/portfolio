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
                        <label for="exampleInputPassword1"> Phone no </label>
                          <input type="text" class="form-control" id="c_phoneno" placeholder="Phone no..." name="c_phoneno" required="true" />
                         </div>
                       </div>

                   
                         <div class="col-md-6">
                          <div class="form-group">
                         <label for="exampleInputPassword">Email </label>
                         <input type="text" class="form-control" id="c_email" placeholder="Email..." name="c_email" required="true" />
                         </div>
                       </div>
                     </div>

                         <div class="row">

                           <div class="col-md-6">
                         <div class="form-group">
                         <label for="exampleInputPassword">Web </label>
                         <input type="text" class="form-control" id="c_web" placeholder="Web..." name="c_web" required="true" />
                         </div> 
                         </div>

                          <div class="col-md-6">
                          <div class="form-group">
                         <label for="exampleInputPassword">Location </label>
                         <input type="text" class="form-control" id="c_location" placeholder="Location..." name="c_location" required="true" />                        
                         </div> 
                       </div>
                     </div>

                     <div class="col-md-6">
                         <div class="form-group">
                         <label for="exampleInputPassword">Map code </label>
                        <textarea class="form-control" name="c_mapcode" id="c_mapcode" required="true"></textarea>  
                        </div> 
                         </div>



                         
                        
          <input type='submit' class='btn btn-success' value='Save' id='btn_save' onclick="Save"/>
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

