<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact US | RECYCLUS </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="shortcut icon" href="img/recyclus.png" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	
	
	<!--===============================================================================================-->
	
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--===============================================================================================-->
	
	<!--===============================================================================================-->
	
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
                                  
        
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
                     
	<!--===============================================================================================-->
</head><!--===============================================================================================-->
<style>
.feed {
  position: relative;
  text-align: center;
  color: white;
padding-bottom: 20px;
}
.center {
  position: absolute;
  top: 95%;
  left: 45%;
  transform: translate(-50%, -50%);
text-transform: uppercase;
display:block;
color:green;
}
img.free {
  height: 102%;
  width: 100%;
padding-top: 10px;
}
</style>
<script language="javascript" type="text/javascript" >
function validate(){
	{
        alert("Thank you! We will get in touch with you soon");
}
}
</script>
</head>


<body class="bac-col">

	
<form class="form" action="contactform.php" method="POST" onsubmit="return validate()">


	<div class="row">

		<div class="col-lg-6">
                                           <div class="feed">
			<img class="free" src="img/bin.jpg" alt="recycling-image"  >
<div class="center">
<h1 style="font-family: "Times New Roman", Times, serif; "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tell Us </h1>
  <p style="font-size: 20px;font-family: "Times New Roman", Times, serif;">  How We Can Serve You Better.</p>
  </div>
</div>
		</div>

		<div class="col-lg-6" style="padding: 0 0;">
			<div class="container-contact100">

				<div class="wrap-contact100">
					<form class="contact100-form validate-form">
						<span class="contact100-form-title" style="padding-bottom: 0;">
							Conatct Us.

						</span>
						<hr style="background-color: white; height:2px;">
						</hr>




						<div class="wrap-input100 validate-input" data-validate="Please enter your name">
							<input class="input100" type="text" name="name" required placeholder="Full Name">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
							<input class="input100" type="text" name="email" required placeholder="E-mail">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Please enter your phone">
							<input class="input100" type="text" name="contact" required placeholder="Phone">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Please enter your message">
							<textarea class="input100" name="text" required placeholder="Your Message"></textarea>
							<span class="focus-input100"></span>
						</div>

						<div class="container-contact100-form-btn">
							<button  class="contact100-form-btn" name="submit">
								<span >
									<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
									SEND
								</span>

							</button>
							<script>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	
</body>

<footer style="background-color: #00332e;">
<section class="foo">
    <div class='container-fluid'>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <a class="navbar-brand" href="#" style="color: white; margin: 100px 30px"><h1>RECYCLUS</h1></a>
        </div>

        <div class="col-lg-6 col-md-6">

          <a href="https://twitter.com/login?lang=en" style="text-decoration: none; color: white; "><i class="fa fa-twitter fa-3x"></i></a>
          <a href="https://www.instagram.com/" style="text-decoration: none; color: white; margin-left: 20px;" ><i class="fa fa-instagram fa-3x" ></i></a>
          <a href="https://www.facebook.com/" style="text-decoration: none; color: white; margin-left: 20px;"><i class="fa fa-facebook fa-3x" ></i></a>
</div>
    </div>
  </section>
        </section>
                    </footer>
</html>
