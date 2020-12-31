<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AbhiCode | peer to peer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 container-fluid bg-dark text-white">
          <h1 class="text-center font-weight-bold">CodeCode</h1>
        </div>
        <div class="col-md-6 container-fluid bg-dark">
          <div class="row">
            <div
              class="col-4 pt-3 text-warning text-center my-auto font-weight-bold text-capitalize"
            >
              <a
                href="./index.php"
                class="text-warning text-center my-auto font-weight-bold text-capitalize"
                >home</a
              >
            </div>
            <div
              class="col-4 pt-3 text-warning text-center my-auto font-weight-bold text-capitalize"
            >
              <a
                href="./admin.php"
                class="text-warning text-center my-auto font-weight-bold text-capitalize"
                >admin</a
              >
            </div>
            <div
              class="col-4 pt-3 text-warning text-center my-auto font-weight-bold text-capitalize"
            >
              <a
                href="./info.php"
                class="text-warning text-center my-auto font-weight-bold text-capitalize"
                >info</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- duplicating the code for the sticky position purpose -->

    <div class="container-fluid bg-success text-white text-center">
      <h1 class="font-weight-bold text-capitalize">think first code next</h1>
    </div>

    <!-- the upper part is nav bar and heading part -->
    <!-- the slider is on the topics and it is copied from bootstrap -->
    <div class="container shadow-lg p-0">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./quote1.jpeg"
              width="100%"
              height="400"
              alt="Los Angeles"
            />
          </div>
          <div class="carousel-item">
            <img src="./quote2.jpeg" width="100%" height="400" alt="Chicago" />
          </div>
          <div class="carousel-item">
            <img src="./quote3.png" width="100%" height="400" alt="New York" />
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>

    <!-- the end of the slider from bootstrap -->

    <div class="container">
      <div class="row d-flex justify-content-around">
        <!-- this is first topic -->
        <div
          class="col-md-5 shadow-lg card border-0 p-0 m-2 text-capitalize font-weight-bold text-center"
        >
          <div class="card-header border border-3 border-danger">
            <h4 class="card-title font-weight-bold">
              git and github tutorials
            </h4>
          </div>
          <div class="card-body border border-3 border-danger">
            <p class="card-text">
              a brief description on git and github. command line interface is
              used to perfom git operations.
            </p>
          </div>
          <div class="card-footer border border-danger border-3">
            <a
              href="./gitpage.php"
              class="btn btn-outline-danger btn-sm font-weight-bold"
              >explore</a
            >
          </div>
        </div>
        <!-- this is second topic -->
        <div
          class="col-md-5 shadow-lg card border-0 p-0 m-2 text-capitalize font-weight-bold text-center"
        >
          <div class="card-header border border-3 border-info">
            <h4 class="card-title font-weight-bold">c programming language</h4>
          </div>
          <div class="card-body border border-3 border-info">
            <p class="card-text">
              basics of c programming language is discussed perfectly with real
              world examples realting to the concepts.
            </p>
          </div>
          <div class="card-footer border border-info border-3">
            <a
              href="./cpage.php"
              class="btn btn-outline-info btn-sm font-weight-bold"
              >explore</a
            >
          </div>
        </div>
        <!-- this is third topic  -->
        <div
          class="col-md-5 shadow-lg card border-0 p-0 m-2 text-capitalize font-weight-bold text-center"
        >
          <div class="card-header border border-3 border-primary">
            <h4 class="card-title font-weight-bold">c++ tutorials</h4>
          </div>
          <div class="card-body border border-3 border-primary">
            <p class="card-text">
              a brief overview on c++ language and few talks on OOPs concepts.
              small interesting projects.
            </p>
          </div>
          <div class="card-footer border border-primary border-3">
            <a href="#" class="btn btn-outline-primary btn-sm font-weight-bold"
              >explore</a
            >
          </div>
        </div>
        <!-- this is fourth topic -->
        <div
          class="col-md-5 shadow-lg card border-0 p-0 m-2 text-capitalize font-weight-bold text-center"
        >
          <div class="card-header border border-3 border-warning">
            <h4 class="card-title font-weight-bold">pyhton programming</h4>
          </div>
          <div class="card-body border border-3 border-warning">
            <p class="card-text">
              perfect glance into the most popular programming language.
              covering all basic concepts.
            </p>
          </div>
          <div class="card-footer border border-warning border-3">
            <a href="#" class="btn btn-outline-warning btn-sm font-weight-bold"
              >explore</a
            >
          </div>
        </div>
        <!-- this is fifth topic -->
        <div
          class="col-md-5 shadow-lg card border-0 p-0 m-1 text-capitalize font-weight-bold text-center"
        >
          <div class="card-header border border-3 border-success">
            <h4 class="card-title font-weight-bold">
              HTML concepts and basics
            </h4>
          </div>
          <div class="card-body border border-3 border-success">
            <p class="card-text">
              a walk to static website development basics using html concepts.
            </p>
          </div>
          <div class="card-footer border border-success border-3">
            <a href="#" class="btn btn-outline-success btn-sm font-weight-bold"
              >explore</a
            >
          </div>
        </div>
      </div>
    </div>

    <!-- this is the end of topic using with cards and other  -->
    <!-- the footer of the website begins here -->

    <div class="container-fluid bg-dark font-weight-bold text-center p-1 mt-1">
      <h5 class="text-info text-capitalize p-2">author: AbhiShekGedelaCode</h5>
      <h6 class="text-warning p-2 text-center">
        gabhishekji143@gmail.com <br> ABHISHEK GEDELA
      </h6>
    </div>
  </body>
</html>
