<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product Add</title>
</head>
<body>
    <header class="cont mr_x_auto">
        <h1>Product Add</h1>
        <hr>
    </header>
    <article class="main cont mr_x_auto">
        <form id="product_form" class="relative" method="post" action="save.php" name="product_form" onsubmit="return validateForm()">

        <div class="main_form grid">
            <div class="main_form__labels grid">
                <label>SKU</label>
                <label>Name</label>
                <label>Price ($)</label>
            </div>
            <div class="main_form__inputs grid">
                <input type="text" name="sku" id="sku" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required">
                <input type="text" name="name" id="name" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required">
                <input type="number" name="price" id="price "maxlength="30" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required">
            </div>                    
        </div>
        <div class="type_switcher grid">
            <div class="type_switcher__labels">
                <label>Type Switcher</label>
            </div>
            <div class="type_switcher__inputs">
                <select id="productType" class="name_of_category" onchange="showDiv(this)" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required">
                    <option disabled selected value> -- Type Switcher -- </option>
                    <option value="0" id="DVD"  data-id="0">DVD</option>
                    <option value="1" id="Furniture"  data-id="1">Furniture</option>
                    <option value="2" id="Book"  data-id="2">Book</option>
                </select>
            </div>
            
        </div>

        <div id="form1" class="grid validation1">
            <div class="form_labels grid">
                <label>Size (MB)</label>
            </div>
            <div class="form_inputs grid">
                <input type="number" name="size" id="size valid" >
            </div>
            <strong>*Please enter the size of the DVD in MB.*</strong>
        </div>
            
        <div id="form2" class="grid validation2">
            <div class="form_labels grid">
                <label>Height (CM)</label>
                <label>Width (CM)</label>
                <label>Lenght (CM)</label>
            </div>
            <div class="form_inputs grid">
                <input type="number" name="height" id="height valid">
                <input type="number" name="width" id="width valid">        
                <input type="number" name="lenght" id="lenght valid">
            </div>
            <strong>*Please enter the dimensions of the furniture.<br>Data will be displayed in HxWxL format.*</strong>
        </div>

        <div id="form3" class="grid validation3">
            <div class="form_labels grid">
                <label>Weight (KG)</label>
            </div>
            <div class="form_inputs grid">
                <input type="number" name="weight" id="weight valid">
            </div>
            <strong>Please enter weight of the book in KG.</strong>
        </div>

        <div class="adding_products_buttons absolute">
            <!-- <button type="submit">SAVE</button> -->
            <a><input type="submit" value="SAVE"></a>
            <a><input onclick="history.back()" value="CANCEL"></a>
            <!-- <a href="main.php"><input type="submit"/></a> -->
            <!-- <button type=""  onclick="history.back()">CANCEL</button> -->
            
        </div>

</form>
            <?php 
           $servername = "localhost";
           $username = "serwer153230_patryk";
           $password = "&xe7cnTQ";
           $db = "serwer153230_patryk";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $db);

            // Check connection

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            ?>
            </article>
            <footer class="cont mr_x_auto">
                <hr>
                <p>Scandiweb Test assignment</p>
            </footer>

        <script>
            function showDiv(select){
            if(select.value==0){

            document.getElementById('form1').style.display = "grid";
            document.getElementById('form2').style.display = "none";
            document.getElementById('form3').style.display = "none";

            } else if (select.value==1 ){
            document.getElementById('form1').style.display = "none";
            document.getElementById('form2').style.display = "grid";
            document.getElementById('form3').style.display = "none";
            }else {
            document.getElementById('form1').style.display = "none";
            document.getElementById('form2').style.display = "none"; 
            document.getElementById('form3').style.display = "grid";
            } 
            } 

            function InvalidMsg(textbox) {

                if (textbox.value === '') {
                    textbox.setCustomValidity
                        ('Please, submit required data');
                } else if (textbox.validity.typeMismatch) {
                    textbox.setCustomValidity
                        ('Please enter an email address which is valid!');
                } else {
                    textbox.setCustomValidity('');
                }

            return true;
            }

            function validateForm() {
                let size = document.forms["product_form"]["size"].value;
                let height = document.forms["product_form"]["height"].value;
                let width = document.forms["product_form"]["width"].value;
                let lenght = document.forms["product_form"]["lenght"].value;
                let weight = document.forms["product_form"]["weight"].value;

                let h1 = document.querySelector('.validation1');
                let h2 = document.querySelector('.validation2');
                let h3 = document.querySelector('.validation3');

                if (size == "" && h1.style.display === 'grid') {
                    alert("Size must be filled out");
                    return false;
                    } else if ((height == "" || width == "" || lenght == "") && h2.style.display === 'grid') {
                        alert("One of the fields has not been filled out");
                    return false;
                    } else if (weight == "" && h3.style.display === 'grid') {
                        alert("Weight must be filled out");
                    return false;
                    } else {
                        //do nothing
                    }
                }


        </script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js">
		$.ajax({
            type: "POST",
            url: 'zapisz.php',
            success : function() {
                $(location).attr('href', 'index.php')
            }
        });
	</script> -->
    </body>
</html>