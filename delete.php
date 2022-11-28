<?php

$servername = "localhost";
$username = "serwer153230_patryk";
$password = "&xe7cnTQ";
$db = "serwer153230_patryk";

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

