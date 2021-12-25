<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/market.css" />

    <title>MyCreep | The Best NFT Trading Website</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">MyCreep</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Market</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron  -->
    <!-- <section class="jumbotron text-center">
      <img src="img/Profile.jpg" alt="Sofyan Adi Saputra" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead color-white">Student | Gamer</p>
    </section> -->
     <!-- Akhir Jumbotron --> 

    <!-- Place -->
    <section id="place">
     <div class="container mt-5">
      <div class="row">
       <div class="col">
        <h1>Market Place</h1>
        <h2>Start your own MyCreep collection</h2>
       </div>
      </div>
    <!-- Input -->
      <div class="input">
        <input type="text" name="search" class="w100" placeholder="Search">
        <input type="hidden" name="page" value="2">
        <input type="hidden" name="loading" value="0">                    
      </div>  
      </section>
      <!-- Akhir Place -->

    <!-- Card List -->
    <section id="listcard">
  <div class="container">
    <div class="row">
       <?php
          include("config.php");
          $sql = "SELECT product_name,product_price,network,product_status,currency,link_product FROM tb_product";
          $hasil = mysqli_query($conn, $sql);
          while ($data = mysqli_fetch_array($hasil)) {
        ?>
      <div class="col-3">
        <div class="card">
          <img src="img/team6.png" class="card-img-top" alt="card1">
            <div class="card-body">
              <h3 class="card-title"><?php echo '<font color="white">' . $data['product_name'] . '</font>'?></h3>
            </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo '<font color="white">' . $data['product_price']." ".$data['currency'] .'</font>'?></li>
                <li class="list-group-item"><?php echo '<font color="white">' . $data['network'] . '</font>'?></li>
                <li class="list-group-item"><?php echo '<font color="white">' . $data['product_status'] . '</font>'?></li>
              </ul>
          <button type="submit" class="btn" href="<?php $data['link_product']?>">BUY</button>
        </div>
      </div>
      <?php 
     }
    ?>
    </div>
  </div>
</section>
    <!-- Akhir Card List -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pt-3 pb-2 mt-5"> 
      <p> Copyright &copy; 2021 - MyCreep</p>
    </footer>
    <!-- Akhir Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
