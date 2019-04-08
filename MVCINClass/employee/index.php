<?php
    $pageName = "Employee";

    include "../models/database.php";
    include "../views/header.php";

    
    include "../models/employee_db.php";
    
    $fName = filter_input(INPUT_POST, 'firstName');
    $lName = filter_input(INPUT_POST, 'lastName');
    $photo = filter_input(INPUT_POST, 'photo');
    $empID = filter_input(INPUT_GET, 'empID');
    $editID = filter_input(INPUT_GET, 'editID');
    $edited = filter_input(INPUT_POST, 'edited');
    $addEmp = filter_input(INPUT_GET, 'addEmp');
    $delID = filter_input(INPUT_GET, 'delID');
    $added = filter_input(INPUT_POST, 'added');
    

    
    
    
    if ($delID != NULL){
        deleteById($delID);
    } else if ($added == TRUE){
        addEmployee($fName, $lName, $photo);
    } else if ($edited == TRUE){
        editEmployee($empID, $fName, $lName, $photo);
    }

    include "./employee_list.php";

    if ($empID != NULL){
        include "./employee_display.php";
    } else if ($editID != NULL){
        include "./edit_form.php";
    } else if ($addEmp != NULL){
        include "./add_form.php";
    }
    
    
    //
    // } else {
    //     include "./category_list.php";
    //     include "./product_list.php";
    // }
    

    include "../views/footer.php";
?>
    
