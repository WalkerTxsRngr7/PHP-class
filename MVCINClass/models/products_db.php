<?php

/** RETURN AN ARRAY OF ALL PRODUCTS */
function getAllProducts(){
    global $db;
    $sql = "SELECT * FROM products";
    $qry = mysqli_query($db, $sql);

    $aryProd = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //return an array of products
    return $aryProd;

}

/** RETURN A SINGLE CATEGORY FILTERED BY CATEGORY ID */
function prodByCategory($catID){
    global $db;

    $sql = "select * from products where categoryID = $catID";
    //echo $sql;
    $qry = mysqli_query($db, $sql);

    $products = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //return an array of products
    return $products;

}

