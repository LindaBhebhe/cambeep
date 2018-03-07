<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cambeep</title>

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

    require_once("../model/supportFunctions.php");              

    ?>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Camfed Equipment Request System </span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Cambeep</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="stationery.html">Request Stationery</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="ITequipment.html">Request IT Equipment</a>
            </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="ITsupport.html">Request IT Support</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
           <!--  <div class="cta-inner text-center rounded"> -->

              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Contact IT for support</span>
                </h2>

               <form id="login" action="" method="post">      
              <fieldset> 
                Enter your message: <br>
                <textarea rows="4" cols="50"  name="msg" id="message" placeholder="Enter your message " required>  
                 </textarea>
              </fieldset>
              <br>

              

              <fieldset>
               Request by: <br>
                <input  name="requester" id="requestBy" type="text" tabindex="2"  required>
                <span style="color:red" class="error" id="requesterError">    
              </fieldset>
              <br>

              <fieldset>
               How urgent?: <br>
                <select name="status" id="request_status"  tabindex="2"  required>
                <option value="veryUrgent">Very urgent</option>
                <option value="urgent">Urgent</option>
                <option value="notUrgent">Not urgent</option>
                </select>

                <span style="color:red" class="error" id="requesterError">    
              </fieldset>
              <br>
              
              <fieldset>
                <button name="login" type="submit" id="loginSubmit" onclick="support_requests()" >Send</button>
              </fieldset>

             </form><br>
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