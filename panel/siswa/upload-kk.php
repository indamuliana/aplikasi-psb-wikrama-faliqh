<?php
include('../../config.php');
$output_dir = "../upload/";
if(isset($_FILES["myfile"]))
{
	$id = $_SESSION['id'];
	$ret = array();
	
//	This is for custom errors;	
/*	$custom_error= array();
	$custom_error['jquery-upload-file-error']="File already exists";
	echo json_encode($custom_error);
	die();
*/
	$error =$_FILES["myfile"]["error"];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["myfile"]["name"])) //single file
	{
		$imageFileType = pathinfo($_FILES["myfile"]["name"], PATHINFO_EXTENSION);

 	 	$fileName = $id.'-kk.'.$imageFileType;
 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
    	$ret[]= $fileName;
	}
	
	
	mysqli_query($koneksi, "UPDATE calon_siswa_upload SET upload_kk='$fileName' WHERE siswa_id='$id'");
	mysqli_query($koneksi, "UPDATE calon_siswa_status SET status_upload_kk='1' WHERE siswa_id='$id'");
	
	
    echo json_encode($ret);
 }
 ?>
