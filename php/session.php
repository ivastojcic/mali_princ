<?php
include 'connection.php';
session_start();// Pokretanje sesije
//Spremanje sesije

if(!isset($_SESSION['login_user'])){
    header("Location: login.php");
}
$user_check=$_SESSION['login_user'];

$query = mysqli_query($connect, "SELECT username FROM user WHERE username = '$user_check'");

$row = mysqli_fetch_assoc($query);

$login_session = $row['username'];

if(!isset($login_session)){
mysqli_close($connect); // Zatvaranje konekcije
}
?>
