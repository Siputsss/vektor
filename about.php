<html>

<head>
	<title>Menghitung Sudut Antara 2 Vektor</title>
	<style type="text/css">
		.labelfrm {
			display: block;
			font-size: small;
			margin-top: 5px;
		}

		.error {
			font-size: small;
			color: red;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
	<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.php">Home</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link" aria-current="page" href="hitung.php">Hitung</a>
					<a class="nav-link" href="history.php">History</a>
					<a class="nav-link active" href="about.php">About</a>
					<a class="nav-link" href="javascript:exit()">Logout</a>
				</div>
			</div>
		</div>
	</nav>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Selamat Datang</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<style>
			/* Style untuk header */
			.header {
				background-color: #f5f5f5;
				padding: 30px;
				text-align: center;
			}

			/* Style untuk jumbotron */
			.jumbotron {
				background-image: url('img/about.jpeg');
				background-size: cover;
				color: #fff;
				padding: 100px 25px;
				text-align: center;
				margin-bottom: 0;
			}

			/* Style untuk tombol */
			.btn-primary {
				background-color: #008CBA;
				border-color: #008CBA;
			}

			.btn-primary:hover {
				background-color: #006A8E;
				border-color: #006A8E;
			}
		</style>
	</head>

	<body>
		<!-- Header -->
		<div class="header">
			<h1>Terima Kasih</h1>
		</div>

		<!-- Jumbotron -->
		<div class="jumbotron">
			<p>Terima kasih telah mengunjungi website kami. Semoga website ini bermanfaat bagi anda. Jika Anda memiliki
				pertanyaan atau saran, jangan ragu untuk menghubungi kami melalui kontak dibawah.</p>
			<p><button onclick="scrollToBottom()" class="btn btn-primary btn-lg" role="button">Kontak Kami</button>
				<p>
		</div>

		<script>
			function scrollToBottom() {
				window.scrollTo(0, document.body.scrollHeight);
			}
		</script>

		<!DOCTYPE html>
		<html>

		<head>
			<title>About Us</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet"
				href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
			<style>
				/* Style untuk header */
				.header {
					background-color: #f5f5f5;
					padding: 30px;
					text-align: center;
				}

				/* Style untuk gambar */
				.img-container {
					position: relative;
					display: inline-block;
				}

				.img-overlay {
					position: absolute;
					top: 0;
					bottom: 0;
					left: 0;
					right: 0;
					opacity: 0;
					transition: .5s ease;
					background-color: rgba(0, 0, 0, 0.5);
					text-align: center;
					color: white;
					padding: 20px;
				}

				.img-container:hover .img-overlay {
					opacity: 1;
				}
			</style>
		</head>

		<body>

			<!-- Header -->
			<div class="header">
				<h1>About Us</h1>
			</div>

			<!-- Konten -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Holla!</h2>
						<p style="text-align: justify; text-indent: 0.5in;"> Vektor adalah objek matematika yang memiliki arah dan besaran. Sudut antara dua vektor
							didefinisikan sebagai sudut antara garis-garis yang membentuk vektor tersebut. Cara
							menghitung sudut antara dua vektor adalah dengan menggunakan rumus cosinus. Sudut antara dua
							vektor adalah konsep penting dalam fisika. Contohnya adalah dalam kasus gerak parabola, di
							mana sudut antara kecepatan awal dan gravitasi sangat mempengaruhi lintasan bola. Konsep ini
							juga digunakan dalam kecerdasan buatan, di mana vektor digunakan untuk merepresentasikan
							fitur data. Pada halaman
							ini, kalian bisa menghitung sudut antara 2 vektor.</p>
						<p style="text-align: justify; text-indent: 0.5in;">Web ini dibuat
							untuk memenuhi project ujian akhir semester mata kuliah kalkulus II. Semoga web ini bisa
							bermanfaat bagi
							kita semua. Terima kasih kepada Ibu Euis Nur Fitriani Dewi, S.T., M.Kom selaku pengampu mata kuliah
							kalkulus II.</p>
					</div>
					<div class="col-md-6">
						<div class="img-container mt-4">
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="img/1.jpeg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item">
										<img src="img/2.jpeg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item">
										<img src="img/3.jpeg" class="d-block w-100" alt="...">
									</div>
								</div>
							</div>
							<div class="img-overlay">
							</div>
						</div>
					</div>
				</div>
			</div>

		<script>
			function exit() {
            var confirmExit = confirm("Apakah Anda yakin ingin keluar?");
            if (confirmExit) {
                window.location.href = "https://www.google.com";
            }
        }
		</script>	

			<!-- Footer -->
			<footer class="bg-light text-center text-lg-start">
				<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
					<a href="https://www.facebook.com/chica.dede?mibextid=ZbWKwL"><i class="fab fa-facebook fa-lg"></i></a>
					<a href="https://wa.me/6283856526509"><i class="fab fa-whatsapp fa-lg mx-4"></i></a>
					<a href="https://instagram.com/riicha_2194?igshid=ZGUzMzM3NWJiOQ=="><i class="fab fa-instagram fa-lg"></i></a>
				</div>
				<div class="text-center p-3" style="background-color: #f5f5f5;">
					<p>© 2023 | Kalkulus II</p>
				</div>
			</footer>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
		</body>

		</html>