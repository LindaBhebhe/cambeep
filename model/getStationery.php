

<?php

header("Access-Control-Allow-Origin: *");
//echo "in the sendEquip php file";

if(isset($_REQUEST['item'])){

   $con= mysqli_connect("localhost","root","","cambeep");


    if($con){ 
    echo("CONNECTED") ;
   // session_start();
   // $user = $_SESSION['username'];
    $user = "Bhebhe";
    $date  = date('Y/m/d H:i:s');
    $item = $_REQUEST['item'];
    $quantity = $_REQUEST['quantity'];
    $returnDate = $_REQUEST['returnDate'];
    $collectionDate = $_REQUEST['collectionDate'];
    $item_id = 1;
    $status ="pending";


    INSERT INTO stationery_out(item_id, request_date, equip_id, quantity, request_by, approved_by, collection_by) VALUES (,'$date',[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
    $sql = "INSERT INTO borrowed_equipment (item_id,borrowed_by,request_date,collection_date, return_date,status)  values('$item_id','$user','$date','$collectionDate','$returnDate','$status')";

    $result = mysqli_query($con, $sql); 
    echo("BEFORE IF");

    if($result){
      echo "successful";
    }
   }
 }
 ?>

