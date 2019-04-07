<section>
    <!-- <h4>Categories</h4> -->
<?php

    $employee = getAnEmployee($empID);
    $empFName = $employee['firstName'];
    $empLName = $employee['lastName'];
    $empPhoto = $employee['photo'];

    echo("<h4>$empFName " . " $empLName</h4><br>");
    echo("<img src='./photos/$empPhoto' style='width:150px; height: auto;'>");
    echo("<h5 style='padding:0px; margin: 10px;'>$empPhoto</h5><br>");
    echo("<a href='?editID=$empID' style='margin: 10px;'>Edit</a>");
    echo("<a href='?delID=$empID'>Delete</a>");
    
    
?>
</section>

