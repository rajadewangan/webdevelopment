<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Education</title>
    <link rel="stylesheet" href="education.css" type="text/css">
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
$address = $_SESSION["Address"];


?>
	<header>
		<h1>Education</h1>
		<nav>
			<ul>
				<li><a href="#overview">Overview</a></li>
				<li><a href="#programs">Programs</a></li>
				<li><a href="#admissions">Admissions</a></li>
				<li><a href="#studentlife">Student Life</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="overview">
			<h2>Overview</h2>
			<p><?php echo($interest); ?></p>
		</section>
		<section id="programs">
			<h2>Programs</h2>
            <ul>
                <li><?php echo($major); ?></li>
            </ul>
			<ul>
				<li>Bachelor's Degree Programs</li>
				<ul>
					<li><?php echo($degree); ?></li>
					<li><?php echo($startdate); ?></li>
					<li><?php echo($enddate) ?></li>
				</ul>
				
				
			</ul>
		</section>
	
		<section id="studentlife">
			<h2><?php echo($school); ?></h2>
			<p>We offer a variety of activities and events to enhance the student experience.</p>
		</section>
	</main>
	<footer>
		<p>Contact us at <?php echo($email); ?> for more information.</p>
	</footer>
</body>
</html>
