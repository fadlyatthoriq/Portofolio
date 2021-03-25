<?php
    include 'koneksi.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexstyle.css">

    <title>Portofolio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #778ca3;">
        <div class="container pt-1 pb-1">
          <a class="navbar-brand" href="admin.php">Fadly Atthoriq</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="#galeri">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <section id="profil">
      <div class="jumbotron jumbotron-fluid bg-transparent text-center pb-4">
        <div class="container">
            <?php
                $sql = "SELECT * FROM profil";
                $query = mysqli_query($connect,$sql);

                while ($prfl = mysqli_fetch_array($query)) {
                    echo '<img src="'.$prfl['gambarprofil'].'" alt="gambar" class="rounded-circle img-thumbnail shadow-sm mt-2" width="20%" height="220px">';
                    echo '<h3 class="mt-3 mb-1 fw-bold fs-3">'.$prfl['namaprofil'].'</h3>';
                    echo '<p>'.$prfl['teksprofil'].'</p>';
                    echo "<a href='formeditprofil.php?id=".$prfl['id']."'><button class='btn-sm btn btn-outline-dark'>Edit</button></a>";
                
                }
            ?>
        </div>
      </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#778ca3" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,149.3C384,117,480,75,576,101.3C672,128,768,224,864,240C960,256,1056,192,1152,165.3C1248,139,1344,149,1392,154.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

    <br id="about">
    <section>
      <div class="container mt-5"> 
        <h3 class="text-center mb-2 fw-bold fs-3">About Me</h3> <br>
        <div class="row justify-content-evenly lh-base" style="text-align: justify;">
          <div class="col-md-5">
            <p class="paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate voluptatibus dolore eveniet magnam, reprehenderit ex saepe labore mollitia architecto harum necessitatibus consequuntur, officiis quam, natus voluptas placeat delectus. Expedita provident repudiandae magni quod. Non autem esse assumenda nihil excepturi perspiciatis consequatur molestiae hic qui quo accusantium, consequuntur repellendus voluptas repudiandae!</p>
          </div>
          <div class="col-md-5">
            <p class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus harum facilis ratione suscipit veniam? Iure quo molestias explicabo impedit reprehenderit aliquam asperiores minus, fuga quos, eos velit laborum, in nostrum aspernatur commodi. Itaque optio adipisci, labore sed dolorum neque provident officia tenetur consequatur animi repellat, sunt minima enim qui aliquam!</p>
          </div>
        </div>
      </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#778ca3" fill-opacity="1" d="M0,192L48,186.7C96,181,192,171,288,154.7C384,139,480,117,576,138.7C672,160,768,224,864,213.3C960,203,1056,117,1152,85.3C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    <br id="galeri">
    <section id="galleri">
      <div class="container">
        <h3 class="text-center mb-2 fw-bold fs-3">Galeri</h3> <br>
        <div class="row justify-content-evenly lh-base">
        <?php
                $sql = "SELECT * FROM galeri";
                $query = mysqli_query($connect,$sql);

                while ($glri = mysqli_fetch_array($query)) {
                    echo '<div class="col-md-4">';
                        echo '<div class="card shadow">';
                                echo '<img src="'.$glri['gambargaleri'].'" class="card-img-top" alt="...">';
                            echo '<div class="card-body">';
                                echo '<p class="card-text">'.$glri['teksgaleri'].'</p>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';;
                }
        ?>
        <a href="tabelgaleri.php" class="btn btn-outline-dark btn-sm mt-4 me-3 ms-3">Edit Galeri</a>
        </div>
      </div>
    </section>  
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#778ca3" fill-opacity="1" d="M0,192L48,186.7C96,181,192,171,288,154.7C384,139,480,117,576,138.7C672,160,768,224,864,213.3C960,203,1056,117,1152,85.3C1248,53,1344,75,1392,85.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    
    <br id="contact">
    <section >
        <div class="container">
          <h3 class="text-center fw-bold mb-2 fs-3">List Contact</h3>
          <!-- <div class="row">
            <div class="col-2"></div>
            <div class="col align-self-start">
            <form action="simpancontact.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="namacomment">Your Name</label>
                        <input type="text" class="form-control" name="namacomment" placeholder="Your Name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="emailcomment">Email</label>
                        <input type="email" class="form-control" name="emailcomment" placeholder="name@example.com">
                    </div>
                    <div class="form-group mb-3">
                        <label for="comment">Your Comment</label>
                        <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
                    </div>
                <button class="btn btn-primary" name="simpan" value="simpan">Submit</button>
            </form>
            </div>
            <div class="col-2"></div>
          </div> -->

          <?php
            $sql = "SELECT * FROM comment";
            $query = mysqli_query($connect,$sql);

            while ($c = mysqli_fetch_array($query)) {
              echo '<div class="list-group">';
                echo '<div class="list-group-item list-group-item-action disable" aria-current="true">';
                echo '<div class="d-flex w-100 justify-content-between">';
                echo '<h5 class="mb-1 bold"><strong>'.$c['namacomment'].'</strong></h5>';
                echo '<a href="hapuscontact.php?id='.$c['id'].'" class="btn btn-outline-danger btn-sm"><small>Hapus</small></a>';
                echo '</div>';
                echo '<p class="mb-1">'.$c['comment'].'</p>';
                echo '<small>'.$c['emailcomment'].'</small>';
                echo '</div>';
              echo '</div>';



            }

          ?>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#778ca3" fill-opacity="1" d="M0,192L48,186.7C96,181,192,171,288,154.7C384,139,480,117,576,138.7C672,160,768,224,864,213.3C960,203,1056,117,1152,85.3C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <footer class="pb-5">
      <p class="text-center fs-5 fw-light fst-italic">Fadly Atthoriq</p>
    </footer>


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