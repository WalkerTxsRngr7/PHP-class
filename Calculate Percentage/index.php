<?php    
    include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error{background-color:red;}
    </style>
</head>
<body>
    <h4>
        <?php 
            todaysDate();
        ?>
    </h4>
    <?php
        include "stockForm.php";
        if (isset($_GET['prevPrice']) && isset($_GET['currPrice'])) {
            $prevPrice = $_GET['prevPrice'];
            $currPrice = $_GET['currPrice'];
            if (is_numeric($prevPrice) && is_numeric($currPrice)) {
                include "percentageChange.php";
            }
        } else if (isset($_GET['prevPrice']) && isset($_GET['currPrice'])) {
            if (is_numeric($prevPrice) || is_numeric($currPrice)) {
                echo ("Invalid input type");
            }
        } else if (!isset($_GET['prevPrice']) || !isset($_GET['currPrice'])) {
            if (isset($_GET['prevPrice']) && isset($_GET['currPrice'])) {
                echo ("Fill in both boxes.");
            }
        }
    ?>
</body>
</html>