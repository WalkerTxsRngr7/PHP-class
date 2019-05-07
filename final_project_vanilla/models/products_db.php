<?php

/** RETURN AN ARRAY OF ALL PRODUCTS */
function getAllProducts(){
    global $db;
    $sql = "SELECT * FROM product";
    // $qry = mysqli_query($db, $sql);

    // $aryProd = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //oop
    $qry = $db->query($sql);
    $aryProd = $qry->fetchAll();


    //return an array of products
    return $aryProd;

}

/** RETURN A SINGLE CATEGORY FILTERED BY CATEGORY ID */
function prodByCategory($catID){
    global $db;

    $sql = "select * from products where categoryID = $catID";
    //echo $sql;
    // $qry = mysqli_query($db, $sql);

    // $products = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //oop
    $qry = $db->query($sql);
    $products =$qry->fetchAll();

    //return an array of products
    return $products;

}

/** RETURN A SINGLE PRODUCT FILTERED BY PRODUCT ID */
function prodByID($prodID){
    global $db;

    $sql = "select * from product where productID = $prodID";
    // echo $sql;
    // $qry = mysqli_query($db, $sql);

    // $product = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //oop
    $qry = $db->query($sql);
    $product = $qry->fetch();

    //return a product
    return $product;

}


function deleteById($delID){
    global $db;

    echo ("<br><h1>Deleting $delID</h1>");
    $sql = "DELETE FROM `products` WHERE `productID` = $delID";
    $pdoS = $db->query($sql);
}

function addProduct($productName, $price, $qty, $imageName){
    global $db;

    echo ("<br><h1>Added $productName</h1>");
    $sql = "INSERT INTO `product`(`productName`, `imageName`, `price`, `qty`) VALUES ('$productName','$imageName',$price,$qty)";
    echo $sql;
    $pdoS = $db->query($sql);
}

function editProduct($productName, $price, $qty, $imageName, $productID){
    global $db;
    echo ("<br><h1>Edited: $productName</h1>");
    $sql = "UPDATE `product` SET `productName`='$productName',`imageName`='$imageName',`price`=$price,`qty`=$qty WHERE productID = $productID";
    $pdoS = $db->query($sql);
}

function cart($productID, $qty){
    // if (!isset($_SESSION['order'])) {
    //     $_SESSION['order'] = array();
    // }
    // array_push($_SESSION['order'],[$productName, $qty]);
    // echo ("<p>")
    $product = prodByID($productID);
    echo("<br>Order: <br>Product: " . $product['productName'] . "       Qty: " . $qty . "<br><br>");
}

function order($productID, $qty){
    global $db;
    $sqlInsert = "INSERT INTO `order`(`productID`, `customerName`, `qtyOrdered`) VALUES ($productID,'$_SESSION[name]',$qty)";
    echo($sqlInsert);

    
    // $pdoS = $db->query($sqlInsert);

    $product = prodByID($productID);
    $loweredQty = $product['qty'] - $qty;
    $sqlQty = "UPDATE `product` SET `qty`= $loweredQty WHERE `productID` = $productID";
    $pdoS = $db->query($sqlQty);
}

/** RETURN AN ARRAY OF ALL ORDERS */
function getAllOrders(){
    global $db;
    $sql = "SELECT * FROM `order`";
    // $qry = mysqli_query($db, $sql);

    // $aryProd = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //oop
    $qry = $db->query($sql);
    $aryOrders= $qry->fetchAll();


    //return an array of products
    return $aryOrders;

}