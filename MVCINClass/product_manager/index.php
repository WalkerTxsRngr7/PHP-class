

<?php
    $pageName = "Product Manager";
    
    include "../models/database.php";
    include "../views/header.php";

    
    //print_r($aryCat);
    include "../models/categories_db.php";
    include "../models/products_db.php";
    

    $catID = filter_input(INPUT_GET, 'cat');

    if ($catID == NULL){
        $catID = 1;
    }
    
    
    
    $delID = filter_input(INPUT_GET, 'delID');
    $addProd = filter_input(INPUT_GET, 'addProd');
    $catID2 = filter_input(INPUT_GET, 'catID');
    $prodName = filter_input(INPUT_GET, 'prodName');
    $prodCode = filter_input(INPUT_GET, 'prodCode');
    $prodPrice = filter_input(INPUT_GET, 'prodPrice');




    if ($delID != NULL){
        deleteById($delID);
    }
    if ($addProd == TRUE){
        include "./add_form.php";
    } else {
        include "./category_list.php";
        include "./product_list.php";
    }
    

    include "../views/footer.php";
?>
    
