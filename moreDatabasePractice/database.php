<?php

    $userName = "mgs_user";
    $password = "pa55word";
    $host = "localhost";
    $db_name = "my_guitar_shop1";

    $db = mysqli_connect($host, $userName, $password, $db_name);

    $connection_error = mysqli_connect_error();
    if ($connection_error != null){
        echo "<p>Error Connection: $connection_error</p>";
    } else{
        echo "good to go </br>";
    }