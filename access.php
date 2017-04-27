<?php
$username = $_POST['user'];
// echo $_POST['user']."<br />";
// echo $_POST['password'];

session_start();
if(isset($_POST['user'])){
	
	$_SESSION['logged_in'] = $_POST['user'];
	header("location: index.php");
}else{
	echo 1;
}

?>