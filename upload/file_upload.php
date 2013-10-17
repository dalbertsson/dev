<?php

$upload_dir = 'uploads/';

if (array_key_exists('pic',$_FILES) && $_FILES['pic']['error'] == 0 ) {

	$pic = $_FILES['pic'];

	if(move_uploaded_file($pic['tmp_name'], $upload_dir.$pic['name'])){
		//exit_status('File was uploaded successfuly!');
	} else {
		exit_status('Something went wrong with your upload!');
	}

	$zip = new ZipArchive;
	$res = $zip->open($upload_dir.$pic['name']);

	//exit_status($upload_dir.$pic['name']);

	if ($res === TRUE) {
		$zip->extractTo($upload_dir);
		$zip->close();

		unlink($upload_dir.$pic['name']);

		exit_status('extracted');
	}

}

function exit_status($str){
	echo json_encode(array('status'=>$str));
	exit;
}
?>