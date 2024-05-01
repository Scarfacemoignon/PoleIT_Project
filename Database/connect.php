<?php
$host = 'localhost';
$user = 'root';
$mdp = '';
$dtb = 'poleit';

$connect = mysqli_connect($host, $user, $mdp, $dtb);

if ($connect->connect_error) {
    die("unsucsseful connexion : " . $connect->connect_error);
}
?>