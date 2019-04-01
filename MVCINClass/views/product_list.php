<section>
    <!-- <h4>Categories</h4> -->
<?php

    $catName = getACategory($catID);
    echo ("<h4>" . $catName . "</h4>");
    //$aryProd = getAllProducts();
    $aryProd = prodByCategory($catID);

    foreach($aryProd as $products){
        echo($products['productName'] . "<br>");
    }
?>
</section>