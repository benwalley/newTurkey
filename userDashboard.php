<!DOCTYPE html>
<html>
<head>

	<title>Home</title>
	<?php include 'includes/header.html';?>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700" rel="stylesheet">
	<div class = "mainWrapper">
		<div class = "talkTextButtons">
			<button class = "talkTextButton talkButton" onclick ="disclaimer()"><i class="fas fa-phone"></i></button>
			<button class = "talkTextButton textButton" onclick ="disclaimer()"a href="https://sample.sendbird.com/basic/" ><i class="fas fa-comments"></i></button>
    </div>
	
	<script>
		function disclaimer(){
			alert("DISCLAIMER /n Lorem ipsum dolor sit amet, " +
			"consectetur adipiscing elit. Vivamus bibendum ornare nisi" +
			"eu dapibus. Aenean sed sem nulla. Donec rutrum sem nec risus viverra," +
			"vel sagittis mi vestibulum. Sed vehicula bibendum tellus. Nulla a sapien vitae" +
			"augue euismod sodales.");
		}
	</script>
	<script type="text/javascript" src = "js/main.js"></script>


<?php include 'includes/footer.html';?>
