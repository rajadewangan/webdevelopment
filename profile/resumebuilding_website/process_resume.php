<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php 
session_start();
$_SESSION['name'] = $_REQUEST['name'];
$_SESSION['email'] = $_REQUEST['email'];
$_SESSION['phone'] = $_REQUEST['phone'];
$_SESSION['address'] = $_REQUEST['address'];
$_SESSION['summary'] = $_REQUEST['summary'];
$_SESSION['experience'] = $_REQUEST['experience'];
$_SESSION['education'] = $_REQUEST['education'];
$_SESSION['profile_pic'] = $_FILES['profile_pic'];
 if ($_FILES["profile_pic"]["error"] == UPLOAD_ERR_OK) {
    $tempName = $_FILES["profile_pic"]["tmp_name"];
    $fileName = $_FILES["profile_pic"]["name"];
    
    // Specify the directory to save the uploaded file
    $uploadDir = "./";
    
    // Move the uploaded file to the desired location
    if (move_uploaded_file($tempName, $uploadDir . $fileName)) {
      // Display a success message
      echo "File uploaded successfully!";
      
      // Store the file path in a session variable
      
      $_SESSION["picturePath"] = $uploadDir . $fileName;
      
      // Redirect to the next page to display the image
      header("Location: resume.php");
      exit;
    } else {
      echo "Error uploading file.";
    }
  } else {
    echo "Error: No file uploaded.";
  }

?>
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
		}

		.section-content {
			line-height: 1.6;
		}
	</style>
</head>
<body>
	<div class="resume">
		<div class="profile">
			<img class="profile-image" src="<?=$_SESSION['picturepath']?>" alt="Profile Picture">
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
			<!-- <div class="section-title">Experience</div>
			     <div class="section-content">
				<div class="job">
					<div class="job-title">Job Title</div>
					<div class="job-company">Company Name</div>
					<div class="job-dates">Dates Employed</div>
					<ul class="job-responsibilities">
						<li>Responsibility 1</li>
						<li>Responsibility 2</li>
						<li>Responsibility 3</li>
					</ul>
				</div> 
				 Add more job entries if needed
			</div> -->
		</div>

		<div class="section">
			<div class="section-title">Education</div>
			<div class="section-content">
				<div class="education">
				<div class="education-entry">
					<div class="education-degree"><?=$_SESSION['education']?></div>
					<!-- <div class="education-school">School Name</div>
					<div class="education-dates">Dates Attended</div> -->
				</div>
				<!-- Add more education entries if needed -->
			</div>
		</div>
	</div>
</body>
</html>


