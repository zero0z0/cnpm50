<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "badminton");
	

				
						
						
				if(isset($_POST['cal'])){
					$connect = mysqli_connect("localhost", "root", "", "badminton");
						
						$sanso = $_POST['sanso'];
						$sql = "delete from cms_badminton where SanSo = '$sanso'";
								
							if ($connect->query($sql) === TRUE) {
							echo "";
							} else {
							echo "fail";
							}
				}
							
							
							
							
							
							
							
				
							

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="AerobicsFit template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
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
								<li class="active"><a href="services.php">Services</a></li>
								<li><a href="contact.php">book</a></li>
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
				<li><a href="contact.php">book</a></li>
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
							<div class="home_title">Services</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="index.php">Home</a></li>
									<li>Services</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

			</div>
		</div>
	</div>

	<!-- Pricing -->

	<div class="pricing">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title"><h1>booked Yard</h1></div>
						<div class="section_text ml-auto mr-auto">
						</div>
					</div>
				</div>
			</div>
			<div class="row pricing_row">
				<?php
				$connect = mysqli_connect("localhost", "root", "", "badminton");

				$query = "SELECT * FROM cms_badminton";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						
				?>
				<!-- Package -->
				<div id="bla" class="col-lg-4 package_col">
					
					<div class="package">
					
						<div class="package_title_container trans_200">
							<div class="package_title"> <?php echo $row['name'] ?></div>
							<div class="package_price_container">
								<div class="package_price"><?php echo $row['giatien'] ?><span>.000 VND \ a hour</span></div>
								<div>sân số <?php echo $row['trangthai'] ?> </div>
								
							</div>
						</div>
						
						<div class="pricing_image"><img src="images/pricing_1.jpg" alt=""></div>
						<div class="pricing_content text-center trans_200">
							
						</div>
						<form action="services.php" method="post">
					<button name="cal" onclick="alert('số tiền cần trả là: <?php echo $row['giatien']*$row['sogiochoi'] ?>') " class="button home_button" name="bookyard">calculate</button>
					<input type="hidden" name="sanso" value="<?php echo $row['SanSo'] ?>">
					</form>
					
					</div>
					
					
					
				</div>
				<?php 
					}
				}
				?>
				
	

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content text-center d-flex flex-column align-items-center justify-content-center">
						<div class="footer_logo"><a href="#">Badminton</a></div>
						<div class="footer_contact">
							<ul>
								<li>
									<div class="footer_contact_title">Address:</div>
									<div class="footer_contact_text">Hem 793 Tran Xuan Soan, Tan Hung, Quan 7, Ho Chi Minh</div>
								</li>
								<li>
									<div class="footer_contact_title">Phone:</div>
									<div class="footer_contact_text">091 841 06 09</div>
								</li>
								
							</ul>
						</div>
						
						<nav class="footer_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.php">Home</a></li>
								<li><a href="services.php">Services</a></li>
								
								<li><a href="contact.php">book</a></li>
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
<script src="js/services.js"></script>
</body>
</html>