<?php
     include 'config.php';
     $l_username = $_POST['username'];
     $l_pass = $_POST['pass'];

     $result =  mysqli_query($conn,"SELECT * FROM `register` WHERE username='$l_username'And pass='$l_pass'");
      
     if(mysqli_num_rows($result)){
         // valid user
         session_start();
         $_SESSION['username'] = $l_username;
         echo "<script>location.href='home.php'</script>";
     }
     else {
        echo"<script>alert('Incorrect Username and Password!!')</script>";
        echo "<script>location.href='login.html'</script>";
     }