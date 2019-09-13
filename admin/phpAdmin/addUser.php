<?php
session_start();

  $full_name = $_POST['full_name'];
  $email     = $_POST['email'];
  $pass      = $_POST['password'];
  $user      = $_POST['username'];
  $user_type = $_POST['user_type'];

  include 'connection.php';

  if(!$connect) {
      die("Neuspješno povezivanje na bazu");
  }

  $sql = "INSERT INTO `user` (`id`, `full_name`, `email`, `password`, `username`, `user_type`) VALUES ('', '$full_name', '$email', '$pass', '$user', '$user_type')";


  if(mysqli_query($connect, $sql)){
      header("location:../users.php");
  }else {
      echo "Neuspješno upisivanje u bazu ";
  }

  mysqli_close($connect);



?>