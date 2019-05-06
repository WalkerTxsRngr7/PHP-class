<?php
session_start();
$title = "Home";
include "../views/header.php";

?>


<?php
// include '../models/requests.php';



include "../product/product_list.php";

    
include "../views/footer.php";
?>