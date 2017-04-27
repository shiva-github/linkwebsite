<?php

session_start();

      unset($_SESSION['logged_in']);  
      session_destroy();  
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style type="text/css">
		.box1{
			border-radius: 5px;
			text-align: center;
			max-width: 500px;
			min-width: 200px;
			width: 100%;
			margin: auto;
		}
		.inputfield{
			margin-top: 20px;
			width: 100%;
		}
		.btn{
			padding: 5px;
			width: 100px;
			border-radius: 5px;
			background-color: #32cd32;
			color: #fff;
			border: none;
		}
		.btn:hover{
			box-shadow: 0px 0px 10px #32cd32;
		}
	</style>
</head>
<body>
	<div class="alignment">
		<fieldset class="box1">
			<legend>LOGIN</legend>
			<form method="POST" action="access.php">
				<div class="inputfield">
					Email:
				</div>
				<div class="inputfield">
					<input type="text" name="user" required="required" autocomplete="off" />
				</div>

				<div class="inputfield">
					password:
				</div>
				<div class="inputfield">
					<input type="password" name="password"  required="required"  autocomplete="off" />
				</div>
				<div class="inputfield">
					<input class="btn" type="submit" value="submit" />
				</div>
			</form>
		</fieldset>
	</div>
</body>
</html>