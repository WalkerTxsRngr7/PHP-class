

<?php
    $pageName = "Employee";

    include "../models/database.php";
    include "../views/header.php";

    
    include "../models/employee_db.php";
    
    $fName = filter_input(INPUT_GET, 'firstName');
    $lName = filter_input(INPUT_GET, 'lastName');
    $photo = filter_input(INPUT_GET, 'photo');
    $empID = filter_input(INPUT_GET, 'empID');
    $editID = filter_input(INPUT_GET, 'editID');
    $edited = filter_input(INPUT_POST, 'edited');
    $editfName = filter_input(INPUT_POST, 'editfName');
    $editlName = filter_input(INPUT_POST, 'editlName');
    $editPhoto = filter_input(INPUT_POST, 'editPhoto');
    

    
    
    include "./employee_list.php";
    if ($empID != NULL){
        include "./employee_display.php";
    } else if ($editID != NULL){
        include "./edit_form.php";
    }
    if ($edited != NULL){
        echo("<p>Edited!</p>");
        editEmployee($empID, $editfName, $editlName, $editPhoto);

    }
    
    // if ($delID != NULL){
    //     deleteById($delID);
    // }
    // if ($addProd == TRUE){
    //     include "./add_form.php";
    // } else {
    //     include "./category_list.php";
    //     include "./product_list.php";
    // }
    

    include "../views/footer.php";
?>
    
