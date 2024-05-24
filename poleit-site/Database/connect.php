<?php
// $host = get_env("MYSQL_HOST");
// $user = get_env("MYSQL_USER");
// $mdp = get_env("MYSQL_ROOT_PASSWORD");
// $dtb = get_env("MYSQL_DATABASE");

$host = 'mysql';
$user = 'sited';
$mdp = 'sited';
$dtb = 'poleit';


$connect = mysqli_connect($host, $user, $mdp, $dtb);

if ($connect->connect_error) {
    die("unsucsseful connexion : " . $connect->connect_error);
}
?>