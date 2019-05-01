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

    $sql = "select * from products where productID = $prodID";
    //echo $sql;
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

function addProduct($catID2, $prodName, $prodCode, $prodPrice){
    global $db;

    echo ("<br><h1>Added $prodName</h1>");
    $sql = "INSERT INTO `products`(`categoryID`, `productCode`, `productName`, `listPrice`) VALUES ('$catID','$prodCode', '$prodName', '$prodPrice')";
    $pdoS = $db->query($sql);
}

function cart($prodID, $qty){
    if (!isset($_SESSION['cartItem'])) {
        $_SESSION['cartItem'] = array();
    }
    $message = "hello";
    array_push($_SESSION['cartItem'],[$prodID, $qty]);
    
}
function printCart(){
    if (!isset($_SESSION['cartItem'])) {
        echo ("<h1>Your cart is empty</h1>");
    }
    else{
        foreach ($_SESSION['cartItem'] as $items) {
            echo ("Order: <br>ProductID: " . $items[0] . "       Qty: " . $items[1] . "<br><br>");
        }
    }
    
}