<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
<?php session_start(); ?>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 20px;
			background-color: #f1f1f1;
		}

		.resume {
			width: 600px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.profile {
			display: flex;
			align-items: center;
			margin-bottom: 20px;
		}

		.profile-image {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			object-fit: cover;
			margin-right: 20px;
		}

		.profile-details {
			flex-grow: 1;
		}

		.name {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 5px;
		}

		.contact-info div {
			margin-bottom: 5px;
		}

		.section {
			margin-bottom: 20px;
		}

		.section-title {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
			text-decoration: underline;
		}

		.section-content {
			line-height: 1.6;
		}
	</style>
</head>
<body>
	<div class="resume">
		<div class="profile">
			<img class="profile-image" src="<?=$_SESSION['picturePath']?>" alt="Profile Picture">
			<div class="profile-details">
				<div class="name"><?=$_SESSION['name']?></div>
				<div class="contact-info">
					<div>Email: <?=$_SESSION['email']?></div>
					<div>Phone: <?=$_SESSION['phone']?></div>
					<div>Address: <?=$_SESSION['address']?></div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="section-title">Summary</div>
			<div class="section-content">
				<?=$_SESSION['summary']?>
			</div>
		</div>

		<div class="section">
			<div class="section-title">Experience</div>
			<div class="section-content">
				<?=$_SESSION['experience']?>
			</div>
		</div>

		<div class="section">
			<div class="section-title">Education</div>
			<div class="section-content">
				<?=$_SESSION['education']?>
			</div>
		</div>
	</div>
</body>
</html>
