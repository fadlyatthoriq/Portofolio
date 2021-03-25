<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
$idgaleri = $_POST['idgaleri'];
$gambargaleri = $_POST['gambargaleri'];
$teksgaleri = $_POST['teksgaleri'];


$sql = "INSERT INTO galeri (idgaleri,gambargaleri,teksgaleri) VALUES ('$idgaleri','$gambargaleri','$teksgaleri')";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: admin.php');
}else{
    header('Location: simpangaleri.php?status=gagal');
}
}
?>