<?php 

session_start();

if(!isset($_SESSION['logged_in'])){
	header("Location: login.php");  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROJECT LINKS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/tether.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<header class="padding10">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<div class="float-left"> <a href="page-prev.php">PREVIEW LINKS</a></div>
				</div>
				<div class="col-4">
					<div class="text-center"><a href="index.php">HOME</a></div>
				</div>
				<div class="col-4">
					<div class="float-right"><a href="page-next.php">DOWNLOAD LINKS</a></div>
				</div>
			</div>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<form method="POST" action="index.php">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							Name
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							<input type="text" name="name">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							Link
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							<input type="text" name="link">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							Type
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							<select name='selection'>
								<option selected="selected">link</option>
								<option>document</option>
							</select>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							Description
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							<textarea name="description"></textarea>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center padding10">
							<button>Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="text-center">
		<a href="uploadDoc.php">Upload Document</a>
		<strong><a href="login.php">LOGOUT>>></a></strong>
	</footer>
	<style>
		
	</style>
	<?php 
	require_once('conf.php');
	if(isset($_POST['name']) && isset($_POST['name']) && isset($_POST['name'])){
		$name = $_POST['name'];
		$link = $_POST['link'];
		$description = $_POST['description'];
		$select = $_POST['selection']=='link' ?1:2;
		insert($name, $link, $description,$select);
	}
	?>
</body>
</html>
