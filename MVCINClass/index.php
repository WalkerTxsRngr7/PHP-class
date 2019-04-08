<?php
    session_start();
    
    $pageName = "Register";

    include "./models/database.php";
    include "./views/header.php";

    
    include "./models/user_db.php";
    


    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $added = filter_input(INPUT_POST, 'added');
    $addUser = filter_input(INPUT_GET, 'addUser');
    $addname = filter_input(INPUT_POST, 'addname');
    $addusername = filter_input(INPUT_POST, 'addusername');
    $addpassword = filter_input(INPUT_POST, 'addpassword');

    $lo = filter_input(INPUT_GET, 'lo');
    if ($lo == "y"){
        $_SESSION = array();
        session_destroy();
        header("Location: ./index.php");
    }

    if ($username != NULL && $password != NULL){
        $user = getAUser($username);
        $Username = $user['username'];
        $Password = $user['password'];
        //we know someone has submitted a username
        if ($Username != NULL){
            if ($Password == $password){
                echo("Correct username and password");
                $_SESSION['valid'] = "yes";
                header("Location: ./home.php");
            } else {
                echo ("Incorrect password");
            }
        } else {
            echo ("Incorrect username");
        }
    } else if ($username != NULL || $password != NULL) {
        echo ("Missing information");
    }

    echo ("<h1>Log-In</h1>");

    

    if ($added == TRUE){
        addUser($addname, $addusername, $addpassword);
    }

    if ($addUser != NULL){
        include "./add_form.php";
    } else {
        include "./login.php";
    }


    echo("<a href='./home.php'>Home</a>");
    echo("<br><a href='./?addUser=add'>Register</a>");


    ?>