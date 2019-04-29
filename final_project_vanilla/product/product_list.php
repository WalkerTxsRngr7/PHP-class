<section>
    <!-- <h4>Categories</h4> -->
    <?php

    // $catName = getACategory($catID);
    // echo ("<h4>" . $catName . "</h4>");
    $aryProd = getAllProducts();

    ?>
    <div class="container">
        <div class="card-deck">

            <?php
    foreach($aryProd as $product){
        // $str2 = "<a href='?prodID=$products[productID]'>$products[productName]</a><br>";
        // $str2 = "<p>$products[productName]</p><br>";
    ?>

            <div class="card">
                <img src="<?=$product['imageName']?>" class="card-img-top" alt="<?=$product['productName']?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$product['productName']?></h5>
                    <p class="card-text">$<?=$product['price']?></p>
                    <p class="card-text"><small class="text-muted">Quantity <?=$product['qty']?></small></p>
                </div>
            </div>

            <?php
    }
    ?>
        </div>
    </div>

</section>