<?php
session_start();

$lo = filter_input(INPUT_GET, 'lo');
        if ($lo == "y"){
            $_SESSION = array();
            session_destroy();
            header("Location: ./index.php");
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>

<body>
    <a href="?lo=y">Log Out</a> | <a href="admin.php">Admin</a>
    <h1>Admin</h1>
</body>

</html>