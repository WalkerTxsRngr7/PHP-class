<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $username = 'mgs_user';
        $password = 'pa55word';
        $host = 'localhost';
        $db_name = 'my_guitar_shop1';
        @$db = mysqli_connect($host, $username, $password, $db_name);

        $sqlInsert = "INSERT INTO customers(firstName, lastName) VALUES ('Bob', 'Jones')";
        // echo ($sqlInsert);

        $qryInsert = mysqli_query($db, $sqlInsert);
        //this has to be the next step!!!!
        $theID = mysqli_insert_id($db);
        echo($theID);


    ?>
</body>
</html>