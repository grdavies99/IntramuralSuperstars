<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>
    <title>UVU Login</title>
	<link href="Login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="content">
    <h1>UVU Intramural Login</h1>
    	<p>UVU ID: </p>
    	<input type="textbox" placeholder="UVU ID" name="username"> <a href="https://www.uvu.edu/itservices/accounts-access/login-help_find-uvid-password.html" target="_blank">Forgot UVU ID</a>

   	<p>Password: </p>
    	<input type="textbox" placeholder="Password" name="password"> <a href="https://www.uvu.edu/itservices/accounts-access/login-help_find-uvid-password.html" target="_blank">Forgot Password</a><br><br>

	<button>Login</button>
	<div style="color:red;"><?php 
		$error = filter_input(INPUT_GET,'errors');
		if(isset($error)){
			echo $error;
		}
	?>
	</div>
		</div>
</body>
</html>