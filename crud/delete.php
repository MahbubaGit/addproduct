<?php
include 'config.php';
$id = $_GET['id'];
$deletedQuery = "DELETE FROM `crud` WHERE id='$id'";
mysqli_query($conn,$deletedQuery);
 header('location:index.php');