<?php
require_once ("../../include/initialize.php");
 	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;
	
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){
 // COMPANYID, OCCUPATIONTITLE, REQ_NO_EMPLOYEES, SALARIES, DURATION_EMPLOYEMENT, QUALIFICATION_WORKEXPERIENCE, JOBDESCRIPTION, PREFEREDSEX, SECTOR_VACANCY
 
		if ( $_POST['COMPANYID'] == "None") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$sql = "SELECT * FROM tblcategory where CATEGORYID = {$_POST['CATEGORY']}";
			$mydb->setQuery($sql);
			$cat = $mydb->loadSingleResult();
			$_POST['CATEGORY']=$cat->CATEGORY;
			$job = New Jobs();
			$job->COMPANYID							= $_POST['COMPANYID']; 
			$job->CATEGORY							= $_POST['CATEGORY']; 
			$job->OCCUPATIONTITLE					= $_POST['OCCUPATIONTITLE'];
			$job->REQ_NO_EMPLOYEES					= $_POST['REQ_NO_EMPLOYEES'];
			$job->SALARIES							= $_POST['SALARIES'];
			$job->DURATION_EMPLOYEMENT				= $_POST['DURATION_EMPLOYEMENT'];
			$job->QUALIFICATION_WORKEXPERIENCE		= $_POST['QUALIFICATION_WORKEXPERIENCE'];
			$job->JOBDESCRIPTION					= $_POST['JOBDESCRIPTION'];
			$job->PREFEREDSEX						= $_POST['PREFEREDSEX'];
			$job->SECTOR_VACANCY					= $_POST['SECTOR_VACANCY'];
			$job->CAPTION					        = $_POST['CAPTION']; 
			$job->JOBPHOTO					        = $_POST['JOBPHOTO']; 
			$job->DATEPOSTED						= date('Y-m-d H:i');
			if (!empty($_FILES["JOBPHOTO"]["name"])) {
				// Upload and get the new image path
				$target_dir = "photos/";
				$target_file = $target_dir . date("dmYhis") . basename($_FILES["JOBPHOTO"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

				// Check if the file is an actual image
				$check = getimagesize($_FILES["JOBPHOTO"]["tmp_name"]);
				if ($check === false) {
					echo "File is not an image.";
					$uploadOk = 0;
				}

				if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
					echo "File Not Supported";
					$uploadOk = 0;
				}

				if ($uploadOk == 0) {
					echo "Error Uploading File";
				} else {
					if (move_uploaded_file($_FILES["JOBPHOTO"]["tmp_name"], $target_file)) {
						// Successfully uploaded image, update the database with the new image path
						$job->JOBPHOTO = $target_file;
					} else {
						echo "Error Uploading File";
						exit;
					}
				}
			} else {
				// No new image uploaded, keep the existing image path
				$job->JOBPHOTO = $_POST['JOBPHOTO'];
			}

			// Update the job vacancy in the database
			$job->create();

			message("Job Vacancy has been updated!", "success");
			redirect("index.php");
		}
	}
}

	function doEdit() {
    global $mydb;
    if (isset($_POST['save'])) {
        if ($_POST['COMPANYID'] == "None") {
            $messageStats = false;
            message("All fields are required!", "error");
            redirect('index.php?view=add');
        } else {
            $sql = "SELECT * FROM tblcategory WHERE CATEGORYID = {$_POST['CATEGORY']}";
            $mydb->setQuery($sql);
            $cat = $mydb->loadSingleResult();
            $_POST['CATEGORY'] = $cat->CATEGORY;
            $job = new Jobs();
            $job->COMPANYID = $_POST['COMPANYID'];
            $job->CATEGORY = $_POST['CATEGORY'];
            $job->OCCUPATIONTITLE = $_POST['OCCUPATIONTITLE'];
            $job->REQ_NO_EMPLOYEES = $_POST['REQ_NO_EMPLOYEES'];
            $job->SALARIES = $_POST['SALARIES'];
            $job->DURATION_EMPLOYEMENT = $_POST['DURATION_EMPLOYEMENT'];
            $job->QUALIFICATION_WORKEXPERIENCE = $_POST['QUALIFICATION_WORKEXPERIENCE'];
            $job->JOBDESCRIPTION = $_POST['JOBDESCRIPTION'];
            $job->PREFEREDSEX = $_POST['PREFEREDSEX'];
            $job->SECTOR_VACANCY = $_POST['SECTOR_VACANCY'];
			
            // Handle image update
            if (!empty($_FILES["JOBPHOTO"]["name"])) {
                // Upload and get the new image path
                $target_dir = "photos/";
                $target_file = $target_dir . date("dmYhis") . basename($_FILES["JOBPHOTO"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                // Check if the file is an actual image
                $check = getimagesize($_FILES["JOBPHOTO"]["tmp_name"]);
                if ($check === false) {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }

                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    echo "File Not Supported";
                    $uploadOk = 0;
                }

                if ($uploadOk == 0) {
                    echo "Error Uploading File";
                } else {
                    if (move_uploaded_file($_FILES["JOBPHOTO"]["tmp_name"], $target_file)) {
                        // Successfully uploaded image, update the database with the new image path
                        $job->JOBPHOTO = $target_file;
                    } else {
                        echo "Error Uploading File";
                        exit;
                    }
                }
            } else {
                // No new image uploaded, keep the existing image path
                $job->JOBPHOTO = $_POST['JOBPHOTO'];
            }

            // Update the job vacancy in the database
            $job->update($_POST['JOBID']);

            message("Job Vacancy has been updated!", "success");
            redirect("index.php");
        }
    }
}

	


	function doDelete(){
		// if (isset($_POST['selector'])==''){
		// message("Select a records first before you delete!","error");
		// redirect('index.php');
		// }else{

			$id = $_GET['id'];

			$job = New Jobs();
			$job->delete($id);

			message("Company has been Deleted!","info");
			redirect('index.php');

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$category = New Category();
		// 	$category->delete($id[$i]);

		// 	message("Category already Deleted!","info");
		// 	redirect('index.php');
		// }
		// }
		
	}
	
	
	function UploadImage(){
		$target_dir = "vacancy/photos/";
		$target_file = $target_dir . date("dmYhis") . basename($_FILES["picture"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		
		if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg"
	|| $imageFileType != "gif" ) {
			 if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
				return  date("dmYhis") . basename($_FILES["picture"]["name"]);
			}else{
				echo "Error Uploading File";
				exit;
			}
		}else{
				echo "File Not Supported";
				exit;
			}
} 

function doupdateimage(){
	$target_dir = "photos/";
		$target_file = $target_dir . date("dmYhis") . basename($_FILES["photo"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		
		if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg"
	|| $imageFileType != "gif" ) {
			 if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
				return  date("dmYhis") . basename($_FILES["photo"]["name"]);
			}else{
				echo "Error Uploading File";
				exit;
			}
		}else{
				echo "File Not Supported";
				exit;
			}
	
// 	$errofile = $_FILES['photo']['error'];
// 	$type = $_FILES['photo']['type'];
// 	$temp = $_FILES['photo']['tmp_name'];
// 	$myfile =$_FILES['photo']['name'];
// 	$location="./photos/".$myfile;


// if ( $errofile > 0) {
// 		message("No image selected. The Image Quality is Too High!", "error");
// 		redirect("index.php?view=edit&id=". $_GET['id']);
// }else{

// 		@$file=$_FILES['photo']['tmp_name'];
// 		@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
// 		@$image_name= addslashes($_FILES['photo']['name']); 
// 		@$image_size= getimagesize($_FILES['photo']['tmp_name']);

// 	if ($image_size==FALSE ) {
// 		message("Uploaded file is not an image!", "error");
// 		redirect("index.php?view=edit&id=". $_GET['id']);
// 	}else{
// 			//uploading the file
// 			move_uploaded_file($temp,"photos/" . $myfile);
	 
			 

// 				$user = New Jobs();
// 				$user->JOBPHOTO 			= $location;
// 				$user->update($_SESSION['JOBID']);
// 				redirect("index.php?view=edit");
				 
					
// 			}
// 	}
	 
}



?>