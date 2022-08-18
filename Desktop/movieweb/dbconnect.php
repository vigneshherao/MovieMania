<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "signup";


    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn){
        
        die("Eror".mysqli_connect_error());
    }else{
        echo "completed!";
    }
    

?>