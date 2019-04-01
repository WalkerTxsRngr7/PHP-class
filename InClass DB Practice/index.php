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
        $username = 'mgs_user';
        $password = 'pa55word';
        $host = 'localhost';
        $db_name = 'my_guitar_shop1';
        @$db = mysqli_connect($host, $username, $password, $db_name);

        $sql = "SELECT * FROM `products`";
        $qry = mysqli_query($db, $sql);

        // $product = "";
        // $qty = 0;
        

        if (isset($_POST['products']) && isset($_POST['qty'])){

            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $product = $_POST['products'];
            $qty = $_POST['qty'];

            $prodInsert = "INSERT INTO customers(firstName, lastName) VALUES ('$fName', '$lName')";
            $qryInsert = mysqli_query($db, $prodInsert);
            $theID = mysqli_insert_id($db);

            $ordInsert = "INSERT INTO orders(customerID, productID, qty) VALUES ('$theID', '$product', '$qty')";
            $qryInsert = mysqli_query($db, $ordInsert);

            $selected = "SELECT  `listPrice` FROM `products` WHERE `productID` = $product";
            $qry = mysqli_query($db, $selected);
            $row = mysqli_fetch_assoc($qry);
            extract ($row);

            $selected = "SELECT  `productName` FROM `products` WHERE `productID` = $product";
            $qry = mysqli_query($db, $selected);
            $row = mysqli_fetch_assoc($qry);
            extract ($row);

            echo ("<h2>Name: $fName $lName</h2>");
            echo ("<h2>Product: $productName</h2>");
            echo ("<h2>Quantity: $qty</h2>");
            echo ("<h2>Price: $$listPrice</h2>");
            $price = $listPrice * $qty;
            echo ("<h2>Total Price: $$price</h2>");

        } else {
            include "order.php";
        }
        


?>
</body>
</html>