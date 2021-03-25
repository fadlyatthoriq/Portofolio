<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: admin.php');
}

$idgaleri = $_GET['id'];

$sql = "DELETE FROM galeri WHERE id='$idgaleri'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: admin.php');
}else{
    header('Location: hapusgaleri.php?status=gagal');
}
?>