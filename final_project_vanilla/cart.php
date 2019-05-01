<?php
session_start();

include "./database/db.php";
        // include "../views/header.php";

        
        //print_r($aryCat);
        // include "../models/categories_db.php";
include "./database/products_db.php";

printCart();
?>