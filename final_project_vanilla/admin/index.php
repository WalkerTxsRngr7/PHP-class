<?php
session_start();
$title = "Admin";
include "../views/header.php";


$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");
$adminBtn = filter_input(INPUT_POST, "adminBtn");
$added = filter_input(INPUT_POST, "added");
$addProdName = filter_input(INPUT_POST, "addProdName");
$addQty = filter_input(INPUT_POST, "addQty");
$addImage = filter_input(INPUT_POST, "addImage");
?>
<h1>Admin</h1>



<?php



//  else if ($_SESSION['login'] != "valid"){
//     header("Location: ../product");
// }


if (!empty($username) && !empty($password)){
    if (md5($username) == 'd719083f59856e34a37e2137e2241d80' && md5($password) == '1a1dc91c907325c69271ddf0c944bc72') { //U:Walker  P:pass
        $_SESSION['login'] = 'valid';
    } else {
        echo ("<h4 style='color: red;'>Your Username or Password is incorrect</h4>");
    }
    
} else if (!empty($username) || !empty($password)){
    echo ("<h4 style='color: red;'>You must enter both username and password</h4>");
}
  
if (isset($_SESSION['login']) == "valid"){
    echo "<h1>You are logged in.</h1>";
    include "./admin.php";
} else {
    include "./login.php";
}




include "../views/footer.php";
  
?>