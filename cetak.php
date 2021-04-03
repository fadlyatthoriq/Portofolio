<?php

include 'koneksi.php';

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = '<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexstyle.css">

    <title>Portofolio</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #778ca3;
        }
    </style>
  </head>
  <body>
  <section >
        <div class="container">
          <h3 class="text-center fw-bold mb-2 fs-3">List Contact</h3>';

          $sql = "SELECT * FROM comment";
            $query = mysqli_query($connect,$sql);

            while ($c = mysqli_fetch_array($query)) {
               $html .= '<div class="list-group" id = "listcontact">
                 <div class="list-group-item list-group-item-action disable" aria-current="true">
                 <div class="d-flex w-100 justify-content-between">
                 <h5 class="mb-1 bold"><strong>'.$c['namacomment'].'</strong></h5>
                 </div>
                 <p class="mb-1">'.$c['comment'].'</p>
                 <small>'.$c['emailcomment'].'</small>
                 </div>
               </div>';



            };
    $html .= '</div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output();

?>