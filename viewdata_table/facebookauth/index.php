<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login with Facebook</title>
</head>
<body>
	<script type="text/javascript" src="./fbapp/fb.js"></script>
	<div id="content" style="width: 70%; float: left;">
	<h2>Welcome <?php 
				if (isset($_SESSION['name'])) {
				echo $_SESSION['name']; }  
				?>
		
	</h2>
	</div>
	
	<div id="sidebar" style="width: 20%; float: right;">
		<?php 
		if (isset($_SESSION['name'])) {

		}else { 
		?> 
		<div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();">
		</div>
		<?php
		} 
		?>		
	</div>
</body>
</html>