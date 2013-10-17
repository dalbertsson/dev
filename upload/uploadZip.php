<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300' rel='stylesheet' type='text/css'>
	<link href='upload.css' rel='stylesheet'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<title>Upload Zip</title>
</head>
<body>

<?
$arrValid = array("jpg", "png", "gif", "tif", "svg", "eps");

$zip = new ZipArchive;
$res = $zip->open('Archive.zip');

$files = $zip->numFiles;
for($x=0; $x<$files; $x++) {
	$fileName = $zip->getNameIndex($x);
	$ext = substr($fileName, strrpos($fileName, ".")+1);
	
	echo $fileName;
	if(!in_array($ext, $arrValid)) {
		$zip->deleteIndex($x);
		echo '<span style="color: red;"> - Deleted</span>';
	}	

	$pos = strpos($fileName, "__MACOSX");
	if($pos!==false) {
		$zip->deleteIndex($x);
		echo '<span style="color: red;"> - Deleted</span>';
	}

	echo '<br>';
}
$zip->close();
$res = $zip->open('Archive.zip');

if ($res === TRUE) {
	$zip->extractTo('uploads');
	$zip->close();
}
?>

</body>
</html>