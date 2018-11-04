 <!DOCTYPE html>
<html>
<head>

	<title>User Home</title>


	<?php include '../includes/header.html';?>

	<link rel="stylesheet" type="text/css" href="/user/css/main.css">

	<div class = "mainContaier">
		<div class = "talkTextButtons">
			<div class = "dashboardInstructions">Call an Angel</div>
			<button class = "talkTextButton talkButton" onclick ="disclaimer()"><i class="phoneIcon fas fa-phone"></i></button>
			<div class = "dashboardInstructions">Message an Angel</div>
			<button class = "talkTextButton textButton" onclick ="disclaimer()"a href="https://sample.sendbird.com/basic/" ><i class="fas fa-comments"></i></button>
    	</div>

    	<div class = "editUser"><i class="fas fa-user-edit"></i></div>

		<button class = "logout" onclick="handleLogout()">logout</button>
	</div>

	

	<script type="text/javascript" src = "/user/js/main.js"></script>

<?php include '../includes/footer.html';?>
