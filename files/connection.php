<?php
$hostname = 'localhost';
$dbuser = 'root';
$password = '';
$dbname = 'nairobieventsclub';

$conn = mysqli_connect($hostname,$dbuser,$password,$dbname);
if(!$conn){
    die("something went wrong");
}
?>

