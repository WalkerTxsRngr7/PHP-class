<?php

/** A FUNCTION THAT RETURNS ALL CATEGORIES */
function getAllCats(){
    global $db;
    $sql = "SELECT * FROM categories";
    $qry = mysqli_query($db, $sql);

    $aryCat = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //return an array of categories
    return $aryCat;

}

/** RETURN A SINGLE CATEGORY NAME FROM A GIVEN CATEGORY ID */
function getACategory($catID){
    global $db;

    $sql = "select * from categories where categoryID = $catID";
    $qry = mysqli_query($db, $sql);

    $rs = mysqli_fetch_assoc($qry);
    return $rs['categoryName'];
}