<?php
  include 'config.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_FILES['image'];
  
  $imageLocation = $_FILES['image']['tmp_name'];
  $imageName = $_FILES['image']['name'];
  $image_des = "image" . $imageName;
  move_uploaded_file($imageLocation, $image_des);
  
  
  $updateQuery = "UPDATE `crud` SET `name`='$name',`price`='$price',`image`='$image_des' WHERE id='$id'";
  
  if (mysqli_query($conn, $updateQuery)) {
  
      echo "<script>alert('updated!!!')</script>";
      echo "<script>location.href='index.php'</script>";
  }else{
    echo "<script>alert('not updated!!!')</script>";
  }