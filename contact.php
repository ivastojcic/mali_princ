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
        <div class="jumbotron">
          <div class="container">
            <h1 class="display-4">Kontakt podaci</h1>
            <ul>
            <li>Telefon: (+387) 123123123</li>
            <li>Fax: (+387) 123123123</li>
            <li>Adresa: </li>
            <li>E-mail: </li>
            </ul>
            <hr class="my-4" />
            <div class="social-network">
            <a href="https://facebook.com"><i class="fab fa-facebook-square"></i></a>
            <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
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
