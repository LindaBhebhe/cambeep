<?php
header("Access-Control-Allow-Origin: *");




//CONNECTING TO THE DATABASE
function getdb(){
$servername = "localhost";
$username = "root";
$password = "";
$db = "cambeep";
//echo "called getDB";
 
try {
  
    $conn = mysqli_connect($servername, $username, $password, $db);
    // echo "Connected successfully"; 
    }

catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}



// Function to get the IT support reports 
function get_all_reports(){
  
    $con = getdb();
    $Sql = "SELECT * FROM support";
    $result = mysqli_query($con, $Sql);  

   
    if (mysqli_num_rows($result)>0 ) {

    	  echo "<div class='table-responsive'>
    	  			<table id='myTable' class='table table-striped table-bordered'>
                         <thead>
                          <th>Date</th>
                          <th>Requester</th>
                          <th>Message</th>
                          <th>Status</th>
                          <th>Viewed</th>
                          <th>Respond</th>
                        </tr></thead><tbody>";
    
 
           echo "<tbody>";  
      while($row = mysqli_fetch_assoc($result)){   
       echo "<tr>
             <td>" . $row['date'] .
             "</td><td>" . $row['requester'] .
             "</td><td>" . $row['message'] .
              "</td><td>" . $row['status']. 
              "</td>
              <td>"
              ?>

              <form name="view" method="GET" action = "viewedUpdate.php">
               <button name="done" type="submit" id="doneBtn" onclick="cancelRequest()" >Done</button> 
               </form>

               <?php  
                 echo "</td>";
                 echo "<td>";
                 ?>

                <form name="respond" method="GET" action = "viewedUpdate.php">
               <button name="respond" type="submit" id="doneBtn" onclick="cancelRequest()" >Respond</button> 
               </form>
               <?php  
                echo "</td>";

}
echo "</tbody>";
mysqli_close($con);                         
     echo "</table></div>";
     
}
 else {
     echo "you have no records";
}
}


// Function to view all the stationery requests
function get_all_stationery_requests(){
  
    $con = getdb();
    $Sql = "SELECT * FROM stationery_requests";
    $result = mysqli_query($con, $Sql);  

   
    if (mysqli_num_rows($result)>0 ) {

    	  echo "<div class='table-responsive'>
    	  			<table id='myTable' class='table table-striped table-bordered'>
                         <thead>
                          <th>Date</th>
                          <th>By</th>
                          <th>Approver</th>
                          <th>Approved</th>
                          <th>Item</th>
                          <th>Description</th>
                          <th>N#</th>
                          <th>Rem</th>
                          <th>Clear</th>
                        </tr></thead><tbody>";
    
 
           echo "<tbody>";  
          while($row = mysqli_fetch_assoc($result)){   
        echo "<tr>
                   <td>" . $row['date'] .
              "</td><td>" . $row['requester'] .
              "</td><td>" . $row['approver'] .
              "</td><td>" . $row['approved'] .
              "</td><td>" . $row['item'] .
              "</td><td>" . $row['description'] .
              "</td><td>" . $row['quantity'] .
              "</td>
              <td>"
              ?>

              <form name="rem" method="GET" action = "rem.php">
               <input  name="rem" id="rem" type="text" tabindex="1"  required>
               </form>

               <?php  
                 echo "</td>";
                 echo "<td>";
                 ?>

                <form name="clear" method="GET" action = "clear.php">
               <button name="clear" type="submit" id="clearBtn" onclick="clear()" >Clear</button> 
               </form>
               <?php  
                echo "</td>";

}
echo "</tbody>";
mysqli_close($con);                         
     echo "</table></div>";
     
}
 else {
     echo "you have no records";
}
}




?>
