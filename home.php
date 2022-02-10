<?php
$username = "admin";
$pass = "admin";
session_start();

if (isset($_SESSION['username'])) {

    echo "<h1>Hello " . $_SESSION['username']."</h1><br>";
    echo "<a href='/web/crud/index.php'>Products</a><br>";
    echo "<br><a href='logout.php'><input type='button' value='Logout' name='logout'</a><br>";
    
   
} 
else {
    if(isset($_POST['username'])){
    if ($_POST['username'] == $username && $_POST['password'] == $pass) {
        $_SESSION['username'] = $username;
        echo "<script>location.href='home.php'</script>";
    }
     else {
        echo "<script>alert('username & password are incorrect!!!')</script>";
        echo "<script>location.href='login.html'</script>";
     }
    
    }
    else{
        echo "<script>alert('Do not access from URL!!!')</script>";
        echo "<script>location.href='login.html'</script>";

    }

}

?>