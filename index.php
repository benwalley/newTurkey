<!DOCTYPE html>
<html>
<head>

	<title>Home</title>


	<?php include 'includes/header.html';?>

		<link rel="stylesheet" type="text/css" href="css/main.css">

	

	
	<div class = "mainWrapper">
		<div class = "talkTextButtons">
			<button class = "talkTextButton talkButton"><i class="fas fa-phone"></i></button>
			<button class = "talkTextButton textButton"><i class="fas fa-comments"></i></button>
		</div>
		<div class = "mainButtons">
			<div class = "mainButton login">
				<a href="/user/login">Login</a>
			</div>
			<div class = "mainButton create">
				<a href="/user/new">Create Account</a>
			</div>
		</div>
	</div>
		
	

	<script type="text/javascript" src = "js/main.js"></script>

<?php include 'includes/footer.html';?>
