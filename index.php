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
					<a class="nav-link" href="about.php">About</a>
					<a class="nav-link" href="javascript:exit()" >Logout</a>
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
				background-image: url('img/home.jpeg');
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
			<h1>Selamat Datang di Web Kami</h1>
		</div>

		<!-- Jumbotron -->
		<div class="jumbotron">
			<p>Selamat datang di halaman kami tentang sudut antara dua vektor! Konsep ini sangat penting dalam
				matematika, fisika, dan banyak bidang lainnya. Pada halaman ini, kalian bisa</p>
			<h3>Menghitung sudut antara 2 vektor.</h3>
			<p><a href="hitung.php" class="btn btn-primary btn-lg" role="button">Klik Disini!</a></p>
		</div>

		<!-- Footer -->
		<footer class="bg-light text-center text-lg-start">
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				<a href="https://www.facebook.com/profile.php?id=100006946354065&mibextid=ZbWKwL"><i
						class="fab fa-facebook fa-lg"></i></a>
				<a href="https://wa.me/6289505124929"><i class="fab fa-whatsapp fa-lg mx-4"></i></a>
				<a href="https://instagram.com/siskaputriapriliany?igshid=ZGUzMzM3NWJiOQ=="><i
						class="fab fa-instagram fa-lg"></i></a>
			</div>
			<div class="text-center p-3" style="background-color: #f5f5f5;">
				<p>© 2023 | Kalkulus II</p>
			</div>
		</footer>

		<script>
			function exit() {
            var confirmExit = confirm("Apakah Anda yakin ingin keluar?");
            if (confirmExit) {
                window.location.href = "https://www.google.com";
            }
        }
		</script>	

		<!-- Script untuk Bootstrap 5 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
	</body>

	</html>