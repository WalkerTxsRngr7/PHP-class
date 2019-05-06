<?php
session_start();
$title = "Admin";
include "../views/header.php";
include '../models/requests.php';
?>
<h1>Admin</h1>



<?php
    if (isset($username) && isset($password)){
        if ($username == 'Walker' && $password == 'pass') {
            $_SESSION['login'] = 'valid';
        } else {
            echo ("<h3 style='color: red;'>Your Username or Password is incorrect</h3>");
        }
        
    }

    if (!isset($_SESSION['login'])){
        include "./login.php";
    } else if ($_SESSION['login'] != "valid"){
        header("Location: ../product");
    }





include "../views/footer.php";
  
?>