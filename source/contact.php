
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "badminton");
	
						
						if(isset($_POST['book'])){	
						$connect = mysqli_connect("localhost", "root", "", "badminton");
						$today =date("ymd");
						$time = date("h:i:sa");
						$time1 =$_POST['time'];
						
						$timee = $_POST['giobatdau'];
						
						$endtime = date('Y-m-d H:i',strtotime("+$time1 hour +20 minutes",strtotime($timee)));;
						
						
						
														$sql = "INSERT INTO cms_badminton(SanSo,giatien,name,ngay,sogiochoi,trangthai,giobatdau,gioketthuc)
						values('{$_POST['numberYard']}','50000','{$_POST['name']}',$today,'$time1','{$_POST['numberYard']}','{$_POST['giobatdau']}','$endtime')";
							
							if ($connect->query($sql) === TRUE) {
							echo "";
							} else {
							echo "fail";
							}
													header('Location: http://localhost/aerobicsFit/services.php');

						}
				
							

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="AerobicsFit template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">Badminton</div>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.php">Home</a></li>
								<li><a href="services.php">Services</a></li>
								
								<li class="active"><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
						<div class="social header_social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="menu_social social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/badminton3.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="index.php">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8">
					<div class="contact_form_container">
						<div class="contact_title">Give for me your information</div>
						<form action="Contact.php" method="post" id="contact_form" class="contact_form">
							<div class="row">
								<div class="col-lg-6">
									<div class="contact_input_container contact_input_container_1"><input type="text" name="name" class="contact_input" placeholder="Your Name" required="required"></div>
								</div>	
								<div class="col-lg-6">
									<div class="contact_input_container contact_input_container_2"><input type="number" name="numberYard" class="contact_input" placeholder="number yard:" required="required"></div>
								</div>
							</div>
							<div class="contact_input_container contact_input_container_3"><input type="text" name="giobatdau" class="contact_input" placeholder="what time you can play? please write 00:00:00. Thank you." required="required"></div>
							<div class="contact_input_container contact_input_container_4"><input type="number" name="time" class="contact_input" placeholder="how long you can play?" required="required"></div></div>
							<button type="submit" name="book" class="contact_button button">Book Yard</button>
						</form>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-4">
				<br>
				<br>
					<div class="contact_info">
						<div class="contact_title">Contact Info</div>
						
						<div class="contact_info_list">
							<ul>
								<li>
									<div class="contact_info_title">Address:</div>
									<div class="contact_info_text">Hem 793 Tran Xuan Soan, Tan Hung, Quan 7, Ho Chi Minh</div>
								</li>
								<li>
									<div class="contact_info_title">Phone:</div>
									<div class="contact_info_text">091 841 06 09</div>
								</li>
								
							</ul>
						</div>
						<div class="social contact_info_social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content text-center d-flex flex-column align-items-center justify-content-center">
						<div class="footer_logo"><a href="#">Aerobics<span>Fit</span></a></div>
						<div class="footer_contact">
							<ul>
								<li>
									<div class="footer_contact_title">Address:</div>
									<div class="footer_contact_text">481 Creekside Lane Avila CA 93424</div>
								</li>
								<li>
									<div class="footer_contact_title">Phone:</div>
									<div class="footer_contact_text">+53 345 7953 32453</div>
								</li>
								
							</ul>
						</div>
						<div class="social footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<nav class="footer_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.php">Home</a></li>
								<li><a href="services.php">Services</a></li>
								
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>