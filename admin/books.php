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
        <button style="margin: 40px auto;width: 50%;" data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-success btn-lg btn-block">
        + Add Book
        <i class="fas fa-book"></i>
        </button>
        <div class="table-responsive">
        <table class="table table-hover table-striped">
         <thead class="thead-dark">
           <tr>
             <th scope="col">ID</th>
             <th scope="col">Name</th>
             <th scope="col">Author</th>
             <th scope="col">Image</th>
             <th scope="col">Book</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         <tbody>
           <tr v-for="book in books" :key="book.id">
             <td>{{book.id}}</td>
             <td>{{book.title}}</td>
             <td>{{book.author}}</td>
             <td><img :src="book.cover" style="width: 50px; height: 40px;" alt="img"></td>
             <td><a :href="book.book_link" target="_blank">link</a></td>
             <td>
             <a href="" @click="editBook(book)" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-edit" style="color: orange"></i></a>
             <a href="" @click="deleteBook(book)"><i class="fas fa-trash-alt" style="color: red"></i></a>
             </td>
           </tr>
         </tbody>
</table>
</div>
        </div>
      </main>
    

    <!-- Bootstrap Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title">Add Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       </div>
      <div class="modal-body">
        <!-- Bootstrap form -->
        <form action="phpAdmin/addBook.php" method="POST">
              <div class="form-group">
                <label>Title</label>
                <input id="title" name="title" type="text" class="form-control" placeholder="Title">
              </div>
              <div class="form-group">
                <label>Author</label>
                <input id="author" name="author" type="text" class="form-control" placeholder="Author">
              </div>
              <div class="form-group">
                <label>Image Url</label>
                <input id="cover" name="cover" type="text" class="form-control" placeholder="Image Url">
              </div>
              <div class="form-group">
                <label>Book Link</label>
                <input id="book_link" name="book_link" type="text" class="form-control" placeholder="Book link">
              </div>
              
              <button type="submit" style="margin-right: 5px" class="btn btn-primary">Save</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
</div>
  
  <!-- Bootstrap Modal Edit Book-->
  <div class="modal" id="exampleModal2" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
          <div class="modal-content">
           <div class="modal-header">
            <h5 class="modal-title">Edit Book</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           </div>
          <div class="modal-body">
            <!-- Bootstrap form -->
            <form action="phpAdmin/editBook.php" method="POST">
                  <div class="form-group">
                    <label>id</label>
                    <input id="id_edit" name="id_edit" type="text" :value="singleBook.id" class="form-control" placeholder="id">
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input :value="singleBook.title" id="title_edit" name="title_edit"  type="text" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label>Author</label>
                    <input id="author_edit" name="author_edit" type="text" :value="singleBook.author" class="form-control" placeholder="Author">
                  </div>
                  <div class="form-group">
                    <label>Image Url</label>
                    <input id="image_url_edit" name="image_url_edit" type="text" :value="singleBook.cover" class="form-control" placeholder="Image Url">
                  </div>
                  <div class="form-group">
                    <label>Book_link</label>
                    <input id="book_link_edit" name="book_link_edit" type="text" :value="singleBook.book_link" class="form-control" placeholder="Book link">
                  </div>
                  
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
