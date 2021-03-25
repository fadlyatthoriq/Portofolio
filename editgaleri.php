<?php
include 'koneksi.php';

if (isset($_POST['editgaleri'])) {
    $idgaleri = $_POST['id'];
    $gambargaleri = $_POST['gambargaleri'];
    $teksgaleri = $_POST['teksgaleri'];

    $sql = "UPDATE galeri SET gambargaleri='$gambargaleri', teksgaleri='$teksgaleri' WHERE id='$idgaleri'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editgaleri.php?status=gagal');
    } 
}
?>