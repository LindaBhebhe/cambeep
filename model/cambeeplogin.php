<?php
header("Access-Control-Allow-Origin: *");
#echo "in the login php file";

if(isset($_REQUEST['username'])){
   $con= mysqli_connect("localhost","root","","cambeep");
    if($con){
        #echo "connected to db";
        $username= $_REQUEST["username"];
        $password= $_REQUEST["password"]; 

        $sql ="SELECT * FROM users WHERE username='$username'";
        if ($username) {
            #echo "successfully got username";
        }
        
        
        $result=mysqli_query($con,$sql);
        if($result){
            #echo "got some db results";
            $row =mysqli_fetch_assoc($result);
            $username=$row['username'];
            $passwd = $row['password'];
            #$role = $row['role'];

            if($username){
            /*if(password_verify($password, $passwd)){ 
           
                if($role.IT Admin){
                    echo "successful1";
                }
                elseif ($role == NO Staff) {
                    echo "successful2";
                }
                elseif ($role == Admin ) {
                    echo "successful3";
                }*/
                echo "successful2";
                session_start();
                $_SESSION['username']= $row['username'];
                $_SESSION['password']=  $row['password'];  
                
             }
           else {
                echo " error getting the password";
             }    
        }
        else{
            echo "No db results found";
        } 
    }
    else{
        echo "failed to establish connection";
    }
}
    ?>
