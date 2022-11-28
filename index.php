<?php

$servername = "localhost";
$username = "serwer153230_patryk";
$password = "&xe7cnTQ";
$db = "serwer153230_patryk";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product List</title>
</head>
<body class="cont mr_x_auto">
<header>
	<h1>Product List</h1>
    <hr>
</header>
<article >
    <form class="product_list_container grid relative" method="post" action="delete.php">
	<?php

    $db=mysqli_query($conn, "SELECT * FROM `product_main_information`");
			while ($row = $db->fetch_assoc()) {
		?>
			<div class="single_product_information_container relative">
				<div class="single_product_information absolute">
                
                    <input type="checkbox" name="delete[]" value="<?= $row['SKU']; ?>" class="delete-checkbox">
                    
				</div>
				<div class="single_product_information">
					<p><?php echo $row['SKU']; ?></p>
				</div>
				<div class="single_product_information">
					<p><?php echo $row['Name']; ?></p>
				</div>
				<div class="single_product_information">
					<p><?php echo $row['Price']." $"; ?></p>
				</div>
				<div class="single_product_information">
					<p><?php echo $row['specific_attribute']; ?></p>
				</div>
			</div>

            <?php 
                        }
            ?>
            <div class="product_action_container absolute">
                <a href="main.php" id="ADD">ADD</a>
                <a><input type="submit" name="but_delete" id="delete-product-btn" value="MASS DELETE"></a>
            </div>
    </form>
</article>
<footer>
    <hr>
    <p>Scandiweb Test assignment</p>
</footer>
</body>
</html>