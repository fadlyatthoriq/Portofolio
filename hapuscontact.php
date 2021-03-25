<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: admin.php');
}

$idcomment = $_GET['id'];

$sql = "DELETE FROM comment WHERE id='$idcomment'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: admin.php');
}else{
    header('Location: hapuscontact.php?status=gagal');
}
?>