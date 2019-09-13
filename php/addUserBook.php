<?php
  session_start();
  
  include 'connection.php';
  
  $data       = json_decode(file_get_contents("php://input"));
  $title      = $data->title;
  $author     = $data->author;
  $cover      = $data->cover;
  $book_link  = $data->book_link;

  if(!$connect) {
      die("Neuspješno povezivanje na bazu");
  }

  $sql = "INSERT INTO user_books (id, title, author, cover, book_link) VALUES (NULL, '$title', '$author', '$cover', '$book_link')";

  if(mysqli_query($connect, $sql)){
      header("location: ../myBooks.php");
  }else {
      echo "<div style='background:red; width: 70%; padding: 50px;color: white;margin: 40px auto;'>Neuspješno upisivanje u bazu - unešena cijena nije ispravna <a href='../index.php'>vrati se na admina</a></div>";
  }

  mysqli_close($connect);

?>