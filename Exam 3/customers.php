<h3>Customers</h3>
<?php
    
    $customers = getAllCustomers();

    foreach ($customers as $customer) {
        $custLink = "<a href='?custID=$customer[customerID]'>$customer[firstName] $customer[lastName]</a><br>";
        echo ($custLink);
    }


?>
