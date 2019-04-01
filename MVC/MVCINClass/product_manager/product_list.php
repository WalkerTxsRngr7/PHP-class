<section>
    <!-- <h4>Categories</h4> -->
<?php

    $catName = getACategory($catID);
    echo ("<h4>" . $catName . "</h4>");
    //$aryProd = getAllProducts();
    $aryProd = prodByCategory($catID);

    foreach($aryProd as $products){
        $del = "<a href='?cat=$catID&delID=$products[productID]'>Delete</a>";
        echo($del . $products['productName'] . "<br>");
    }
    echo("<a href='?addProd=TRUE'>Add Product</a>")
    
?>
</section>