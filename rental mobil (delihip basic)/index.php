<?php
    include_once("function.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Delichip Cake Store</title>
  </head>
  
  <body>
<header class="header">

    <a href="#" class="logo">
        <img src="images/31-315783_kue-ulang-tahun-animasi-clipart.png" alt="">
    </a>

    <nav class="navbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link " href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"data-bs-toggle="modal" data-bs-target="#prodak" href="#">Produk</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"data-bs-toggle="modal" data-bs-target="#kontak" href="#">Contacts</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"data-bs-toggle="modal" data-bs-target="#profil" href="#">Profil</a>
              </li>
          </ul>
          
    </nav>
    <div class="icons">
        <a href="login/login.php" class="fa fa-user"></a>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>
  </header>
  <br>
  <br>
  <br>
  <section class="home" id="home">
  
      <div class="content">
          <h3>Welcome</h3>
          <p>Selamat datang di Delichip Cake Store, Delichip menjual bebeberapa jenis kue seperti bolu, Kue ulang tahun dan Kue coustem </p>
      </div>
      <div class="image">
          <img src="images/31-315783_kue-ulang-tahun-animasi-clipart.png" alt="img">
      </div>
  </section>
  
  <section class="products" id="products">

  
      <h1 class="heading"> BEST <span>SELLER</span> </h1>
  
      <div class="box-container">
  
          <div class="box">
              <div class="image">
                  <img src="kue/Marble Coklat - Copy.jpeg" alt="">
              </div>
              <div class="content">
                  <h3>Marble Coklat</h3>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">Rp 60.000,00</div>
              </div>
          </div>
  
          <div class="box">
              <div class="image">
                  <img src="kue/Bolu Ketam Hitam Polos - Copy.jpeg" alt="">
              </div>
              <div class="content">
                  <h3>Bolu Ketan Hitam Polos</h3>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">Rp 65.000,00</div>
              </div>
          </div>
  
          <div class="box">
              <div class="image">
                  <img src="kue/Brownies Keju Gondrong - Copy.jpeg" alt="">
              </div>
              <div class="content">
                  <h3>Keju Gondrong</h3>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">Rp 70.000,00</div>
              </div>
          </div>
  
      </div>
   <!-- Modal produk-->
   <div class="modal fade" id="prodak" tabindex="-1" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                Login terlebihdahulu sebelum memasuki halaman produk, bisa klik icon <i class="fa fa-user"></i> atau klik tombol login
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="login/login.php" class="btn btn-primary">Login</a>
                </div>
              </div>
            </div>
   </div>
             <!-- Modal profil-->
   <div class="modal fade" id="profil" tabindex="-1" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                Login terlebihdahulu sebelum memasuki halaman profil, bisa klik icon <i class="fa fa-user"></i> atau klik tombol login
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="login/login.php" class="btn btn-primary">Login</a>
                </div>
              </div>
            </div>
   </div>
   <!---- modal kontak --->
   <div class="modal fade" id="kontak" tabindex="-1" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                Login terlebihdahulu sebelum memasuki halaman kontak, bisa klik icon <i class="fa fa-user"></i> atau klik tombol login
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="login/login.php" class="btn btn-primary">Login</a>
                </div>
              </div>
            </div>
   </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>