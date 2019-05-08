<?php
$lo = filter_input(INPUT_GET, 'lo');
        if ($lo == "y"){
            $_SESSION = array();
            session_destroy();
            header("Location: ../product/");
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/styles.css">
</head>

<body>

    <?php
        include "../models/db.php";
        include "../models/products_db.php";
    ?>
    <div class="container">
        <div class="nav">
            <a href="../product/" class='nav' id='home'>Home</a>
            <a href="?lo=y" class='nav' id='lo'>Log Out</a>
            <h1 class='headTitle'><?=$headTitle?></h1>
        </div>