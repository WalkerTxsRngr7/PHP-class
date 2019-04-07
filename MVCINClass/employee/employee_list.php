<section style="width:33%; float:left;">
    <h4>Employees</h4>
<?php

    $aryEmp = getAllEmps();


    foreach($aryEmp as $employee){
        $str = "<a href='?empID=$employee[employeeID]'>$employee[firstName] $employee[lastName]</a><br>";
        //echo($category['categoryName'] . "<br>");
        echo($str);
    }
    echo("<a href='?addEmp=TRUE'>Add Employee</a>");
?>

</section>