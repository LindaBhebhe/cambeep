<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CamBeep</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
    <?php

	require_once("../model/cambeeplogin.php");							

    ?>
    <script type="text/javascript" src="../Controller/controlScript.js"></script>  

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Camfed Equipment Request System </span>
    </h1>


    <section class="page-section cta">
      <div class="container">
       <div class="row">
           <div class="col-xl-9 mx-auto">
             <!--<div class="cta-inner text-center rounded"> -->
              <div style=" text-align: center;" id= "form">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper"></span>
               </h2>
       
             
          	<form id="contact" action="" method="post">
			<center><h2>Login</h2></center>

			<fieldset>
			    <span id="username_error" class="err"></span>
				<input placeholder="Username" type="text" name ="username" id="username" tabindex="1" value="" required >
			</fieldset><br>

			<fieldset>
			    <span id="password_error" class="err"></span>
				<input placeholder="password" type="password" name ="password" id="password" tabindex="2" value="" required >
			</fieldset><br>
			
			<fieldset>
				<button name="login" type="submit" id="registerSubmit" onclick=" return validateloginjs()" data-submit="...Sending">Submit</button>
			</fieldset><br>
			<a href="passwordIssue.php" style="text-align:center">Forgot Password?</a>
		
		</form>
     
              </div>
            </div>
         </div>
          </div>
      <!-- </div> -->
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">@camfed.org</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
