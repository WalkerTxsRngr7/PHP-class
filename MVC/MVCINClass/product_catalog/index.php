

<?php
    include "../models/database.php";
    include "../views/header.php";

    
    //print_r($aryCat);
    include "../models/categories_db.php";
    include "../models/products_db.php";
    include "./category_list.php";

    $catID = filter_input(INPUT_GET, 'cat');

    if ($catID == NULL){
        $catID = 1;
    }
    
    
    
    $prodID = filter_input(INPUT_GET, 'prodID');

    if ($prodID == NULL){
        include "./product_list.php";
    } else {
        include "./product_display.php";
    }
    

    include "../views/footer.php";
?>
    
