<?php
session_start();

$id        = $_POST['id_edit'];
$title     = $_POST['title_edit'];
$author    = $_POST['author_edit'];
$img_url   = $_POST['image_url_edit'];
$book_link = $_POST['book_link_edit'];

include 'connection.php';

if(!$connect) {
    header("location:../index.php");
    die("Neuspješno povezivanje na bazu");
}

$sql = "UPDATE `books` SET `title` = '$title', `author` = '$author', `cover`= '$img_url', `book_link` = '$book_link' WHERE `books`.`id` = '$id'";

if(mysqli_query($connect, $sql)){
    header("location:../books.php");
} else {
    header("location:../index.php");
    echo "Neuspješno upisivanje u bazu";
}

mysqli_close($connect);

?>