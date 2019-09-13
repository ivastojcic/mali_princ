<?php
session_start();
  $title     = $_POST['title'];
  $author    = $_POST['author'];
  $cover     = $_POST['cover'];
  $book_link = $_POST['book_link'];

  include 'connection.php';

  if(!$connect) {
      die("Neuspješno povezivanje na bazu");
  }

  $sql = "INSERT INTO books (id, title, author, cover, book_link) VALUES (NULL, '$title', '$author', '$cover', '$book_link')";

  if(mysqli_query($connect, $sql)){
      header("location: ../books.php");
  }else {
      echo "<div style='background:red; width: 70%; padding: 50px;color: white;margin: 40px auto;'>Neuspješno upisivanje u bazu - unešena cijena nije ispravna <a href='../index.php'>vrati se na admina</a></div>";
  }

  mysqli_close($connect);



?>