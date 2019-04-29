<?php

    // $db  = mysqli_connect("localhost", "mgs_user", "pa55word", "my_guitar_shop1");

    // if (mysqli_connect_errno()){
    //     echo "Failed to connect" . mysqli_connect_errno();
    // }

    ///dsn data source name
    $dsn = "mysql:host=localhost;dbname=shop_final";
    
    try {
        $db = new PDO($dsn, "root", "");
    } catch(Exception $e){
        echo ($e->getmessage());
        die();
    }