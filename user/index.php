 <!DOCTYPE html>
<html>
<head>

	<title>User Home</title>


	<?php include '../includes/header.html';?>

	<link rel="stylesheet" type="text/css" href="/user/css/main.css">

	<div class = "mainContaier">
		<h1 class = "pageTitle">Your home page</h1>
		<div class = "talkTextButtons">
			<button class = "talkTextButton talkButton" onclick ="disclaimer()"><img class = "phoneIcon" src="/assets/icons/white_phone.svg"></button>
			<button class = "talkTextButton textButton" onclick ="disclaimer()"a href="https://sample.sendbird.com/basic/" ><img class = "textIcon" src="/assets/icons/MultichatBubbles.svg"></button>
    	</div>
		
	</div>

	<button class = "logout" onclick="handleLogout()">logout</button>

	<script type="text/javascript" src = "/user/js/main.js"></script>

<?php include '../includes/footer.html';?>
