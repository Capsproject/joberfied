<?php  
     
  
  @$JOBID = $_SESSION['JOBID'];
    if($JOBID==''){
  redirect("index.php");
}
  $job = New Jobs();
  $singlejob = $job->single_job($JOBID);

 
  ?>
  <?php
    if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }


  $JOBID = $_GET['id'];
  $job = New Jobs();
  $res = $job->single_job($JOBID);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = 'vacancy/'; // Specify the folder where you want to upload photos.
    $uploadFile = $uploadDir . basename($_FILES['JOBPHOTO']['name']);

    if (move_uploaded_file($_FILES['JOBPHOTO']['tmp_name'], $uploadFile)) {
        // File was successfully uploaded to the specified directory
        echo 'File was successfully uploaded.';
    } else {
        // File upload failed
        echo 'File upload failed.';
    }
}
?>




<div class="container">
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
         <a  data-target="#myModal" data-toggle="modal" href="" title="Click here to Change Image." >
            <img alt="" style="width:500px; height:350px;>"
             title="" class="img-circle img-thumbnail isTooltip" src="<?php echo web_root.'admin/vacancy/'. $singlejob->JOBPHOTO;?>" data-original-title="Usuario"> 
         </a>  
        </div>
      
    </div>
</div>
</div>
            

     <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                </div>

                <form action="controller.php?action=photos" enctype="multipart/form-data" method="post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                            <input class="mealid" type="hidden" name="mealid" id="mealid" value="">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "photo" name="photo" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button> <button class="btn btn-primary"
                    name="savephoto" type="submit">Upload Photo</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

 