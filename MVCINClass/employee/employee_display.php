<section>
    <!-- <h4>Categories</h4> -->
<?php

    $employee = getAnEmployee($empID);
    $empFName = $employee['firstName'];
    $empLName = $employee['lastName'];
    // $empPhoto = $employee['photo'];

    echo("<h4>$fName $lName</h4><br>");
    // echo("<img src='../images/$empPhoto.png'>");
    
    
?>
</section>

