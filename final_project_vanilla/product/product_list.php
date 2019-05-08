<section>
    
    <?php
    $aryProd = getAllProducts();
    ?>
        <div class="card-deck">

            <?php
            foreach($aryProd as $product){
            ?>

            <div class="card prodCard">
                <img src="../images/<?=$product['imageName']?>" class="card-img-top" alt="<?=$product['productName']?>">
                <div class="card-body prodCardBody">
                    <h5 class="card-title"><?=$product['productName']?></h5>
                    <p class="card-text price">$<?=$product['price']?></p>
                    <form action="cart.php" method="get">
                        <div class="input-group prodQtyBtn">
                            <input type="hidden" name='productID' value='<?=$product['productID']?>'>
                            <input type="number" class='form-control rounded-0' name="qty" min="1"
                                max="<?=$product['qty']?>" placeholder='Qty:'>
                            <div class="input-group-append">
                                <button class="btn btn-outline-light rounded-0" type="submit">Cart</button>
                            </div>
                        </div>
                    </form>
                    <p class="card-text qty"><small class="text-muted">In Stock: <?=$product['qty']?></small></p>
                </div>
            </div>

            <?php
            }
            ?>

        </div>
</section>