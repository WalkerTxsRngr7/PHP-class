<?php
if (isset($modify)){
        $name = $_FILES['newImage']['name'];
        $size = $_FILES['newImage']['size'] / 1024;
        $tmpName = $_FILES['newImage']['tmp_name'];
        $dir =   getcwd() . DIRECTORY_SEPARATOR . "..";
        $dir =  $dir. DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $name;
    

    if (!empty($newProdName) && !empty($newPrice) && !empty($newQty)) {
        if ($name != ""){
            move_uploaded_file($tmpName, $dir);
            editProduct($newProdName, $newPrice, $newQty, $name, $productID);
        } else {
            editProduct($newProdName, $newPrice, $newQty, $oldImage, $productID);
        }
    } else {
        echo("<h3>You must fill every box</h3>");
    }
} else {
    echo("<section>");
    $aryProd = getAllProducts();
        echo("<div class='card-deck'>");

    
            foreach($aryProd as $product){
            ?>

            <div class="card editCard">
                <img src="../images/<?=$product['imageName']?>" class="card-img-top" alt="<?=$product['productName']?>">
                <div class="card-body editCardBody">
                    <h6 class="card-title"><?=$product['productName']?></h6>
                    <p class="card-text price">$<?=$product['price']?></p>
                    <form action="" method="post">
                        <div class="input-group editCardBtn">
                            <input type="hidden" name='productID' value='<?=$product['productID']?>'>
                            <input type="hidden" name="adminBtn" value="<?=$adminBtn?>">
                            <button class=" btn btn-outline-light rounded-0" type="submit">Edit</button>
                        </div>
                </div>
                </form>
                <p class="card-text qty"><small class="text-muted">In Stock: <?=$product['qty']?></small></p>
            </div>

<?php
            }
        echo ("</div>
        </section>");
        }

if (isset($productID)){
    $product = prodByID($productID);
        ?>
    <form id='editForm' action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="newProdName">Product Name:</label>
            <input type="text" class="form-control" id="newProdName" placeholder="Enter product name" name='newProdName'
                value="<?=$product['productName']?>">
        </div>
        <div class="form-group">
            <label for="newProdName">Price:</label>
            <input type="text" class="form-control" id="newPrice" placeholder="Enter price" name='newPrice' value='<?=$product['price']?>'>
        </div>
        <div class="form-group">
            <label for="newQty">Quantity in Stock:</label>
            <input type="text" class="form-control" id="newQty" placeholder="Enter quantity in stock" name='newQty' value='<?=$product['qty']?>'>
        </div>
        <div class="form-group">
            <label for="addImage">Image:</label>
            <br>
            <img class='editFormImg' src="../images/<?=$product['imageName']?>" alt="<?=$product['productName']?>">
            <p class='text-muted'><?=$product['imageName']?> <small class='text-muted'>(leave blank to keep this image)</small></p>
            <input type="hidden" name="oldImage" value='<?=$product['imageName']?>'>
            <div class="input-group mb-3 form-control" style='padding: 0px; height: 100%;' placeholder='Image'>
                <input type="file" id='inputBtn' class='padding: 0px; margin: 0px; width: 100%;' name='newImage'>
            </div>
            <input type="hidden" name="modify">
            <input type="hidden" name="adminBtn" value="<?=$adminBtn?>">
            <input type="hidden" name="productID" value="<?=$productID?>">
            <button type="submit" class="btn btn-outline-light rounded-0">Edit Product</button>
        </div>
    </form>

<?php
}

?>