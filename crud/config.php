<?php
    $serverName="localhost";
    $username="root";
    $password="";
    $dbName="web";
    $conn= mysqli_connect($serverName,$username,$password,$dbName);

    if(!$conn){
         die("Connection Failed :" . mysql_connect_error());

    }
    else{
       // echo "<script>alert('DB Conneted!!')</script>";
    }