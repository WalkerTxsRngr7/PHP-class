<section>
    <!-- <h4>Categories</h4> -->
<?php

    $product = prodByID($prodID);
    $prodName = $product['productName'];
    $prodPrice = $product['listPrice'];

    echo($prodName . "<br>" . $prodPrice);
    echo("<br><img src='./images/$product[productCode].png'>");
    
    
?>
</section>

