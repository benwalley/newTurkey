<!DOCTYPE html>
<html>
<head>

	<title>Chat</title>

	<link rel="stylesheet" type="text/css" href="css/main.css">

	<?php include 'includes/header.html';?>
	

	

	<div>
		<h1>Talk to an Angel</h1>
		<a href="#" oanclick ="disclaimer()">Chat</a>
		<a href="#" onclick ="disclaimer()">Call</a>
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
	
	<div>
		<a href="/user/login">Login</a>
	</div>
	<div>
		<a href="/user/new">Create Account</a>
	</div>

	<script type="text/javascript" src = "js/main.js"></script>

<?php include 'includes/footer.html';?>