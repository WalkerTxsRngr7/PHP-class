<?php
    $dsn = "mysql:host=localhost;dbname=shop_final";
    
    try {
        $db = new PDO($dsn, "root", "");
    } catch(Exception $e){
        echo ($e->getmessage());
        die();
    }
?>