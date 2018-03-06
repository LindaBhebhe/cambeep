<?php

//CONNECTING TO THE DATABASE
function getdb(){
$servername = "localhost";
$username = "root";
$password = "";
$db = "mwmidsemproject";
 
try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }

catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}


//LOADING THE DASHBOARD TABLE
function get_all_records(){
    $con = getdb();
    $Sql = "SELECT * FROM transactions";
    $result = mysqli_query($con, $Sql);  
 
 
    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>Transaction ID</th>
                          <th>Date</th>
                          <th>Sender</th>
                          <th>Receiver</th>
                          <th>Network</th>
                          <th>Amount</th>
                        </tr></thead><tbody>";
 
 
     while($row = mysqli_fetch_assoc($result)) {
 
         echo "<tr><td>" . $row['id']."</td>
                   <td>" . $row['date']."</td>
                   <td>" . $row['sender']."</td>
                   <td>" . $row['receiver']."</td>
                   <td>" . $row['network']."</td>
                   <td>" . $row['amount']."</td></tr>";        
     }
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
}




?>