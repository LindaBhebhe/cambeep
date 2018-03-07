

<?php
header("Access-Control-Allow-Origin: *");
echo "in the sendSupport php file";

if(isset($_REQUEST['message'])){
   $con= mysqli_connect("localhost","root","","cambeep");
    if($con){
        #echo "connected to db";
    session_start();
    $requester = $_SESSION['username'];
    echo $requester;
    $date  = date('Y/m/d H:i:s');
    echo $date;
    $message = $_REQUEST['message'];
    $status = $_REQUEST['status'];

    $Sql = "INSERT INTO support(date, requester, message, status) VALUES ('$date','$requester','$message','$status')";
    $result = mysqli_query($con, $Sql);  

   
    #if (mysqli_num_rows($result)>0 ) {
    if($result){
      echo "successful";
    }
    }
  }

    ?>
