<form action="index.php" method="get">

    <p>Category: </p>
    <select name="catID">
        <?php
            $catList = getAllCats();
            foreach($catList as $cat){
                echo ("<option value='$cat[categoryID]>$cat[categoryName]</option>");
            }
        ?>
        <!-- <option value="1">Guitars</option>
        <option value="2">Basses</option>
        <option value="3">Drum</option> -->
    </select>

    <p>Product Name: </p>
    <input type="text" name="prodName">

    <p>Product Code: </p>
    <input type="text" name="prodCode">

    <p>Product Price: </p>
    <input type="text" name="prodPrice">

    <input type="submit" value="Add Product">
    

</form>