<?php
header("Access-Control-Allow-Origin: *");

if(isset($_REQUEST['username'])){
   $con= mysqli_connect("localhost","id3954276_bhebhe","secure","id3954276_cambeep");
    if($con){
        $username= $_REQUEST["username"];
        $password= $_REQUEST["passwd"]; 

        $sql ="SELECT * FROM users WHERE username='$username'";
        if ($username) {
            echo "successful";
        }
        
        
        $result=mysqli_query($con,$sql);
        if($result){
            $row =mysqli_fetch_assoc($result);
            $username=$row['username'];
            $passwd = $row['password'];
            if(password_verify($password, $passwd)){         
                echo "successful";    
            }
            else {
                echo " an error has occured";
            }    
        }
        else{
            echo "No results found";
        } 
    }
    else{
        echo "failed to establish connection";
    }
}
    ?>
