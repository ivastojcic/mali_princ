<?php
include('../php/session.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <div id="admin">
      <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Admin Panel</a>
      </nav>
      <main>
        <div class="row" style="padding: 0 20px; margin: 50px 0">
          <div class="col-12 col-md-4">
            <div
              class="nav flex-column nav-pills"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical"
              style="margin-bottom: 20px;"
            >
              <a
                class="nav-link active"
                id="v-pills-home-tab"
                data-toggle="pill"
                href="#v-pills-home"
                role="tab"
                aria-controls="v-pills-home"
                aria-selected="true"
                >Dashboard</a
              >
              <a
                class="nav-link"
                id="v-pills-profile-tab"
                data-toggle="pill"
                href="#v-pills-profile"
                role="tab"
                aria-controls="v-pills-profile"
                aria-selected="false"
                >Users</a
              >
              <a
                class="nav-link"
                id="v-pills-messages-tab"
                data-toggle="pill"
                href="#v-pills-messages"
                role="tab"
                aria-controls="v-pills-messages"
                aria-selected="false"
                >Books</a
              >
              <a
                class="nav-link"
                id="v-pills-settings-tab"
                data-toggle="pill"
                href="#v-pills-settings"
                role="tab"
                aria-controls="v-pills-settings"
                aria-selected="false"
                >Roles</a
              >
            </div>
          </div>
          <div class="col-12">
            <div class="tab-content" id="v-pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="v-pills-home"
                role="tabpanel"
                aria-labelledby="v-pills-home-tab"
              >
                <div
                  class="card text-white bg-success mb-3"
                  style="max-width: 18rem;"
                >
                  <div class="card-header">Users</div>
                  <div class="card-body">
                    <h5 class="card-title"> Total Users</h5>
                    <p class="card-text" style="font-size: 20px">
                      {{users.length}}
                    </p>
                  </div>
                </div>
                <div
                  class="card text-white bg-warning mb-3"
                  style="max-width: 18rem;"
                >
                  <div class="card-header">Books</div>
                  <div class="card-body">
                    <h5 class="card-title"> Total Books</h5>
                    <p class="card-text" style="font-size: 20px">
                      {{books.length}}
                    </p>
                  </div>
                </div>
              </div>
              <div
                v-if="users.length > 0"
                class="tab-pane fade"
                id="v-pills-profile"
                role="tabpanel"
                aria-labelledby="v-pills-profile-tab"
              >
                <v-table-users :users="users"></v-table>
              </div>
              <div
              v-if="books.length > 0"
                class="tab-pane fade"
                id="v-pills-messages"
                role="tabpanel"
                aria-labelledby="v-pills-messages-tab"
              >
              <v-table-books :books="books"></v-table>

              </div>
              <div
                class="tab-pane fade"
                id="v-pills-settings"
                role="tabpanel"
                aria-labelledby="v-pills-settings-tab"
              >
              <v-table></v-table>

              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="admin.js"></script>
  </body>
</html>
