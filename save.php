<?php
$servername = "localhost";
$username = "serwer153230_patryk";
$password = "&xe7cnTQ";
$db = "serwer153230_patryk";

$conn = new mysqli($servername, $username, $password, $db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Add</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="cont mr_x_auto">
	<header>
		<h1>Error information</h1>
        <hr>
	</header>
	<article class="error_notification grid">
		<?php


$check = mysqli_query($conn, "SELECT * FROM product_main_information WHERE SKU = '". $_POST['sku']."'");
if(mysqli_num_rows($check)) {
	echo 'This SKU is already exist!';
	echo '<br>';
	echo '<button onclick="history.back()">Go Back</button>';
	
	} else {
		$sku=$_POST["sku"];
		$name=$_POST["name"];
		$price=$_POST["price"];
	if (empty($_POST["height"]) && empty($_POST["width"]) && empty($_POST["lenght"]) && empty($_POST["weight"])) {
		
		$dvd_size=$_POST["size"];
		$wynik=mysqli_query($conn, "INSERT INTO product_main_information (SKU, Name, Price, specific_attribute) VALUES ('$sku', '$name', '$price', 'Size: $dvd_size MB')");
	
	} else if (empty($_POST["size"]) && empty($_POST["weight"])) {
		$furniture_height=$_POST["height"];
		$furniture_width=$_POST["width"];
		$furniture_lenght=$_POST["lenght"];
		$wynik=mysqli_query($conn, "INSERT INTO product_main_information (SKU, Name, Price, specific_attribute) VALUES ('$sku', '$name', '$price', 'Dimension: $furniture_height x $furniture_width x $furniture_lenght')");
	} else if(empty($_POST["height"]) && empty($_POST["width"]) && empty($_POST["lenght"]) && empty($_POST["size"])) {
		$book_weight=$_POST["weight"];
		$wynik=mysqli_query($conn, "INSERT INTO product_main_information (SKU, Name, Price, specific_attribute) VALUES ('$sku', '$name', '$price', 'Weight: $book_weight KG')");
	} 
		//  $_SESSION['details']=true; //you set a session variable to true when query runs the first time.
		header('Location: ./index.php');  
	}
?>

	</article>
	<footer >
		<hr>
		<p>Scandiweb Test assignment</p>
	</footer>
	
</body>
</html>
