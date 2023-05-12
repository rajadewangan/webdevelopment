<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
	<h1>Contact Us</h1>
	
	<h2>Address</h2>
	<p><?php echo($_SESSION["Address"]); ?></p>

	<h2>Phone</h2>
	<p><?php echo($_SESSION["phone"]); ?></p>

	<h2>Email</h2>
	<p><?php echo($_SESSION["email"]); ?></p>
</body>
</html>
