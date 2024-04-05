
<?php $contactID = $_GET["c_id"];
?>

<div id="deletejobcatmodal<?php echo $contactID;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Delete</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action='deleteprocess.php' enctype="multipart/form-data" id="upload_form">
          <input type="hidden" name="c_id" value="<?php echo $contactID;?>"/>
            <h6> Are you Sure you want to delete this Contact?</h6>
            <br/>
            <br/>
        
          <input type='submit' class='btn btn-danger' value='Delete' id='btn_save' />
        </form>

        <!-- Preview-->
        
      </div>
 
    </div>

  </div>
</div>


