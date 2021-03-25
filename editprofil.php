<?php
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $idprofil = $_POST['id'];
    $namaprofil = $_POST['namaprofil'];
    $gambarprofil = $_POST['gambarprofil'];
    $teksprofil = $_POST['teksprofil'];

    $sql = "UPDATE profil SET namaprofil='$namaprofil', gambarprofil='$gambarprofil', teksprofil='$teksprofil' WHERE id='$idprofil'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editprofil.php?status=gagal');
    } 
}
?>