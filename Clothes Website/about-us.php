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
    <div class="col-sm-8">
            <div class="row">
        <div class="col-sm-6">
                <h3 class="heading-about">ABOUT US</h3>
                <p>
                  Here at ThANDEE we pride ourselves on delivering good quality and stylish clothing for men,
                  women and Kids. For the last 5 years this is what we’ve been striving for! So that we can offer our customers
                  the best at the best prices, we are partners with several top brands. Our relationship with over 2,500 
                  different European brands allows us to offer our customers items 40 to 70% cheaper than our competitors.
                  <br>
                  ThANDEE sells brand-name items for every taste: dresses, jeans, military-style, leather wear…We 
                  understand that the key to our success is a happy and satisfied customer. This is why we want your shopping 
                  experience on our site to be pleasant and straightforward.
                </p>
                </div>
        <div class="col-sm-6">
                <h3 class="heading-about">MOTTO</h3>
                The fashion design industry has one purpose: to make people look good. It is a pretty broad category, covering 
                clothing and accessories. 
                <br>
                The market is quite lucrative. A Statista report shows that 2022 revenue projections are an impressive $0.99 
                trillion. An analyst on the report talks about an interesting emerging trend. Players are integrating shopping 
                functionalities and content displays on social media.
                <br>
                Customers are also moving to mobile as opposed to using desktop devices. That necessitates ensuring a seamless 
                browsing and checkout experience on mobile. You will understand why this is important later.
          </div>
        </div>
        <img class="img-fluid img-about-style" src="assets/images/1-about.jpg">
            </div>
    <div class="col-sm-4">
            <h3 class="heading-about">OUR AIMS & OBJECTIVES</h3>
            Fashion and Textiles aims to advance knowledge and to seek new perspectives in the fashion and textiles industry 
            worldwide. We welcome original research articles, reviews, case studies, book reviews and letters to the editor.
            <br>
            The scope of the journal includes the following four technical research divisions:
            <br>
            <b>Textile Science and Technology</b>: Textile Material Science and Technology; Dyeing and Finishing; Smart and 
            Intelligent Textiles
            <br>
            <b>Clothing Science and Technology</b>:  Physiology of Clothing/Textile Products; Protective clothing ; Smart and 
            Intelligent clothing; Sportswear; Mass customization ; Apparel manufacturing
            <br>
            <b>Economics of Clothing and Textiles/Fashion Business</b>: Management of the Clothing and Textiles Industry; 
            Merchandising; Retailing; Fashion Marketing; Consumer Behavior; Socio-psychology of Fashion
            <br>
            <b>Fashion Design and Cultural Study on Fashion</b>: Aesthetic Aspects of Fashion Product or Design Process; 
            Textiles/Clothing/Fashion Design; Fashion Trend; History of Fashion; Costume or Dress; Fashion Theory; Fashion 
            journalism; Fashion exhibition.
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