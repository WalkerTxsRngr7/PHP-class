<?php
session_start();
$title = "Home";
include "../views/header.php";

?>

<button type="link" href='cart.php' id='cartBtn' class="btn btn-outline-info cartBtn">Cart</button>
<a href="./cart.php" class="btn btn-outline-info cartBtn">Cart</a>

<?php
$productID = filter_input(INPUT_GET, "productID");
$productName = filter_input(INPUT_GET, "productName");
$qty = filter_input(INPUT_GET, "qty");
$orderNow = filter_input(INPUT_GET, "orderNow");

$lo = filter_input(INPUT_GET, 'lo');
if ($lo == "y"){
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
}


include "../product/product_list.php";
if ($qty != null){
    cart($productName, $qty);
    if ($orderNow == 'now'){
        header("Location: cart.php");
    }
}
    
include "footer.php";
?>