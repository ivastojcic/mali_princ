<?php
include('../php/session.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include('../partials/head.php'); ?>

    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <div id="admin">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Dashboard </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="users.php">Users </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="books.php">Books <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="roles.php">Role Management</a>
      </li>
      
    </ul>
    <a href="../php/logout.php" class="btn btn-outline-danger">Logout</a>
  </div>
</nav>
      <main>
      <div class="container">
        <h1 style="margin: 20px 0">Update Book</h1>
        <form style="margin: 50px 0" action="phpAdmin/updateBook.php" method="POST">
          <div class="form-group">
            <label>Title</label>
            <input id="title" name="title" type="text" class="form-control" placeholder="Title">
          </div>
          <div class="form-group">
            <label>Price</label>
            <input id="price" name="price" type="text" class="form-control" placeholder="Price">
          </div>
          <div class="form-group">
            <label>Image Url</label>
            <input id="cover" name="cover" type="text" class="form-control" placeholder="Image Url">
          </div>
          
          <button type="submit" style="margin-right: 5px" class="btn btn-primary">Save</button>
        </form>
      </div>
      </main>
    </div>

    
    <?php include('../partials/scripts.php'); ?>

    <script src="admin.js"></script>
  </body>
</html>
