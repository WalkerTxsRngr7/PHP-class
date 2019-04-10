<?php
    $name = "userID";
    $value = "Walker";
    $path = "/";
    $exp = strtotime('+1 day');

    setcookie($name, $value, $exp, $path);


    if (isset($_POST['submit'])){
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES['myPicture']['name']);
        move_uploaded_file($_FILES['myPicture']['tmp_name'], $target_file);
        $fileName = basename($_FILES['myPicture']['name']);
        echo $fileName;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My Web Page</h1>

    <form action="index.php" method="post" enctype="multipart/form-data">
    
    <input type="file" name="myPicture">
    <input type="submit" value="Submit" name="submit">

    </form>
    <?php
        // print_r($_COOKIE);
        // echo ("hello " . $_COOKIE['userID']);

        // $expDate = strtotime('-1 day');
        // setcookie("userID", '', $expDate, '/');

        // echo('goodbye'. $_COOKIE['userID']);
    ?>

</body>
</html>