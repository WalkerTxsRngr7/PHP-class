<?php
    if (isset($_POST['myImage'])){
        // echo("Worked!");
        //$_FILES

        $name = $_FILES['myImage']['name'];
        $tmpName = $_FILES['myImage']['tmp_name'];
        $dir = getcwd() . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $name;
        

        // echo $name . " " . $size . " " . $tmpName;
        echo($dir);
        move_uploaded_file($tmpName, $dir);

    }

?>


<form action="index.php" method="post" enctype="multipart/form-data">

    <input type="text" name="myName" id="">
    <input type="file" name="myImage" id="">
    <input type="submit" value="Submit">
</form>