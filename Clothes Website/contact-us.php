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
<div class="container mt-4">
        <div class="row">
        <div class="col-sm-8">
            <h4>Address Map</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.706066976316!2d77.06397319999999!3d28.638570
            3!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04e438a16fe3%3A0x89bb645b689f1f94!2sKamal%20Public%20Senior%
            20Secondary%20School!5e0!3m2!1sen!2sin!4v1688585357905!5m2!1sen!2sin" width="600" height="450" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
        <div class="col-sm-4">
            <h5>Address:</h5>
            <span>near Parmarth Apartments, D Block, Vikaspuri, New Delhi, Delhi 110018</span><br>
            <a target="_blank" href="https://www.facebook.com/login/"><i class="fab fa-facebook-f fa-2x"></i></a>
                  <a target="_blank" href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJs
                  YW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fab fa-twitter fa-2x"></i></a>
                  <a target="_blank" href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram fa-2x"></i></a>
    </div>
    </div>
        </div>
        <br>
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