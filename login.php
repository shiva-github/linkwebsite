<?php

session_start();

      unset($_SESSION['logged_in']);  
      session_destroy();  
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
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