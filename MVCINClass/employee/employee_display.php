<section>
    <!-- <h4>Categories</h4> -->
<?php

    $employee = getAnEmployee($empID);
    $empFName = $employee['firstName'];
    $empLName = $employee['lastName'];
    $empPhoto = $employee['photo'];

    echo("<h4>$empFName " . " $empLName</h4><br>");
    echo("<img src='./photos/$empPhoto'>");
    echo("<br><a href='?editID=$empID'>Edit</a>");
    
    
?>
</section>

