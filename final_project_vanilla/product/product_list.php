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
                ?>

            <div class="card">
                <img src="./images/<?=$product['imageName']?>" class="card-img-top" alt="<?=$product['productName']?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$product['productName']?></h5>
                    <p class="card-text">$<?=$product['price']?></p>
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="hidden" name='prodID' value="<?=$product['productID']?>">
                            <input type="number" class='form-control rounded-left' name="qty" min="1" max="<?=$product['qty']?>"
                                placeholder='Qty:'>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Order</button>
                            </div>
                        </div>
                    </form>
                    <p class="card-text"><small class="text-muted">In Stock: <?=$product['qty']?></small></p>
                </div>
            </div>

            <?php
            }
            ?>
        </div>
    </div>



</section>