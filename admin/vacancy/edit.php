<?php
if (!isset($_SESSION['ADMIN_USERID'])) {
  redirect(web_root . "admin/index.php");
}


$JOBID = $_GET['id'];
$job = new Jobs();
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

<form class="form-horizontal span6" action="controller.php?action=edit" method="POST" enctype="multipart/form-data">

  <div class="row">


  </div>
  <div class="col-sm-12">
    <div class="row">
      <div class="panel panel-default">
     
        <div class="panel-body">
          <label class="col-md-2" for="picture" style="padding: 0;margin: 0;">Upload Photo:</label>

          <div class="col-md-10" style="padding: 0;margin: 0;">
            <input id="JOBPHOTO" name="JOBPHOTO" required autocomplete="none" type="file" />
            <!-- <input name="MAX_FILE_SIZE" type="file" value="2500000">  -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="COMPANYNAME">Company Name:</label>

      <div class="col-md-8">
        <input type="hidden" name="JOBID" value="<?php echo $res->JOBID; ?>">
        <select class="form-control input-sm" id="COMPANYID" name="COMPANYID">
          <option value="None">Select</option>
          <?php
          $sql = "Select * From tblcompany WHERE COMPANYID=" . $res->COMPANYID;
          $mydb->setQuery($sql);
          $result = $mydb->loadResultList();
          foreach ($result as $row) {
            # code...
            echo '<option SELECTED value=' . $row->COMPANYID . '>' . $row->COMPANYNAME . '</option>';
          }
          $sql = "Select * From tblcompany WHERE COMPANYID!=" . $res->COMPANYID;
          $mydb->setQuery($sql);
          $result = $mydb->loadResultList();
          foreach ($result as $row) {
            # code...
            echo '<option value=' . $row->COMPANYID . '>' . $row->COMPANYNAME . '</option>';
          }

          ?>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="CATEGORY">Category:</label>

      <div class="col-md-8">
        <select class="form-control input-sm" id="CATEGORY" name="CATEGORY">
          <option value="None">Select</option>
          <?php
          $sql = "SELECT * FROM `tblcategory` WHERE CATEGORY='" . $res->CATEGORY . "'";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();
          foreach ($cur as $result) {
            # code...
            echo '<option SELECTED value=' . $result->CATEGORYID . '>' . $result->CATEGORY . '</option>';
          }
          $sql = "SELECT * FROM `tblcategory` WHERE CATEGORY!='" . $res->CATEGORY . "'";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();
          foreach ($cur as $result) {
            # code...
            echo '<option value=' . $result->CATEGORYID . '>' . $result->CATEGORY . '</option>';
          }

          ?>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="OCCUPATIONTITLE">Occupation Title:</label>
      <div class="col-md-8">
        <input class="form-control input-sm" id="OCCUPATIONTITLE" name="OCCUPATIONTITLE" placeholder="Occupation Title"
          autocomplete="none" value="<?php echo $res->OCCUPATIONTITLE; ?>" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="REQ_NO_EMPLOYEES">Required no. of Employees:</label>
      <div class="col-md-8">
        <input class="form-control input-sm" id="REQ_NO_EMPLOYEES" name="REQ_NO_EMPLOYEES"
          placeholder="Required no. of Employees" autocomplete="none" value="<?php echo $res->REQ_NO_EMPLOYEES ?>" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="QUALIFICATION_WORKEXPERIENCE">Qualification/Work Experience:</label>
      <div class="col-md-8">
        <textarea class="form-control input-sm" id="QUALIFICATION_WORKEXPERIENCE" name="QUALIFICATION_WORKEXPERIENCE"
          placeholder="Qualification/Work Experience"
          autocomplete="none"><?php echo $res->QUALIFICATION_WORKEXPERIENCE ?></textarea>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="JOBDESCRIPTION">Job Description:</label>
      <div class="col-md-8">
        <textarea class="form-control input-sm" id="JOBDESCRIPTION" name="JOBDESCRIPTION" placeholder="Job Description"
          autocomplete="none"><?php echo $res->JOBDESCRIPTION ?></textarea>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="PREFEREDSEX">Prefered Sex:</label>
      <div class="col-md-8">
        <select class="form-control input-sm" id="PREFEREDSEX" name="PREFEREDSEX">
          <option value="None">Select</option>
          <option <?php echo ($res->PREFEREDSEX == 'Male') ? "SELECTED" : "" ?>>Male</option>
          <option <?php echo ($res->PREFEREDSEX == 'Female') ? "SELECTED" : "" ?>>Female</option>
          <option <?php echo ($res->PREFEREDSEX == 'Male/Female') ? "SELECTED" : "" ?>>Male/Female</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="SECTOR_VACANCY">Sector of Vacancy:</label>
      <div class="col-md-8">
        <textarea class="form-control input-sm" id="SECTOR_VACANCY" name="SECTOR_VACANCY"
          placeholder="Sector of Vacancy" autocomplete="none"><?php echo $res->SECTOR_VACANCY ?></textarea>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="CAPTION">Caption:</label>
      <div class="col-md-8">
        <textarea class="form-control input-sm" id="CAPTION" name="CAPTION"
          placeholder="Caption" autocomplete="none"><?php echo $res->CAPTION ?></textarea>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8">
      <label class="col-md-4 control-label" for="idno"></label>

      <div class="col-md-8">
        <button class="btn btn-primary btn-sm" name="save" type="submit"><span class="fa fa-save fw-fa"></span>
          Save</button>
        <!-- <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Back</strong></a> -->

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">×</button>

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
                      <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> <input id="photo" name="photo"
                        type="file">
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