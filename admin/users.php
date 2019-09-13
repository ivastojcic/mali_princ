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
      <li class="nav-item active">
        <a class="nav-link" href="users.php">Users <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="books.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="roles.php">Role Management</a>
      </li>
      
    </ul>
    <a href="../php/logout.php" class="btn btn-outline-danger">Logout</a>
  </div>
</nav>
      <main>
        <div class="container" v-if="users">
        <button style="margin: 40px auto;width: 50%;" data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-success btn-lg btn-block">
        + Add User
        <i class="fas fa-user"></i>
        </button>
        <div class="table-responsive">
        <table class="table table-hover table-striped">
         <thead class="thead-dark">
           <tr>
             <th scope="col">ID</th>
             <th scope="col">Full Name</th>
             <th scope="col">Email</th>
             <th scope="col">Password</th>
             <th scope="col">Username</th>
             <th scope="col">User_Type</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         <tbody>
           <tr v-for="user in users" :key="user.id">
             <td>{{user.id}}</td>
             <td>{{user.full_name}}</td>
             <td>{{user.email}}</td>
             <td>{{user.password}}</td>
             <td>{{user.username}}</td>
             <td>{{user.user_type}}</td>
             <td>
             <a href="" @click="editUser(user)" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-edit" style="color: orange; cursor:pointer"></i></a>
             <i class="fas fa-trash-alt" @click="deleteUser(user)" style="color: red; cursor:pointer"></i>
             </td>
           </tr>
         </tbody>
</table>
</div>
        </div>
        <div class="loaders" v-else>
         <Loader></Loader>
        </div>
      </main>
    

        <!-- Bootstrap Modal Add User-->
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
          <div class="modal-content">
           <div class="modal-header">
            <h5 class="modal-title">Add User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           </div>
          <div class="modal-body">
            <!-- Bootstrap form -->
            <form action="phpAdmin/addUser.php" method="POST">
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
                  <label>Select Role</label>
                  <select style="margin-bottom: 5px;" name="user_type" id="user_type" class="custom-select">
                   <option selected>Select your role</option>
                   <option value="member">Member</option>
                   <option value="admin">Admin</option>
                   <option value="admin">Superadmin</option>
                  </select>
                  
                  <button type="submit" style="margin-right: 5px" class="btn btn-primary">Save</button>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap Modal Edit User-->
        <div class="modal" id="exampleModal2" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
          <div class="modal-content">
           <div class="modal-header">
            <h5 class="modal-title">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           </div>
          <div class="modal-body">
            <!-- Bootstrap form -->
            <form action="phpAdmin/editUser.php" method="POST">
                  <div class="form-group">
                    <label>id</label>
                    <input id="id_edit" name="id_edit" type="text" :value="singleUser.id" class="form-control" placeholder="id">
                  </div>
                  <div class="form-group">
                    <label>Full Name</label>
                    <input id="full_name_edit" :value="singleUser.full_name" name="full_name_edit"  type="text" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input id="email_edit" name="email_edit" type="text" :value="singleUser.email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input id="password_edit" name="password_edit" type="text" :value="singleUser.password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input id="username_edit" name="username_edit" :value="singleUser.username" type="text" class="form-control" placeholder="Username">
                  </div>
                  <label>Select Role</label>
                  <select style="margin-bottom: 5px;" name="user_type_edit" id="user_type_edit" class="custom-select">
                   <option value="member">Member</option>
                   <option value="admin">Admin</option>
                   <option value="admin">Superadmin</option>
                  </select>
                  
                  <button type="submit" style="margin-right: 5px" class="btn btn-primary">Save</button>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          </div>
        </div>
      </div>
      </div>
    <?php include('../partials/scripts.php'); ?>

    <script src="admin.js"></script>
  </body>
</html>
