

<?php
    $pageName = "Employee";

    include "../models/database.php";
    include "../views/header.php";

    
    include "../models/employee_db.php";
    
    $fName = filter_input(INPUT_GET, 'firstName');
    $lName = filter_input(INPUT_GET, 'lasttName');
    $fName = filter_input(INPUT_GET, 'photo');
    $empID = filter_input(INPUT_GET, 'empID');

    
    
    include "./employee_list.php";
    if ($empID != NULL){
        include "./employee_display.php";
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
    
