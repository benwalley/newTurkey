<!DOCTYPE html>
<html>
<head>

	<title>Login</title>

	<?php include '../../includes/header.html';?>


	<img class = "logoimage resize"  src= "/assets/photos/Logo_White.svg" alt="Borrow My Angel Logo">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/user/login/css/main.css">
	<div class="loginForm">
		<form>
		<div class="formInput">
			<input class = "emailField" type="email" name="email" placeholder="email">
		</div>
		<div class="formInput">
			<input class = "passwordField" type="password" name="password" placeholder = password>
		</div>
		<div class="formInput">
			<button class="button btn btn-primary" type="button" onclick="handleLogin()">Login</button>
		</div>
		<div class="formInput">
			<button class="button btn btn-primary" type="button" onclick="location.href='/user/new'">Create Account</button>
		</div>
		</form>
	</div>

	<script type="text/javascript" src = "/user/login/js/main.js"></script>

<?php include '../../includes/footer.html';?>
