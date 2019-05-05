<?php
session_start();
$title = "Home";
include "../views/header.php";

?>
<form action="cart.php" method="get">
    <div id='name'>
        <p>Name: </p>
        <input type="text" name="name" style='margin-left: 15px; height: 25px'>
    </div>

    <?php
    $order = filter_input(INPUT_GET, "order");
    $customerName = filter_input(INPUT_GET, "name");
    
    printCart();
    
    if ($order != null){
        order($customerName);
    }
    ?>

    <!-- <button type='button' name='order' value='confirm' >Order</button> -->


</form>

<?php





include "footer.php";
?>