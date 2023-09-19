<div class="container-fluid top-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-3">
        <a class="nav-link" href="index.php">
          <img class="img-fluid logo" src="assets/images/logo.png" alt="logo image">
        </a>
        </div>
        <div class="col-sm-4 col-5">
          <h1 class="logo-head">ThANDEE</h1>
        </div>
        <div class="col-sm-4 col-4">
          <div class="ico-icon">
            <?php
            if(!empty($_SESSION['id'])){
              echo "<span class='wclm text-light btn-success p-2'> WELCOME <b>".$_SESSION['name']."</b></span>";
            }
            else{
              ?>
            <a class="btn btn-primary" href="login.php">Login</a>
            <a class="btn btn-primary" href="signup.php">Sign Up</a>
            <?php
            }
            ?>

        <a target="_blank" href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f fa-2x"></i></a>
        <a target="_blank" href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJs
        YW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fa-brands fa-twitter fa-2x"></i></a>
         <a target="_blank" href="https://www.instagram.com/accounts/login/"><i class="fa-brands fa-instagram fa-2x"></i></a>
      </div>
        </div>
      </div>
    </div>
  </div>

<!--        strat navbar-->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-theme">
    <a href="#" class="navbar-brand">
      <img class="img-fluid brand-logo" src="assets/images/logo.png" alt="logo image">
    </a>
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbar
        Text" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars text-light"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about-us.php">About Us</a></li>
              <li><a class="dropdown-item" href="head's-message.php">Head's Message</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="latest.php">Latest</a></li>
              <li><a class="dropdown-item" href="trending.php">Trending</a></li>
              <li><a class="dropdown-item" href="popular.php">Popular</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Best for You
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="mens.php">Mens</a></li>
              <li><a class="dropdown-item" href="womens.php">Womens</a></li>
              <li><a class="dropdown-item" href="kids.php">Kids</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.php">Contact us</a>
          </li>
          <?php
          if(!empty($_SESSION['id'])){
          ?>
          <li class="nav-item">
            <a class="nav-link bg-danger text-light" href="logout.php?logout=true">Logout</a>
          </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
<!--        end strat navbar-->
