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

function cart($productName, $qty){
    if (!isset($_SESSION['order'])) {
        $_SESSION['order'] = array();
    }
    array_push($_SESSION['order'],[$productName, $qty]);
    
}
function printCart(){
    if (!isset($_SESSION['order'])) {
        echo ("<h1>Your cart is empty</h1>");
    }
    else{
        foreach ($_SESSION['order'] as $items) {
            $product = prodById($items[0]);
            echo ("Order: <br>Product: " . $product['productName'] . "       Qty: " . $items[1] . "<br><br>");
        }
        echo ("<button type='submit' class='btn btn-outline-success' name='order' value='confirm'>Order</button>");
    }
    
}
function order($customerName){
    $_SESSION['name'] = $customerName;

    $prodID = $_SESSION['order'][0][0];
    echo($prodID. "<br>");
    $qty = $_SESSION['order'][0][1];
    echo($qty);


    $sqlInsert = "INSERT INTO `order`(`productID`, `customerName`, `qtyOrdered`) VALUES ($prodID,$customerName,$qty)";
    // print_r($productName);


}