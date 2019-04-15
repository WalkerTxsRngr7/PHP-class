<?php

$dsn = "mysql:host=localhost;dbname=my_guitar_shop2";
    
    try {
        $db = new PDO($dsn, "mgs_user", "pa55word");
    } catch(Exception $e){
        echo ($e->getmessage());
        die();
    }


    function getAllCustomers(){
        global $db;
        $sql = "SELECT * FROM `customers`";
        // echo ($sql);
        $qry = $db->query($sql);
        $customers = $qry->fetchAll();
    
        return $customers;
    }
    
    function getAllOrders($custID){
        global $db;
        $sql = "SELECT * FROM orders WHERE customerID = $custID";
        $qry = $db->query($sql);
        $orders = $qry->fetchAll();
        
        return $orders;
    }


