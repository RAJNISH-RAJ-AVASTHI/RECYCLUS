<!DOCTYPE html>
<html>
<head>
<title>SELLER | RECYCLUS  </title>

<?php  include 'links/links.php' ?>
<?php  include 'css/sell.php' ?>


    
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">RECYCLUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto"style="float: right;">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us.php">Contact us</a>
            </li> 
    </ul>
  </div>  
</nav>
<br>
	
	

            <br/><br/><br/><br/><br/>

<div class="container register">
	
	<div class="row bg-success">
		<div class="col-md-6 register-left" >
			<h3>seller's counter </h3>
			<img src="img/wastes.jpg" class="center" alt="SELL YOUR PRODUCT" style="margin-left: auto;
  margin-right: auto;display: block;" width="100%" height="50%">
			<p style="font-size: 20px;">Please fill all details carefully.</p>
			<a href="display.php" >Check Form</a>
			</div>
<div class="col-lg-6 register-right">
	<div class="tab-content" id="myTabcontent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" arial-labelledby="home-tab">
			<h1 class="register-heading">ENTER YOUR PRODUCT DETAILS </h1>
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<div class="row register-form">
					<div class="col-md-6 ">
						<div class="form-group">
							<input type="text"  class="form-control" placeholder="Enter your  name *" name="name" value="" required/>
						</div>
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Email *" name="email" value="" required/>
						</div>
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Contact Number *" name="contact" value="" required/>
						</div>
						
<div class="form-group">
							<input type="text"  class="form-control" placeholder="City *" name="city" value="" required/>
						</div>
						</div>
						<div class="col-md-6 ">
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Address  *" name="address" value="" required/>
						</div>
					
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Item Name *" name="item" value="" required/>
						</div>
						
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Price *" name="price" value="" required/>
						</div>
						
<div class="form-group">
							<input type="file"  class="form-control" placeholder="Upload image *" name="photo" value="" required/>
						</div>
						</div>
						<div class="col-md-8 ">
<div class="form-group">
							<input type="submit"  class="btnRegister" placeholder="Upload image *" name="submit" value="Register" required/>
						</div>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<br/><br/><br/><br/><br/>
<footer style="background-color: #00332e;">
	<section id="footer">
		<div class="container-fluid">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-6 col-sm-4 col-md-4">
					<h3 style=" color:white;">Information</h3>
					<ul class="list-unstyled quick-links">
						<li><a href="about_us.php" target="_self" style="text-decoration: none; color:white;"><h4>About Us</h4></a></li>
						<li> <a href="contact_us.php" target="_self" style="text-decoration: none; color:white;" ><h4>Contact Us</h4></a></li>
						
					</ul>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-4">
                                    <h3 style=" color:white;">My Account</h3>
					<ul class="list-unstyled quick-links">
						<li>  <a   href="login.php" target="_self" style="text-decoration: none;color:white; "><h4>Login</h4></a></li>
						<li><a href="signup.php" style="text-decoration: none; color:white;" > <h4>Sign up</h4></a></li>
						
					</ul>
				</div>
		     <div class="col-xs-6 col-sm-4 col-md-4">
					
		      <ul class="list-unstyled quick-links">
                                            <li><h3 style=" color:white;">  Contact Us</h3></li>
                                            <li><h4 style=" color:white;">contact: +91 9608456231</h4></li><br>

                                         <a href="https://twitter.com/login?lang=en" style="text-decoration: none; color: white; "><i class="fab fa-twitter fa-3x"></i></a>
        <a href="https://www.instagram.com/" style="text-decoration: none; color: white; margin-left: 20px;padding-top: 20px;" ><i class="fab fa-instagram fa-3x" ></i></a>
         <a href="https://www.facebook.com/" style="text-decoration: none; color: white; margin-left: 20px;margin-top: 20px;"><i class="fab fa-facebook fa-3x" ></i></a>
						</ul>
				</div>
			</div>
			
                </div>
        </section>
                    </footer>   
</body>


</html>