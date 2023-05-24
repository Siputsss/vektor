<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "vektor_db";
$conn = mysqli_connect($host, $user, $password, $database);

// Baca data dari POST request
$x1 = $_POST["x1"];
$y1 = $_POST["y1"];
$z1 = $_POST["z1"];
$x2 = $_POST["x2"];
$y2 = $_POST["y2"];
$z2 = $_POST["z2"];
$sudut = $_POST["sudut"];

// Simpan data ke dalam tabel history
$sql = "INSERT INTO history (x1, y1, z1, x2, y2, z2, hasil) VALUES ('$x1', '$y1', '$z1', '$x2', '$y2', '$z2', '$sudut')";
mysqli_query($conn, $sql);

// Tutup koneksi ke database
mysqli_close($conn);
?>