<?php

$servername = "localhost";
$username = "testtask12";
$password = "Patrykauto77";
$db = "testtask12";

$conn = new mysqli($servername, $username, $password, $db);

if(isset($_POST['but_delete'])){

    if(isset($_POST['delete'])){
      foreach($_POST['delete'] as $deleteid){
  
        $deleteUser = "DELETE from product_main_information WHERE SKU='$deleteid'";
        mysqli_query($conn,$deleteUser);
        header("Location: index.php");
      }
    } else {
        header("Location: index.php");
    }
   
  }


?>

