<?php
require_once '../backend/dbkoneksi.php';
$conn = mysqli_connect('localhost', 'root', '', 'dbecommerce');
$sql = "SELECT nama FROM produk";
$result = mysqli_query($conn, $sql);
?>
<?php
$images = ['images/kucing1.jpg', 'images/kucing2.jpg', 'images/kucing3.jpg'];
?>

<?php
$texts = ['BOLT NETTO 1 KG ! !
Tersedia dalam bentuk ikan, donut, dan salmon.
Variasi Bolt + Vitamin Kucing Alami.', 'Akan memastikan hewan peliharaan Anda aman di dalam dan di luar. Tersedia dalam berbagai variasi warna.', 'Dengan desain bentuk yang unik dan nyaman digunakan oleh Kucing anda, juga tersedia dalam berbagai variasi warna.']
?>

<?php
$routes = ['kucing1.php', 'kucing2.php', 'kucing3.php']
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Daftar Perlengkapan Kucing</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<!-- Intro -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/wpp.jpg);">

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Perlengkapan Kucing
			</h3>
			<span class="tit2 p-l-15 p-r-15">
				By Miora Pet
			</span>
		</div>

		<div class="bread-crumb bo5-b p-t-17 p-b-17" style="background-color: coral;">
			<div class="container">
				<a href="index.php" class="txt27 text-white">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10" style="color: bisque;">/</span>

				<span class="txt29" style="color: bisque;">
					List Supplies
				</span>
			</div>
		</div>

		<div class="content-intro p-t-77 p-b-100" style="background-color: bisque;">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<?php foreach ($images as $image) : ?>
							<div class="col-sm-4">
								<div class="wrap-pic-blo1 bo-rad-10">
									<img src="<?= $image ?>" class="img-thumbnail" alt="IMG-INTRO">
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>

				<div class="col-md-12">
					<div class="row">
						<?php foreach ($result as $row) : ?>
							<div class="col-sm-4">
								<a href="kucing1.php">
									<h4 class="txt5 color0-hov trans-0-4 m-b-13 m-t-20">
										<?php echo $row['nama']; ?>
									</h4>
								</a>
							</div>
						<?php endforeach ?>
					</div>
				</div>

				<div class="col-md-12">
					<div class="row">
						<?php foreach ($texts as $text) : ?>
							<div class="col-sm-4">
								<p class="m-b-20"><?= $text ?></p>
							</div>
						<?php endforeach ?>
					</div>
				</div>

				<div class="col-md-12">
					<div class="row">
						<?php foreach ($routes as $route) : ?>
							<div class="col-sm-4">
							<a href="<?= $route ?>" class="txt4">
								See More
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
							</div>
						<?php endforeach ?>
					</div>
				</div>

				<?php
				// <div class="col-md-4 p-t-30">
				// 	<!-- Block1 -->
				// 	<div class="blo1">
				// 		<div class="wrap-pic-blo1 bo-rad-10">
				// 			<img src="images/kucing2.jpg" class="img-thumbnail" alt="IMG-INTRO">
				// 		</div>

				// 		<div class="wrap-text-blo1 p-t-35">
				// 			<a href="kucing2.php">
				// 				<h4 class="txt5 color0-hov trans-0-4 m-b-13">
				// 					Tenda Kandang Kucing
				// 				</h4>
				// 			</a>

				// 			<p class="m-b-20">
				// 				Akan memastikan hewan peliharaan Anda aman di dalam dan di luar.
				// 				Tersedia dalam berbagai variasi warna.
				// 			</p>

				// 			<a href="kucing2.php" class="txt4">
				// 				See More
				// 				<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
				// 			</a>
				// 		</div>
				// 	</div>
				// </div>

				// <div class="col-md-4 p-t-30">
				// 	<!-- Block1 -->
				// 	<div class="blo1">
				// 		<div class="wrap-pic-blo1 bo-rad-10">
				// 			<img src="images/kucing3.jpg" class="img-thumbnail" alt="IMG-INTRO">
				// 		</div>

				// 		<div class="wrap-text-blo1 p-t-35">
				// 			<a href="kucing3.php">
				// 				<h4 class="txt5 color0-hov trans-0-4 m-b-13">
				// 					Tempat Makan Kucing
				// 				</h4>
				// 			</a>

				// 			<p class="m-b-20">
				// 				Dengan desain bentuk yang unik dan nyaman digunakan oleh Kucing anda, juga tersedia dalam berbagai variasi warna.
				// 			</p>

				// 			<a href="kucing3.php" class="txt4">
				// 				See More
				// 				<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
				// 			</a>
				// 		</div>
				// 	</div>
				// </div>
				?>
			</div>
		</div>
		</div>
	</section>
	<!-- Footer -->
	<footer class="bg1">
		<div class="end-footer bg2" style="background-color: coral;">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="https://instagram.com/syanr7idh" class="fs-15 c-white"><i class="fa fa-instagram m-l-18" aria-hidden="true"></i></a>
						<a href="https://wa.me/6285298458167" class="fs-15 c-white"><i class="fa fa-whatsapp m-l-18" aria-hidden="true"></i></a>
						<a href="https://t.me/syanr7idh" class="fs-15 c-white"><i class="fa fa-telegram m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5 text-white">
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