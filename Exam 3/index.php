<?php
    session_start();

    include "./database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

<?php

    $username = filter_input(INPUT_POST, 'username');
    $lo = filter_input(INPUT_GET, "lo");

    if ($lo == "y"){
        $_SESSION = array();
        session_destroy();
        header("Location: ./index.php");
    }

    if (isset($username) == TRUE && $username == "Tigger"){
        $_SESSION['valid'] = "yes";
        header("Location: ./customer.php");
    } else {
        ?>
            <form method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="submit" value="Login">
            </form>
        <?php
    }

?>
</body>
</html>