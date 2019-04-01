<?php
    $userName = "mgs_user";
    $password = "pa55word";
    $database = "my_guitar_shop1";
    $host = "localhost"; 


    // host, user, password, database
    $connString = mysqli_connect($host, $userName, $password, $database);
    $sql = "SELECT*FROM products";

    $myRecords = mysqli_query($connString, $sql);
    
    while($row = mysqli_fetch_assoc($myRecords)){
        echo $row['productName'] . " $" . $row['listPrice'] . "<br>";
    }