<?php
session_start();
$title = "Home";
include "../views/header.php";
include './requests.php';
if ($customerName != ""){
    $_SESSION['name'] = $customerName;
    
}
if (!isset($_SESSION['name'])){
    echo("
    <form action='cart.php' method='get'>
    <div id='name'>
        <p>Enter your name: </p>
        <input type='text' name='customerName' style='margin-left: 15px; height: 25px'>
        <input type='hidden' name='productID' value='$productID'>
        <input type='hidden' name='qty' value='$qty'>
    </div>
    <input type='submit' class='btn btn-outline-success' value='Submit'>
    </form>
    ");
    

} else if ($qty != null){
    cart($productID, $qty);
    
    // $product = prodByID($productID);
    // echo("Order: <br>Product: " . $product['productName'] . "       Qty: " . $qty . "<br><br>");
    // if ($orderNow == 'now'){
    //     header("Location: cart.php");
    // }

?>
<form class='order' action="cart.php" method="get">
    <?php
    




    echo("<input type='hidden' name='productID' value='$productID'>");
    echo("<input type='hidden' name='qty' value='$qty'>");
?>
    <input type="submit" class='btn btn-outline-success' name='order' value="Order">
    <!-- <button type='submit' class='btn btn-outline-success' name='order' value='confirm'>Order</button> -->
</form>
<?php
}
else {
    echo("<h2>Your cart is empty</h2>");
}
    // print_r($_SESSION);
    // printCart();
    
    
        if ($order != null){
            order($productID, $qty);
        }
    
    ?>

<!-- <button type='button' name='order' value='confirm' >Order</button> -->


<?php





include "footer.php";
?>