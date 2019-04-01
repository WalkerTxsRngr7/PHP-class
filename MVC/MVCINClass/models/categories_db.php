<?php

/** A FUNCTION THAT RETURNS ALL CATEGORIES */
function getAllCats(){
    global $db;
    $sql = "SELECT * FROM categories";

    //procedural way ****************
    // $qry = mysqli_query($db, $sql);
    // $aryCat = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //oop ************************
    $pdoStatement = $db->query($sql);
    $aryCat = $pdoStatement->fetchAll();

    //return an array of categories
    return $aryCat;

}

/** RETURN A SINGLE CATEGORY NAME FROM A GIVEN CATEGORY ID */
function getACategory($catID){
    global $db;

    echo $catID;
    $sql = "select * from categories where categoryID = $catID LIMIT 1";
    // $qry = mysqli_query($db, $sql);
    // $rs = mysqli_fetch_assoc($qry);

    //oop *********************
    $pdoS = $db->query($sql);
    $rs = $pdoS->fetch();

    
    return $rs['categoryName'];
}