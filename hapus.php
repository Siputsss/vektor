<?php
session_start();
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "vektor_db");

//mengecek apakah koneksi berhasil atau tidak
if(!$conn){
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if(isset($_POST['id'])) {
    // Menghapus data dengan id yang terpilih
    $ids = implode(",", $_POST['id']);
    $query = "DELETE FROM history WHERE id IN ($ids)";
    $result = mysqli_query($conn, $query);
  
    // Redirect ke halaman sebelumnya dengan pesan sukses
    if($result) {
      $_SESSION['success_message'] = "Data berhasil dihapus.";
      header('Location: history.php');
    } else {
      $_SESSION['error_message'] = "Terjadi kesalahan saat menghapus data.";
      header('Location: history.php');
    }
  } else {
    $_SESSION['error_message'] = "Tidak ada data yang dipilih.";
    header('Location: history.php');
  }
  
  if(isset($_GET['id'])){
      //mendapatkan id data yang akan dihapus dari parameter URL
      $id = $_GET['id'];
      
      //query untuk menghapus data berdasarkan id
      $query = "DELETE FROM history WHERE id = $id";
      
      // menampilkan pesan setelah berhasil dihapus
      $_SESSION['success_message'] = 'Data berhasil dihapus';
      
      //mengeksekusi query
      if(mysqli_query($conn, $query)){
          //jika data berhasil dihapus, redirect ke halaman utama
          header("Location: history.php");
          exit();
      } else{
          //jika terjadi kesalahan, tampilkan pesan error
          echo "Error: " . mysqli_error($conn);
      }
    
  }


//menutup koneksi database
mysqli_close($conn);
?>
