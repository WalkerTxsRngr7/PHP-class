<?php
session_start();
$title = "Home";
$headTitle = "\$store Cart";
include "../views/header.php";
include '../models/requests.php';
if ($customerName != ""){
    $_SESSION['name'] = $customerName;
    
}
if (!isset($_SESSION['name'])){
    echo("
    <form id='name' action='cart.php' method='get'>
        <p>Enter your name: </p>
        <input type='text' name='customerName'>
        <input type='hidden' name='productID' value='$productID'>
        <input type='hidden' name='qty' value='$qty'>
        <br>
        <input type='submit' class='btn btn-outline-success' id='btnName' value='Submit'>
    </form>
    ");
    

} else if ($qty != null){
    $product = prodByID($productID);
    ?>
<div class="cart">
    <p><?=$product['productName']?></p>
    <img class='cartImg' src="../images/<?=$product['imageName']?>" alt="<?=$product['productName']?>">
    <h6>Price:</h6>
    <p>$<?=$product['price']?></p>
    <h6>Quantity:</h6>
    <p><?=$qty?></p>
    <h6>Total:</h6>
    <p>$<?=$product['price'] * $qty?></p>

    <form class='order' action="./cart.php" method="get">
        <input type='hidden' name='productID' value='<?=$productID?>'>
        <input type='hidden' name='qty' value='<?=$qty?>'>
        <input type="submit" class='btn btn-outline-success' name='order' value="Order">
    </form>
</div>
<?php
}
else {
    echo("<h2>Your cart is empty</h2>");
}
    
        if ($order != null){
            order($productID, $qty);
        }
    

include "../views/footer.php";
?>