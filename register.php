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
        <div class="login-form">
            <h1>Register</h1>
            <form action="php/addUser.php" method="POST">
              <div class="form-group">
                <label>Full Name</label>
                <input id="full_name" name="full_name" type="text" class="form-control" placeholder="Full Name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input id="email" name="email" type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="password" name="password" type="text" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input id="username" name="username" type="text" class="form-control" placeholder="Username">
              </div>
              <button type="submit" style="margin-right: 5px" class="btn btn-primary">Register</button>
            </form>
          </div>
      </main>
      <Bottom></Bottom>
    </div>
    <?php include('partials/scripts.php'); ?>

    <script src="main.js"></script>
  </body>
</html>
