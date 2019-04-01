<?php
echo ("<h2>Thank you for subscribing!</h2>");
//gets their info
$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
//displays their info back to them
echo ("<h3>Name: </br></h3><h4>$name</h4>");
echo ("<h3>Phone Number: </br></h3><h4>$phone</h4>");
echo ("<h3>Email: </br></h3><h4>$email</h4>");





?>