<!DOCTYPE html>
<html>
<head>

	<title>Login</title>

	<?php include '../../includes/header.html';?>


	<!-- <img class = "logoimage" src= "/assets/photos/logo.svg" alt="Borrow My Angel Logo"> -->

	<link rel="stylesheet" type="text/css" href="/user/login/css/main.css">
	<div class="loginForm">
		<form>
		<div class="formInput">
			<input type="email" name="email" placeholder="email">
		</div>
		<div class="formInput">
			<input type="password" name="password" placeholder = password>
		</div>
		<div class="formInput">
			<button class="button btn btn-primary" type="submit" onclick="location.href='#'">Login</button>
		</div>
		<div class="formInput">
			<button class="button btn btn-primary" type="submit" onclick="location.href='#'">Create Account</button>
		</div>
		</form>
	</div>

	<script type="text/javascript" src = "/user/login/js/main.js"></script>

<?php include '../../includes/footer.html';?>
