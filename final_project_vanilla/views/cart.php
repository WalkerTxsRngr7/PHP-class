<?php
session_start();
$title = "Home";
include "../views/header.php";

?>
<form action="cart.php" method="get">

    <?php
    printCart();
    ?>

    <!-- <button type='button' name='order' value='confirm' >Order</button> -->
    

</form>

<?php





include "footer.php";
?>