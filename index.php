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
          <div class = "mainButton login">
            <a href="/user/login">Login</a>
          </div>
          <div class = "mainButton create">
            <a href="/user/new">Create Account</a>
          </div>

   <div>
     
     
          <h1>Talk to an Angel</h1>
          
        <a href="https://sample.sendbird.com/basic/" onclick ="disclaimer()">Chat</a>
          <a href="#" onclick ="disclaimer()">Call</a>

          <a href="resources.php">Resources</a>
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
		<a class="loginbtn" href="/user/login">Login</a>
	</div>
	<div>
		<a href="/user/new">Create Account</a>

    </div>

	<script type="text/javascript" src = "js/main.js"></script>

<?php include 'includes/footer.html';?>
