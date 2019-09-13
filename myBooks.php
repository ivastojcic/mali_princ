<?php
  include('php/session.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include('partials/head.php'); ?>

    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div id="app">
      <Navbar></Navbar>
      <main>

      <div class="container">
      <h1 style="margin: 50px 0;">Moje Knjige</h1>
      <div class="row">
          <div
            v-if="userBooks"
            class="col col-12 col-lg-4"
            v-for="userBook in userBooks"
            :key="userBook.id"
            >
            <Book :book="userBook" :my-books="myBooks"></Book>
          </div>
        
          <div v-else class="jumbotron">
          <div class="container">
            <h1 class="display-4">Trenutno nemate nijednu knjigu</h1>
            <p class="lead">
              Dodajte knjige kako biste ih mogli čitati!
            </p>
            
          </div>
        
          </div>
        </div>
      </div>
      </main>
      <Bottom></Bottom>
    </div>
    <?php include('partials/scripts.php'); ?>

    <script src="main.js"></script>
  </body>
</html>
