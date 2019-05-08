<?php
session_start();
$title = "Admin";
$headTitle = "Admin";
include "../views/header.php";

$productID = filter_input(INPUT_POST, "productID");
$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");
$adminBtn = filter_input(INPUT_POST, "adminBtn");
$modify = filter_input(INPUT_POST, "modify");
$newProdName = filter_input(INPUT_POST, "newProdName");
$newPrice = filter_input(INPUT_POST, "newPrice");
$newQty = filter_input(INPUT_POST, "newQty");
$newImage = filter_input(INPUT_POST, "newImage");
$oldImage = filter_input(INPUT_POST, "oldImage");


if (!empty($username) && !empty($password)){
    if (md5($username) == '5f4dcc3b5aa765d61d8327deb882cf99' && md5($password) == '14c4b06b824ec593239362517f538b29') { //U:Walker  P:pass
        $_SESSION['login'] = 'valid';
    } else {
        echo ("<h4 style='color: red; text-align: center;'>Your Username or Password is incorrect</h4>");
    }
    
} else if (!empty($username) || !empty($password)){
    echo ("<h4 style='color: red;text-align:center;'>You must enter both username and password</h4>");
}
  
if (isset($_SESSION['login']) == "valid"){
    include "./admin.php";
} else {
    include "./login.php";
}


include "../views/footer.php";
  
?>