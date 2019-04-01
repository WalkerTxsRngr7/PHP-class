<?php
    session_start();
    
    

    $username = filter_input(INPUT_POST, 'userName');
    $lo = filter_input(INPUT_GET, 'lo');
    if ($lo == "y"){
        $_SESSION = array();
        session_destroy();
    }

    if ($username != NULL){
        //we know someone has submitted a username
        if ($username == "Walker"){
            $_SESSION['valid'] = "yes";
            header("Location: ./index2.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions</title>
</head>
<body>
    <h1>First Page</h1>
    <?php

        include "login.php";
    ?>
    
</body>
</html>