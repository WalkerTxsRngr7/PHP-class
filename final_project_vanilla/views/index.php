<?php
session_start();
$title = "Home";
include "../views/header.php";

?>

<button type="link" href='cart.php' id='cartBtn' class="btn btn-outline-info cartBtn">Cart</button>
<a href="./cart.php" class="btn btn-outline-info cartBtn">Cart</a>

<?php
include './requests.php';

$lo = filter_input(INPUT_GET, 'lo');
if ($lo == "y"){
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
}


include "../product/product_list.php";

    
include "footer.php";
?>