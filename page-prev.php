<!DOCTYPE html>
<html>
<head>
	<title>PROJECT LINKS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
					<?php 
					require_once('conf.php');
					retrive_links();
					?>
				</div>
			</div>
		</div>
	</section>
	<footer class="text-center">
		<a href="uploadDoc.php">Upload Document</a>
	</footer>
	<style>
		.padding10{
			padding: 10px;
		}
		.width100{
			width: 100%;
		}
	</style>
	
</body>
</html>
