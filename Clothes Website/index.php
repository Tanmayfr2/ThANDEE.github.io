<?php
session_start();
if(empty($_SESSION['id'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ThANDEE : THE FASHION HUB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--css file-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!--    external css-->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

<!--    fontawesome css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-3.7.0.min.js"></script>

  </head>    
  <body>
<!--    start header-->
    <?php
    include("header.php");
    ?>
<!--   end   start header-->
<!--        start cauresel-->
    <div class="carousel-inner">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-item active">
          <img src="assets/images/c1.png" class="d-block w-100" alt="First Slide">
       </div>
        <div class="carousel-item">
          <img src="assets/images/c2.png" class="d-block w-100" alt="Second Slide">
        </div>
        <div class="carousel-item">
          <img src="assets/images/c3.png" class="d-block w-100" alt="Third Slide">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
      </button>
    </div>
<!--end-->

    <div class="container-fluid mt-4">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h2>Welcome to ThANDEE : THE FASHION HUB</h2>
            <p>According to the editorial policy of Fashion Theory: The Journal of Dress, Body & Culture, fashion is defined
              as "the cultural construction of the embodied identity." As such, it encompasses all forms of self-fashioning,
              including street styles, as well as so-called high fashion created by designers and couturiers. Fashion also 
              alludes to the way in which things are made; to fashion something is to make it in a particular form. Most 
              commonly, fashion is defined as the prevailing style of dress or behavior at any given time, with the strong 
              implication that fashion is characterized by change. As Shakespeare wrote, "The fashion wears out more 
              apparel than the man." There are fashions in furniture, automobiles and other objects, as well as in clothing
              , although greater attention is paid to sartorial fashion, probably because clothing has such an intimate 
              relationship with the physical body and, by extension, the personal identity of the individual.
            </p>
          </div>
          <div class="col-sm-4">
            <div class="outer-right">
              <img class="img-fluid" src="assets/images/stater.png">
              <h4>ThANDEE</h4>
              <h5>THE FASHION HUB</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-4">
      <div class="container">
        <div class="row">
          <div class="col-sm-4"> 
            <marquee behavior="alternate">
              <img src="assets/images/ball_rotate1.png">
              <img src="assets/images/ball_rotate1.png">
            </marquee>
            <div class="mrq">    
              <b>FASHION</b>
              <h3>Mens</h3>
              <a href="mens.php"><button class="get-btn">BUY NOW</button></a>
            </div>
          </div> 
          <div class="col-sm-4"> 
            <marquee behavior="alternate">
              <img src="assets/images/ball_rotate2.png">
              <img src="assets/images/ball_rotate2.png">
            </marquee>
              <div class="mrq2">    
               <b>FASHION</b>
               <h3>Womens</h3>
                <a href="womens.php"><button class="get-btn">BUY NOW</button></a>
              </div>
          </div> 
          <div class="col-sm-4"> 
            <marquee behavior="alternate">
              <img src="assets/images/ball_rotate3.png">
              <img src="assets/images/ball_rotate3.png">
            </marquee>
              <div class="mrq3">    
               <b>FASHION</b>
               <h3>Kids</h3>
                <a href="kids.php"><button class="get-btn">BUY NOW</button></a>
              </div>
          </div> 
        </div>
      </div>
    </div>

<!-- footer-->
    <div class="container-fluid footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <span>Designed by Tanmay Das 10A</span>
              </div>
              <div class="col-sm-6">
                <span>© 2023. All Rights Reserved.</span>
              </div>
           </div> 
          </div>
          <div class="col-sm-6">
           <div class="row">
              <div class="col-sm-3">
                <span>About us</span>
               </div>
               <div class="col-sm-4">
                  <span>Way To Order</span>
               </div>
               <div class="col-sm-2">
                  <span>Home</span>
               </div>
               <div class="col-sm-3">
                  <span>Contact us</span>
               </div>
            </div>  
          </div>
        </div>
      </div>
    </div>

<!--        js file-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
      window.onscroll = function(){myFunction()};
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;
      function myFunction(){
        if(window.pageYOffset >= sticky){
          navbar.classList.add("sticky");
        }
        else{
          navbar.classList.remove("sticky");
        }
      }
    </script>

  </body>
</html>