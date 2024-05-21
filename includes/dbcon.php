<?php


//For XAMPP
$ser = 'localhost';
$db = 'bee_sms';
$usr = 'root';
$pwd = '';
$conn = mysqli_connect($ser, $usr, $pwd, $db);
if (!$conn) {
    die('connection failed');
}

?>