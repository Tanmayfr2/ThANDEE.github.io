<?php
session_start();
if(!empty($_SESSION['id'])){
    header("location:index.php");
}
?>
<?php
// connection db
$host = "localhost";
$user = "root";
$pass = "";
$db = "ThANDEE";
$conn = mysqli_connect($host,$user,$pass,$db);
// register account 
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email)){
        $error = "Enter Email Is Empty";
    }
    elseif(empty($password)){
        $error = "Enter Password Is Empty";
    }
    else{
        $query = mysqli_query($conn,"SELECT * FROM user_account Where email='$email' and password='$password'");
//      insert data 
        if(mysqli_num_rows($query)>0){
            $row=mysqli_fetch_assoc($query);
//           session create 
            unset($row['password']);
            $_SESSION = $row;
            $success = "User Login Successfully";
//              goto login page
            header("Refresh:3,url=index.php");
        }
        else{
            $error = "Something Went Wrong";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThANDEE : LOGIN</title>
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
        <div class="col-sm-6 offset-sm-3">
            <div class="form-outer">
                <h3 class="log">LOGIN TO ACCESS ALL PAGES.</h3>
                <?php
                if(isset($error)){
                    echo '<div class="text-danger">'.$error.'</div>';
                }
                if(isset($success)){
                    echo '<div class="text-success">'.$success.'</div>';
                }
                ?>
                <form method="post">
                <input type="email" name="email" value="<?php if(!empty($email)){ echo $email;} ?>" class="form-control mt-2" 
                placeholder="Enter Your Email">
                <input type="password" name="password" value="<?php if(!empty($password)){ echo $password;} ?>" 
                class="form-control mt-2" placeholder="Enter Your Password">
                    <input type="submit" name="login" value="login" class="mt-3 btn btn-primary">
                    <a  class="btn btn-dark mt-3" href="signup.php">Go To Sign up</a>
                </form>
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