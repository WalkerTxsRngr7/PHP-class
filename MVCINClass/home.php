<?php
    session_start();
    if ($_SESSION['valid'] != "yes"){
        header("Location: ./index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index2</title>
</head>
<body>
    <?php

        // echo $_SESSION['name'];
        echo ("<a href='index.php?lo=y'>Log Out</a>");

    ?>
</body>
</html>


<?php
    include "./views/header.php";

    echo("<a href='./product_catalog'>Catalog</a><br>");
    echo("<a href='./product_manager'>Manager</a><br>");
    echo("<a href='./employee'>Employee</a>");

    include "./views/footer.php";
?>

