<?php
session_start();

$id        = $_POST['id_edit'];
$full_name = $_POST['full_name_edit'];
$email     = $_POST['email_edit'];
$pass      = $_POST['password_edit'];
$user      = $_POST['username_edit'];
$type      = $_POST['user_type_edit'];

include 'connection.php';

if(!$connect) {
    header("location:../index.php");
    die("Neuspješno povezivanje na bazu");
}

$sql = "UPDATE `user` SET `full_name` = '$full_name', `email` = '$email', `password`= '$pass', `username` = '$user', `user_type` = '$type' WHERE `user`.`id` = '$id'";

if(mysqli_query($connect, $sql)){
    header("location:../users.php");
} else {
    echo "Neuspješno upisivanje u bazu";
}

mysqli_close($connect);

?>