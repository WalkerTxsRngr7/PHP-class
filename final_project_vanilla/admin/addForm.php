<?php
if (isset($_POST['addImage'])){
    // echo("Worked!");
    //$_FILES

    $name = $_FILES['addImage']['name'];
    $size = $_FILES['addImage']['size'] / 1024;
    $tmpName = $_FILES['addImage']['tmp_name'];
    $dir =   getcwd() . DIRECTORY_SEPARATOR . "..";
    echo ($dir);
    $dir =  $dir. DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $name;
    // echo $name . " " . $size . " " . $tmpName;
    
    echo($dir);
    echo ($name);
    // move_uploaded_file($tmpName, $dir);

}

echo ($addProdName . "<br>");
echo ($addQty . "<br>");
echo ($addImage . "<br>");
?>


<form action="index.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="addProdName">Product Name:</label>
        <input type="text" class="form-control" id="addProdName" placeholder="Enter product name" name='addProdName'>
    </div>
    <div class="form-group">
        <label for="addQty">Quantity in Stock:</label>
        <input type="text" class="form-control" id="addQty" placeholder="Enter quantity in stock" name='addQty'>
    </div>
    <div class="form-group">
        <label for="addImage">Image:</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="addImage"
                name='addImage'>
                <!-- <input type="file" name="myImage" id=""> -->
            <label class="custom-file-label text-muted" for="inputGroupFile03">Choose image</label>
        </div>
    </div>

    <!-- <input type="submit" value="Add Product"> -->
    <button type="submit" class="btn btn-outline-dark rounded-0">Add Product</button>
    <input type="hidden" name="added"> <!-- value='true' -->
    <input type="hidden" name="adminBtn" value="<?=$adminBtn?>">


</form>