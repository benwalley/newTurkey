<!DOCTYPE html>
<html>
<head>

	<title>Borrow My Angel</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link href="css/blogForm.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700" rel="stylesheet">

	<?php include 'includes/header.html';?>
	<body>
		<h1>Submit a Story to Borrow My Angel</h1>
		<form action="/action_page.php">
			Title: <input id = "Title" type="text" name="Title" value="Title" style="width:60%;"><br>
			What's your story: <input id = "Story" type="text" name="Story" value="Story" style="width:60%;"><br>
			<input id = "submit"type="submit" value="Submit for Review">
		</form>
		
		
		
	

	</body>


<?php include 'includes/footer.html';?>
