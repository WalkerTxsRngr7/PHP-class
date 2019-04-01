
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

    include "database.php";
    $name = $_POST["name"];
    $address = $_POST["address"];
    $product = $_POST["products"];
    $quantity = $_POST["quantity"];
    echo 'Name: ' . $name . "<br>";
    echo 'Address: ' . $address . "<br>"; 
    echo 'Product: ' . $product . "<br>";
    echo 'Quantity: ' . $quantity . "<br>"; 


    $selected = "SELECT  `listPrice` FROM `products` WHERE `productID` = $product";
    $qry = mysqli_query($db, $selected);
    $row = mysqli_fetch_assoc($qry);
    extract ($row);
    echo ("Price: $$listPrice");
    

    ?>
</body>
</html>