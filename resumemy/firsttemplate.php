<?php session_start(); ?>
<html>

<head>
	<title>My Resume</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="template.css">
</head>

<body>
	<?php



	$name = $_SESSION["fullname"];
	$email = $_SESSION["email"];
	$mobile = $_SESSION["phone"];
	$degree = $_SESSION["degree"];
	$major = $_SESSION["major"];
	$school = $_SESSION["school"];
	$gdate = $_SESSION["Graduation"];
	$position1 = $_SESSION["position1"];
	$company1 = $_SESSION["company1"];
	$startdate = $_SESSION["startdate"];
	$enddate = $_SESSION["endDate1"];
	$respon = $_SESSION["responsibilities1"];
	$skill1 = $_SESSION["skill1"];
	$skill2 = $_SESSION["skill2"];
	$skill3 = $_SESSION["skill3"];
	$interest = $_SESSION["interest"];
	$imgpath = $_SESSION["imagepath"];
	
$dob=$_SESSION["dob"];
	$imgname = $imgpath["name"];

	$image_path = "./imagecollection/$imgname";



	?>
	<div class="wraper">
		<div class="container">
			<div class="left-content p-30">
				<div class="logo">
					<a href="index.html">
						<span>My</span>
						<span>Resume</span>
					</a>
				</div>
				<div class="nav">
					<ul>
						<li><a href="#Home">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="">Work Profile</a></li>
						<li><a href="">Portfolio</a></li>
						<li><a href="Education.php">Education</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="left-footer">
					<div class="social-icons">
						<ul>
							<li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="foot-contact">
						<ul>
							<li>
								<?php echo ($email) ?>>
							</li>
							<li>
								<?php echo ($mobile) ?>
							</li>
						</ul>
					</div>

					<div class="copy-rights">Copyright &copy;2019 All rights reserved</div>
				</div>

			</div>
			<div class="main-content">
				<div class="section1 p-30" id="Home">
					<div class="sec-title">
						<div class="pg-sub-title">Home</div>
						<div class="pg-title">My Profile</div>
					</div>
					<div class="d-flex-align-center">
						<div class="user-img flex-1"><img src="./imagecollection/<?=$imgname;?>"></div>
						<div class="user-profile flex-1">
							<div class="pro-details">
								<div class="sm-text">HELLO EVERYBODY, I AM</div>
								<div class="name">
									<?php echo ($name) ?>
								</div>
								<div class="role">
									<?php echo ($position1) ?>
								</div>

							</div>
							<div class="text">You will begin to realise why this exercise is called the Dickens Pattern
								(with reference to the ghost showing Scrooge some different futures)</div>
							<div class="pr-list">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo($dob); ?></li>
									<li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo($mobile); ?></li>
									<li><i class="fa fa-envelope" aria-hidden="true"></i><?=$email;?></li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i> Hyderabad, Telangana</li>
								</ul>
							</div>
							<div class="social-icons-head">
								<ul>
									<li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
									<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>

</html>