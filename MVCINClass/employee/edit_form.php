<?php
    $employee = getAnEmployee($editID);
    $firstName = $employee['firstName'];
    $lastName = $employee['lastName'];
    $photo = $employee['photo'];

?>


<form action="index.php?empID=<?=$editID?>" method="post" enctype="multipart/form-data">
    
    <div style="width:65%;float:right;padding-bottom:20px;">
        <h3>Edit Employee: <?=$firstName . " " . $lastName?></h3>
        <p>First Name: </p>
        <input type="text" name="firstName" value="<?=$firstName?>">
        <p>Last Name: </p>
        <input type="text" name="lastName"value="<?=$lastName?>">
        <br>
        <img style="padding-top:15px; width: 150px; height:auto;" src='<?="./photos/$photo"?>'>
        <br>
        <input type="file" name="photo" style="margin:15px 0px;">
        <br>
        <input type="submit" value="Submit">
        <input type="hidden" name="edited" value="true">
    </div>
    
</form>