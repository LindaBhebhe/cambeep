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
      require_once('../model/getStationery.php');                  
    ?>

    <script type="text/javascript" src="../Controller/controlScript.js"></script>  

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Request Stationery</span>
    </h1>

    
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
          <!-- <table cellspacing="0" cellpadding="0" border="1" style="width:100%; ">
        <tr>
            <td>
                <div style=" height:600px; overflow:auto;">

                  <table cellspacing='0' cellpadding='1' border'1' id="myTable" >

                <thead style='background-color: ; display: block;'>
                  <tr style= 'color:black;' >
                        
                    <th>Date</th>
                    <th>Requester </th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Viewed</th>
                    <th>Respond</th>
                    </tr>
                    </thead> -->
                  <?php
                    //Require('../model/supportFunctions.php');
                      // get_all_reports();
                    
                  ?>
               <div style="text-align: center">
               <form name="requestStationery" method="POST" action = "">

               Select the item to request for:<br>
               <select name="item" id="item"  tabindex="2"  required>
                
                <option value="File A4">File A4</option>
                <option value="Catridge 72A">Catridge 72A</option>
                <option value="A4 Khakhi envelopes">A4 Khakhi envelopes</option>
                <option value="Acknowledgement sheets">Acknowledgement sheets</option>
                <option value="Note books">Note books</option>
                </select><br><br>

                Quantity:<br>
               <input  name="quantity" id="quantity" type="text" tabindex="1"  required><br><br><br>

                <!-- To be approved by:<br>
                <select name="item" id="item"  tabindex="2"  required>
                <option value="bope">S Bope</option>
                <option value="mangoma">P Mangoma</option>
                <option value="Jamu">P Jamu</option>
                <option value="mabaya">J Mabaya</option>
                </select><br><br> -->

               <button name="search" type="submit" id="submit" onclick="return validateStationeryForm()" >Send</button> 
               </form>
               </div>



           
           
            </div>
          </div>
          </div>
  
      
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
