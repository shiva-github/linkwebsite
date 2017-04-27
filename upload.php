<?php

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		require_once('conf.php');
		if(isset($_POST['description'])){
			$name = basename( $_FILES["fileToUpload"]["name"]);
			$link = "";
			$description = $_POST['description'];
			$select = 3;
			insert($name, $link, $description,$select);
		}
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		

	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}
function abc($target){
	
	$file = $target;
	if (!unlink($file))
	{
		echo ("Error deleting $file");
	}
	else
	{
		echo ("Deleted $file");
	}
}
header('refresh:3;url=uploadDoc.php');
?>