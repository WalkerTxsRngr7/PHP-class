<?php
    session_start();
    if ($_SESSION['valid'] != "yes"){
        header("Location: ./index.php");
    }


    echo ("<a href='index.php?lo=y'>Log Out</a><br>");
    echo ("<a href='customer.php'>All Customers</a>");

    echo("<h1>Customer page</h1>");

    include "./database.php";

    $custID = filter_input(INPUT_GET, 'custID');
    
    if ($custID == NULL){
        include "./customers.php";
    } else {
        include "./orders.php";
    }
        
    
    
    ?>
