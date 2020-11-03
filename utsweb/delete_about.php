<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDB = "utsweb";

//Membuat Koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDB);
//check koneksi
if (!$conn) {
    die("Koneksi Gagal");
}

// sql to delete a record
$sql = "DELETE FROM about_me WHERE id=id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
header("refresh:3; url=edit_about2.php"); 

$conn->close();
?>