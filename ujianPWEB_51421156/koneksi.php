<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db_name = 'ujianpweb';

$conn = new mysqli($host,$user,$pwd,$db_name);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
?>