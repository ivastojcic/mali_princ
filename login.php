<?php

    include("php/login.php");//uključujemo login
		if(isset($_SESSION['login_user'])){
		if($_SESSION["user_type"] == "admin"){
			header("Location: admin/index.php");//preusmjeravanje na admin panel
		}else if($_SESSION["user_type"] == "member"){
			header("location: member.php");
		} else {
      header("location: index.php");
    }
}
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
        <div class="login-form">
            <h1>Login</h1>
            <form method="POST">
              <div class="form-group">
                <label>User Name</label>
                <input id="user" name="user" type="text" class="form-control" placeholder="User Name">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="pass" name="pass" type="password" class="form-control" placeholder="Password">
              </div>
              <select name="user_type" id="user_type" class="custom-select">
               <option selected>Select your role</option>
               <option value="member">Member</option>
               <option value="admin">Admin</option>
              </select>
              <button type="submit" style="margin-right: 5px" class="btn btn-primary" name="login">Login</button>
                <a type="submit" href="register.php" class="btn btn-success">Register</a>
                <h6 style="color:red; text-align: right"><?php echo $error; ?></h6>

            </form>
          </div>
      </main>
      <Bottom></Bottom>
    </div>
    <?php include('partials/scripts.php'); ?>

    <script src="main.js"></script>
  </body>
</html>
