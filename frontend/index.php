<?php
require_once '../backend/dbkoneksi.php';
$conn = mysqli_connect('localhost', 'root', '', 'dbecommerce');
$sql = "SELECT nama FROM jenis_produk";
$result = mysqli_query($conn, $sql);
?>
<?php
$images = ['images/logo.png', 'images/logo.png', 'images/logo.png']
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Miora Pet Supplies</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/logo.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/hewan5.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-15" data-appear="fadeInUp">
							Miora Pet
						</h2>
						<p class="caption2-slide1 txt6 t-center animated visible-false m-b-37" data-appear="fadeInDown">
							" This Store Specializes in Cat Supplies "
						</p>
						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="#menu" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Let's Shopping
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our menu -->
	<section class="section-ourmenu p-t-115 p-b-120" style="background-color: bisque;">
		<div class="container" id='menu'>
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					List of
				</span>

				<h3 class="tit5 t-center m-t-2">
					Pet Supplies
				</h3>
			</div>
			<br>
			<div class="col-md-12">
				<div class="row">
					<?php foreach ($images as $image) : ?>
						<div class="col-sm-4">
							<img src="<?= $image ?>" alt="IMG-INTRO" style="width: 230px; margin-left: 62px;">
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<?php foreach ($result as $row) : ?>
						<div class="col-sm-4">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 m-t-30">
								<!-- Button2 -->
								<a href="kucing.php" class="btn2 flex-c-m txt5 ab-c-m size5">
									<?php echo $row['nama']; ?>
								</a>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg1">
		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="https://instagram.com/syanr7idh" class="fs-15 c-white"><i class="fa fa-instagram m-l-18" aria-hidden="true"></i></a>
						<a href="https://wa.me/6285298458167" class="fs-15 c-white"><i class="fa fa-whatsapp m-l-18" aria-hidden="true"></i></a>
						<a href="https://t.me/syanr7idh" class="fs-15 c-white"><i class="fa fa-telegram m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; Mahasiswa STT Terpadu Nurul Fikri <i class="fa fa-heart"></i>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>