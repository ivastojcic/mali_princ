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
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">
              This is a simple hero unit, a simple jumbotron-style component for
              calling extra attention to featured content or information.
            </p>
            <hr class="my-4" />
            <p>
              It uses utility classes for typography and spacing to space
              content out within the larger container.
            </p>
            <a class="btn btn-primary btn-lg" href="Vizija.docx" role="button"
              >Vizija</a
            >
          </div>
        </div>
      </main>
      <Bottom></Bottom>
    </div>
    <?php include('partials/scripts.php'); ?>

    <script src="main.js"></script>
  </body>
</html>
