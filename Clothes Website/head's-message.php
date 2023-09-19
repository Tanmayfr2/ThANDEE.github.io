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
<div class="container">
        <div class="row">
        <div class="col-sm-4">
               <img src="assets/images/head .png" class="img-fluid head-mmg">
                </div>
        <div class="col-sm-8">
                <h3 class="heading-about">Head's Message</h3>
            <p class="text-mission-vision">
              Before you start defining business goals, discover the concept of S.M.A.R.T. goal setting. This practice allows you to set clear and reasonable expectations to maximize your chance of achieving a business goal.
<br>
              SMART stands for:
              <br>
              <ul>
              <li>Specific</li>
              <br>
              <li>Measurable</li>
              <br>
              <li>Attainable</li>
              <br>
              <li>Relevant</li>
              <br>
              <li>Timely</li>
            </ul>
<br>
              <b>Specific</b> — “sell more products” is a nice fashion business goal, but it’s hardly detailed. Your goals must
               be as specific as possible. “Sell (X) pairs of shoes in one week” is much better. Details give goals valuable 
               power that helps drive your actions.
              <br>
              <b>Measurable</b> — numbers are essential for your business. Make sure you can evaluate your efforts by setting 
              measurable goals. “Sell 10 items my first month” is a measurable goal. By the end of the month, you can 
              definitely say whether you’ve achieved it.
              <br>
              <b>Attainable</b> — being realistic is an integral part of fashion business success. “Sell 100 items in one week”
               is a goal that can boost your revenue tremendously. But is it realistic? How many items did you sell last week? 
               If it’s eight, then “Sell 10 items in one week” is a more attainable variant.
              <br>
              <b>Relevant</b> — while creating a goal, you should keep the current market conditions in mind. During a 
              recession, selling 100 shoes per week may not be relevant. Meanwhile, selling 100 coats per month mid-summer may
               be impossible.
              <br>
              <b>Timely</b> — each goal should have a deadline. Without it, it’s nearly impossible to measure your success. 
              Define a realistic timeframe for the scope of effort you are planning to provide.
              </p>
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