<!DOCTYPE html>
<html>
  <head>
    <?php include('partials/head.php'); ?>

    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div id="app">
      <Navbar></Navbar>
      <div class="slider-container">
        <div class="container">
          <div
            id="carouselExampleSlidesOnly"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./assets/mali-princ-knjizara.png" alt="mali princ" />
              </div>
              <div class="carousel-item">
                <img src="./assets/knjizara.jpg" alt="mali princ1" />
              </div>
              
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleSlidesOnly"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleSlidesOnly"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <main>
        <div class="container">
          <h2 style="margin: 10px 0 50px 0; text-align: center"> Dostupne Knjige </h2>
          <div style="margin-bottom: 50px;" class="search-books">
              <input
              class="form-control"
              type="search"
              placeholder="Pretraži Knjige"
              aria-label="Search"
              v-model="search"
            />
          </div>

          <div class="row">
            <div
              v-if="books"
              class="col col-12 col-lg-4"
              v-for="book in filterBooks"
              :key="book.id"
            >
              <Book :book="book" :member="member"></Book>
            </div>
            <div v-else class="loaders">
              <Loader></Loader>
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
