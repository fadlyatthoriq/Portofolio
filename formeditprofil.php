<?php
include 'koneksi.php';

    $idprofil = $_GET['id'];
    $sql = "SELECT * FROM profil WHERE id='$idprofil'";
    $query = mysqli_query($connect, $sql);
    $prfl = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formeditprofil.css">

    <title>Edit Data</title>
  </head>
  <body>
      <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-6 ms-3 p-2">Fadly Atthoriq</a>
            <a href="admin.php"><button class="btn shadow btn-sm btn-outline-dark position-absolute top-50 end-0 translate-middle-y me-4">< Back to Admin </button></a>
        </div>
    </nav>
    <div class="container bg-light border border-2 shadow position-absolute top-50 start-50 translate-middle p-4 rounded">
        <h4 class="p-2 editprfl">Edit Profil</h4>
        <form action="editprofil.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $prfl['id']?>"/>
                <div class="form-group">
                    <label for="namaprofil">Nama Profil</label>
                    <input type="text" class="form-control" name="namaprofil" value="<?php echo $prfl['namaprofil']?>"/>
                       </div>
                <div class="form-group">
                    <label for="gambarprofil">Foto Profil</label>
                       <input type="url" class="form-control" name="gambarprofil" value="<?php echo $prfl['gambarprofil']?>"/>
                       </div>
                <div class="form-group">
                        <label for="teksprofil">Teks Dibawah Profil</label>
                        <input type="text" class="form-control" name="teksprofil" value="<?php echo $prfl['teksprofil']?>"/>
                    </div>
                <button class="btn btn-outline-primary mt-2" name="edit" value="simpan">Simpan</button>
         </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>