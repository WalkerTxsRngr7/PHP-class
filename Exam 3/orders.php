<h3>Orders</h3>
<?php
    
    $orders = getAllOrders($custID);

    foreach ($orders as $order) {
        echo ($order['orderDate']."<br>");
    }


?>
