Vue.component("Loader", {
  template: `
  <div>
  <div class="spinner-grow text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
</div></div>
  `
});

new Vue({
  el: "#admin",
  data: {
    users     : [],
    books     : [],
    singleUser: {},
    singleBook: {}
  },
  methods: {
    fetchUsers() {
      fetch("../php/users.php")
        .then(res => res.json())
        .then(data => (this.users = data));
    },
    fetchBooks() {
      fetch("../php/fetchBooks.php")
        .then(res => res.json())
        .then(data => (this.books = data));
    },
    deleteUser(user) {
      if (confirm("Jeste li sigurni da zelite obrisati " + user.full_name)) {
        fetch("phpAdmin/deleteUser.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({ id: user.id })
        }).then(response => this.fetchUsers());
      } else {
        return false;
      }
    },
    deleteBook(book) {
      if (confirm("Jeste li sigurni da zelite obrisati " + book.title)) {
        fetch("phpAdmin/deleteBook.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({ id: book.id })
        }).then(response => this.fetchBooks());
      } else {
        return false;
      }
    },
    editUser(user) {
      this.singleUser = user;
    },
    editBook(book) {
      this.singleBook = book;
    }
  },
  created() {
    this.fetchUsers();
    this.fetchBooks();
  }
});
