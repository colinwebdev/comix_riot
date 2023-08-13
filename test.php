<?php
$host = '';
$user = '';
$password = '';
$dbname = '';

$db = new mysqli($host,$user,$password,$dbname);
if ( $db && ( !$db->connect_errno || $db->connect_errno == 0 ) ) {
    $db->set_charset("utf8");
    echo "Connected";
} else {
    echo "No connection";
}


// $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected successfully";