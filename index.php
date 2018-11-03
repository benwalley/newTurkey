<!DOCTYPE html>
<html>
<head>

	<title>Home</title>
	<?php include 'includes/header.html';?>

    <link rel="stylesheet" type="text/css" href="css/main.css">
	
	<div class = "mainWrapper">
		<div class = "talkTextButtons">
			<button class = "talkTextButton talkButton"><img class = "phoneIcon" src="/assets/icons/white_phone.svg"></button>
			<button class = "talkTextButton textButton"><img class = "textIcon" src="/assets/icons/MultichatBubbles.svg"></button>
    </div>
          <div class = "mainButton login">
            <a href="/user/login">Login</a>
          </div>
          <div class = "mainButton create">
            <a href="/user/new">Create Account</a>
          </div>

   <div>
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
