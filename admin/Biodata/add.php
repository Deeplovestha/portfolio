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
                          <input type="text" class="form-control" id="b_phoneno" placeholder="Phone no..." name="b_phoneno" required="true" />
                         </div>
                       </div>


                        <div class="col-md-6">
                         <div class="form-group">
                        <label for="exampleInputPassword1"> Address </label>
                          <input type="text" class="form-control" id="b_address" placeholder="Address..." name="b_address" required="true" />
                         </div>
                       </div>
                     </div>

                          
                          <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                         <label for="exampleInputPassword">Email </label>
                        <input type="text" class="form-control " name="b_email" placeholder="Email" id="b_email" required="true">
                         </div>
                       </div>

                       <div class="col-md-6">
                         <div class="form-group">
                        <label for="exampleInputPassword1"> Age </label>
                          <input type="text" class="form-control" id="b_age" placeholder="Age..." name="b_age" required="true" />
                         </div>
                       </div>
                     </div>

                     <div class="col-md-6">
                         <div class="form-group">
                        <label for="exampleInputPassword1"> Degree </label>
                          <input type="text" class="form-control" id="b_degree" placeholder="Degree..." name="b_degree" required="true" />
                         </div>
                       </div>
                     
                     

                       

                     

                         
                        
          <input type='submit' class='btn btn-success' value='Save' id='btn_save' onclick="Save"/>
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>

