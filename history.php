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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                    <a class="nav-link active" href="history.php">History</a>
                    <a class="nav-link" href="about.php">About</a>
                    <a class="nav-link" href="javascript:exit()">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

  <?php
  session_start();
// Pesan sukses atau error
if (isset($_SESSION['success_message'])) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $_SESSION['success_message'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    unset($_SESSION['success_message']);
  } elseif (isset($_SESSION['error_message'])) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $_SESSION['error_message'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    unset($_SESSION['error_message']);
  }

?>
        <h1>History</h1><br>
        <form action="hapus.php" method="POST">
            <button type="submit" class="btn btn-danger float-end mb-2"><i class="fas fa-trash"></i> Hapus</button>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>x1</th>
                <th>y1</th>
                <th>z1</th>
                <th>x2</th>
                <th>y2</th>
                <th>z2</th>
                <th>Hasil (derajat)</th>
                <!-- <th>Aksi</th> -->
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check-all" />
                    </div>
                </th>
            </tr>

            <?php
  $conn = mysqli_connect("localhost","root","");
  $database = mysqli_select_db($conn, "vektor_db");  
  
  $no = 1;
  $data = mysqli_query($conn,"select * from history");
  while($r = mysqli_fetch_array($data)){
   $id = $r['id'];
   $x1 = $r['x1'];
   $y1 = $r['y1'];
   $z1 = $r['z1'];
   $x2 = $r['x2'];
   $y2 = $r['y2'];
   $z2 = $r['z2'];
   $hasil = $r['hasil'];
        ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $x1; ?></td>
                <td><?php echo $y1; ?></td>
                <td><?php echo $z1; ?></td>
                <td><?php echo $x2; ?></td>
                <td><?php echo $y2; ?></td>
                <td><?php echo $z2; ?></td>
                <td><?php echo $hasil; ?></td>
                <!-- <td><a href="hapus.php?id=<?php echo $id ?>" name="hapus" id="hapus" class="btn btn-danger">Hapus</a> -->
                <td>
                    <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" name="id[]"
                            value="<?= $id ?>" />
                    </div>
                </td>
            </tr>
            <?php 
  }
  ?>

        </table>
        </form>

        <script>
            var checkAll = document.getElementById('check-all');
            var checkboxes = document.getElementsByClassName('checkbox');

            // Add click event to check all checkbox
            checkAll.addEventListener('click', function () {
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = checkAll.checked;
                }
            });

            // Add click event to individual checkbox
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].addEventListener('click', function () {
                    // Uncheck check all checkbox if one of the individual checkboxes is unchecked
                    if (!this.checked) {
                        checkAll.checked = false;
                    }
                    // Check check all checkbox if all of the individual checkboxes are checked
                    else if (document.querySelectorAll('.checkbox:checked').length == checkboxes.length) {
                        checkAll.checked = true;
                    }
                });
            }
        </script>

        <script>
			function exit() {
            var confirmExit = confirm("Apakah Anda yakin ingin keluar?");
            if (confirmExit) {
                window.location.href = "https://www.google.com";
            }
        }
		</script>	

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>