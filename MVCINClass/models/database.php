<?php

    // $db  = mysqli_connect("localhost", "mgs_user", "pa55word", "my_guitar_shop1");

    // if (mysqli_connect_errno()){
    //     echo "Failed to connect" . mysqli_connect_errno();
    // }

    ///dsn data source name
    $dsn = "mysql:host=localhost;dbname=my_guitar_shop1";
    
    try {
        $db = new PDO($dsn, "mgs_user", "pa55word");
    } catch(Exception $e){
        echo ($e->getmessage());
        die();
    }