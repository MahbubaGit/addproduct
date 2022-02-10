<?php
     include 'config.php';
        $r_username = $_POST['username'];
        $r_email = $_POST['email'];
        $r_mobile = $_POST['mobile'];
        $r_pass = $_POST['pass'];
        $r_conpass = $_POST['conpass'];
        $r_address = $_POST['address'];
        
 $username_pattern   = "/^[a-zA-Z .]+$/";
// $Email_pattern      = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
$Mobile_pattern     = "/(\+88)?-?01[3-9]\d{8}/";
// $pass_pattern       = "/((?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[@#$%&])).{6,20}/";



 $duplicate_username= mysqli_query($conn,"SELECT * FROM `register` WHERE username='$r_username'");
 
 if(mysqli_num_rows($duplicate_username)>0){
    echo"<script>alert('Username already exist!!!')</script>";
    echo"<script> location.href='register.html'</script>";
 }

 else if(!preg_match($username_pattern,$r_username)) {

      echo "<script>alert('use only Alphabet!!')</script>";
    echo "<script>location.href='register.html'</script>";
} 


//  else if(!preg_match($Email_pattern,$r_Email)){
 
//     echo "<script>alert('use a valid email address!!')</script>";
//     echo "<script>location.href='register.html'</script>";
// } 

else if(!preg_match($Mobile_pattern,$r_mobile)){
    echo"<script>alert('Invalid mobile number!!!')</script>";
    echo"<script> location.href='register.html' </script>";
 }



// else if(!preg_match($pass_pattern,$r_pass)){

//     echo "<script>alert('1digit,lower case,upper case,special char(6-20)!!')</script>";
//     echo "<script>location.href='register.html'</script>";
// }


else if($r_pass !== $r_conpass){

    echo "<script>alert('pass & conpass are not matched!!')</script>";
    echo "<script>location.href='register.html'</script>";
}

else{


 $insert_query = "INSERT INTO `register`( `username`, `Email`, `Mobile`, `pass`, `Address`) VALUES ('$r_username','$r_email',' $r_mobile','$r_pass','$r_address')";

 if(!mysqli_query($conn, $insert_query)){
     die("Not inserted!!");
 }
   else{

    echo "<script>alert('Registered !!')</script>";
    echo "<script>location.href='login.html'</script>";

   }
}
 