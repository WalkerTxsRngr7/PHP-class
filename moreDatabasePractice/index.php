<?php

include "database.php";

function listStuff(){
    global $db; 
    $sql = "SELECT * FROM `categories` ORDER BY categoryName ASC";

    $myQuery = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($myQuery)){
        extract($row);
        // echo($row['categoryName']) . "<br>";
        echo($categoryName . "<br>");
    }
}

listStuff();

echo "<h4>Inserting Stuff</h4>";

$aThing = "Woodwinds";
$sqlInsert = "INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES (NULL, '$aThing')";
// echo ($sqlInsert);   //great troubleshooting tool
$rsInsert = mysqli_query($db, $sqlInsert);
listStuff();

echo"<h4>Deleting Stuff</h4>";
$sqlDelete = "DELETE FROM categories WHERE categoryName = 'Alligator'";
$rsDelete = mysqli_query($db, $sqlDelete);
listStuff();

echo "<h4>Editing Stuff</h4>";
$sqlUpdate = "UPDATE categories SET categoryName = 'Wood' WHERE categoryName = 'Woodwinds'";
$rsUpdate = mysqli_query($db, $sqlUpdate);
listStuff();