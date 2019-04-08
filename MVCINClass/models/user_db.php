<?php

/** RETURN A SINGLE EMPLOYEE NAME FROM A GIVEN EMPLOYEE ID */
function getAUser($username){
    global $db;

    $sql = "SELECT * FROM users WHERE username = '$username'";
    // echo ($sql);
    // $qry = mysqli_query($db, $sql);
    

    $qry = $db->query($sql);
    $user = $qry->fetch();

    // $employee = mysqli_fetch_all($qry, MYSQLI_ASSOC);
    return $user;
}

function addUser($name, $username, $password){
    global $db;


    $sql = "INSERT INTO `users`(`name`, `username`, `password`) VALUES ('$name','$username','$password')";
    // echo $sql;
    $pdoS = $db->query($sql);
}