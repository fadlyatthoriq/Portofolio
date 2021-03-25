<?php
    include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Galeri</title>

    <style>
        body {
            overflow: hidden;
            background-color: rgb(230,230,230);
        }
        .dd{
            background-color: red;
            color: white;
        }
        .tengah{
            text-align: center;
        }
        nav {
            background-color: #778ca3;
        }
        .button:hover{
            background-color: #778ca3;
            color: black;
        }
    </style>
  </head>
  <body>
    <!-- nav -->
    <nav class="navbar navbar-light mb-2">
        <div class="container-fluid">
            <span class="navbar-brand fs-6 ms-3 text-center p-2 sticky-top">Fadly Atthoriq</span>
            <a href="admin.php"><button class="btn shadow btn-sm btn-outline-dark position-absolute top-50 end-0 translate-middle-y me-4">Back To Admin</button></a>
        </div>
    </nav>

    <div class="container">
        <h3 class="fs-5 text-center p-1 m-1" style="border-radius: 5px; background-color: #778ca3;">List Item</h3>
        <a href="formaddgaleri.html"><button class="btn button" style="border-radius: 5px;width: 80%; margin-left: 110px;border-color: rgb(64, 70, 124);">Tambah Baru</button></a>
        <div class="card m-1" style="height: 510px;overflow: scroll;">
            <table class ="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Gambar Galeri</th>
                    <th>Teks Galeri</th>
                    <th>Modify</th>
                </tr>
        
        
                <?php
        
        
                $sql = "SELECT * FROM galeri";
                $query = mysqli_query($connect,$sql);
                $no_urut = 0;
                
        
                while($tblp = mysqli_fetch_array($query)){
                    $no_urut++;
                    
                    echo "<tr>";
                    echo "<td>".$no_urut."</td>";
                    echo "<td>".$tblp['gambargaleri']."</td>";
                    echo "<td>".$tblp['teksgaleri']."</td>";
                    echo "<td>";
                    // echo "<button type='button' class='btn btn-sm btn-outline-warning' data-bs-toggle='modal' data-bs-target='#exampleModal'>Edit</button>";
                    echo "<a href='formeditgaleri.php?id=".$tblp['id']."'><button class='btn-sm btn btn-outline-warning me-1'>Edit</button></a>";
                    echo "<a href='hapusgaleri.php?id=".$tblp['id']."'><button class='btn-sm btn btn-outline-danger ms-1'>Hapus</button></a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
        </div>
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