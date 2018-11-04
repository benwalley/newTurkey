<!DOCTYPE html>
<html>
<head>

	<title>Create User</title>

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
			<input type="password" name="Confirm-password" placeholder = "Confirm password">
		</div>
		<div class="formInput">
		<!--	<button class="button btn btn-primary" type="submit" onclick="functionConfirm(event)""; >Create a User</button> > -->
		</script>
		<style>
			 #confirm {
					display: none;
					background-color: #e5e5ff;
					border: 1px solid #aaa;
					position: fixed;
					width: 250px;
					left: 50%;
					margin-left: -100px;
					padding: 6px 8px 8px;
					box-sizing: border-box;
					text-align: center;
			 }
			 #confirm button {
					background-color: #e5e5ff;
					display: inline-block;
					border-radius: 5px;
					border: 1px solid #aaa;
					padding: 5px;
					text-align: center;
					width: 80px;
					cursor: pointer;
			 }
			 #confirm .message {
					text-align: left;
			 }
		</style>

		<div id="confirm">
			 <div class="message"></div>
					<button class="yes">Yes</button>
					<button class="no">No</button>

			 </div>

			 <div class="button btn btn-primary"  onclick='functionConfirm("Are you over the age of 13?")'>Create account</div>

		</div>
		<div class="formInput">
			<button type="button" class="button btn btn-primary"  onclick=  >Login</button>
		</div>
		</form>
	</div>

	<script type="text/javascript" src = "/user/new/js/main.js"></script>

<?php include '../../includes/footer.html';?>
