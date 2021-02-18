<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/recyclus.png" />

        <title>Login | RECYCLUS </title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>img{
            float:left;
            margin-bottom: 20%;
            }
            
        </style>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container" id="content">
             
        
            
               
<div class="container-fluid decor_bg" id="login-panel">
<img src="img/signup.jpg" class="img-responsive" alt="Login" width="365" height="300">
                
<div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-5">
                        <div class="panel panel-success" >
                            <div class="panel-heading">
                               <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Don't have an account? <a href="signup.php">Register</a></i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <?php echo @$_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p><a href="reset.php"> Forgot Password? </a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       
    </body>
    <?php include "includes/footer.php"; ?>
</html>