<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
$namacomment = $_POST['namacomment'];
$emailcomment = $_POST['emailcomment'];
$comment = $_POST['comment'];


$sql = "INSERT INTO comment (namacomment,emailcomment,comment) VALUES ('$namacomment','$emailcomment','$comment')";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: index.php');
}else{
    header('Location: simpancontact.php?status=gagal');
}
}
?>