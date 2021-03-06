<?php 
session_start(); // untuk memulai session
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Explorer</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="src/styles/style.css" />
    <link rel="stylesheet" href="src/styles/responsive.css" />
  </head>

  <body>
    <!-- Skip To Content -->
    <div class="skip-to-content">
      <a href="#content" class="skip-button">Menuju Ke Konten</a>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container-fluid">
        <a href="/">
          <h3 class="logo">
            explorer<img src="src/img/logo1.png" alt="Logo of Explorer" />
          </h3>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#class-section" class="nav-link">Class</a>
            </li>
            <li class="nav-item">
              <a href="#about-us" class="nav-link">About Us</a>
            </li>
            
            <!-- Kalau session ada maka yang tampil logout -->
            <?php if (isset($_SESSION['username'])){ ?> 
              <li class="nav-item"><a href="./src/auth/logout.php" class="nav-link sign-up-btn">logout</a></li>
              <!-- href logout untuk jalanin file logout -->
            <!-- kalau session gak ada maka yang tampil tombol signup -->
            <?php } else{?>
              <li class="nav-item"><a href="./src/templates/register.php" class="nav-link sign-up-btn">Sign Up</a></li>
            <?php }?>
            
          </ul>
        </div>
      </div>
    </nav>

    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
      <div class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="src/img/background.jpg" />
          <div class="carousel-caption">
            <h2 class="display-2">We Are The Explorers</h2>
            <h3>Learn Website Developing With Us</h3>
            <a href="#class-section" class="btn btn-outline-light btn-lg"
              >VIEW CLASS</a
            >
            <a href="/src/templates/html5.html" class="btn btn-primary btn-lg"
              >GET STARTED</a
            >
          </div>
        </div>
        <div class="carousel-item">
          <img src="src/img/background2.jpg" />
          <div class="carousel-caption">
            <h2 class="display-2">Let's Coding</h2>
            <h3>Which One Do You Prefer ?</h3>
            <a href="../src/templates/html5.php" class="btn btn-primary btn-lg"
              >FRONT - END</a
            >
            <a href="/src/templates/javascript-1.php" class="btn btn-primary btn-lg"
              >BACK - END</a
            >
          </div>
        </div>
      </div>
    </div>

    <main id="content">
      <!--- Welcome Section -->
      <div class="container-fluid padding" id="class-section">
        <div class="row welcome text-center col-12">
          <div class="col-12">
            <h2 class="display-4"><q>Coding Like Playing</q></h2>
          </div>
          <div class="welcome-box">
            <p class="lead col-12 text-center">
              We truly interested to be the part of journey being a Software
              Developer ~!
            </p>
          </div>
        </div>
      </div>

      <!--- Three Column Section -->
      <div class="container-fluid">
        <div class="row text-center padding">
          <div class="col-sm-6 col-md-4 selection-item">
            <i class="fab fa-html5"></i>
            <h3>HTML5</h3>
            <p>The skeleton of everything that you see in your browser.</p>
            <a
              href="./src/templates/html5.php"
              type="button"
              class="btn btn-outline-primary btn-md"
              >Learn HTML5</a
            >
          </div>
          <div class="col-sm-6 col-md-4 selection-item">
            <i class="fab fa-css3"></i>
            <h3>CSS</h3>
            <p>Decoration, color, design and layouting of every component.</p>
            <a
              href="./src/templates/css-1.php"
              type="button"
              class="btn btn-outline-primary btn-md"
              >Learn CSS3</a
            >
          </div>
          <div class="col-sm-12 col-md-4 selection-item">
            <i class="fab fa-js"></i>
            <h3>JAVASCRIPT</h3>
            <p>What actually happened behind the interactive component.</p>
            <a
              href="./src/templates/javascript-1.php"
              type="button"
              class="btn btn-outline-primary btn-md"
              >Learn Javascript</a
            >
          </div>
        </div>
        <hr class="my-4" />
      </div>

      <!--- Two Column Section -->
      <div class="container-fluid">
        <div class="row padding">
          <div class="col-lg-6">
            <h2 class="title-box">What Make Us Different</h2>
            <p class="text-justify text-box">
              We truly appreciate for every people that join our community, as
              doing it solo can be hard, it would easier to do this together.
              <br /><br />
              So we are very open to every question that would be asked through
              our account social media and guess what ? You just got your
              PRIVATE MENTOR.
            </p>
          </div>
          <div class="col-lg-6">
            <img src="src/img/desk.jpg" alt="..." class="img-fluid" />
          </div>
        </div>
        <hr class="my-4" />
      </div>

      <!--- Meet the team -->
      <div class="container-fluid padding">
        <div class="welcome text-center">
          <div class="col-12">
            <h2 class="display-4" id="about-us">About Us</h2>
            <hr />
          </div>
        </div>
      </div>

      <!--- Cards -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <img src="src/img/team1.jpg" alt="..." class="card-img-top" />
              <div class="card-body">
                <h3 class="card-title">Ardhiyan Abdul Hakim</h3>
                <p class="card-text">
                  Student in University of Jenderal Soedirman,<br />Bachelor
                  Degree of Electrical Engineering
                </p>
                <hr />
                <div class="row text-center">
                  <div class="col-12 social">
                    <a
                      href="https://www.facebook.com/ardhiyan.abdul/"
                      target="_blank"
                      ><i class="fab fa-facebook card-profile"></i
                    ></a>
                    <a href="https://twitter.com/AnonymBeing" target="_blank"
                      ><i class="fab fa-twitter card-profile"></i
                    ></a>
                    <a
                      href="https://www.instagram.com/yaaaaaaaaaannnnn/"
                      target="_blank"
                      ><i class="fab fa-instagram card-profile"></i
                    ></a>
                    <a
                      href="https://www.linkedin.com/in/ardhiyanah/ "
                      target="_blank"
                      ><i class="fab fa-linkedin card-profile"></i
                    ></a>
                    <a href="https://github.com/ardhiyan-hakim" target="_blank"
                      ><i class="fab fa-github card-profile"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <img src="src/img/team2.jpg" alt="..." class="card-img-top" />
              <div class="card-body">
                <h3 class="card-title">Rizqi Fauzul Fitria</h3>
                <p class="card-text">
                  Student in University of Diponegoro,<br />Bachelor Degree of
                  Industrial Engineering
                </p>
                <hr />
                <div class="row text-center">
                  <div class="col-12 social">
                    <a href="#" target="_blank"
                      ><i class="fab fa-facebook card-profile"></i
                    ></a>
                    <a href="#" target="_blank"
                      ><i class="fab fa-twitter card-profile"></i
                    ></a>
                    <a
                      href="https://www.instagram.com/rizqifauzul_/"
                      target="_blank"
                      ><i class="fab fa-instagram card-profile"></i
                    ></a>
                    <a
                      href="https://www.linkedin.com/in/rizqifauzulfitria/"
                      target="_blank"
                      ><i class="fab fa-linkedin card-profile"></i
                    ></a>
                    <a href="#" target="_blank"
                      ><i class="fab fa-github card-profile"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr />
      </div>

      <!--- Two Column Section -->
      <div class="container-fluid padding">
        <div class="row padding">
          <div class="col-lg-6" id="iframe-home">
            <iframe
              class="home"
              height="100%"
              src="https://www.youtube.com/embed/hn5Hlusj6Nc"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
          <div class="col-lg-6">
            <h2 class="title-box">Our Goals</h2>
            <p class="text-justify text-box">
              What we want to achieve is not only that you know and understand,
              but also make a workload that way much easier to be handle for
              yourself and your co-workers.
              <br /><br />
              And so, we are not only giving you course to learn things, but
              also guiding you through your problems, bugs, shortcuts and many
              else. And here is the example of what are we trying to achieve.
            </p>
          </div>
          <hr />
        </div>
      </div>
    </main>

    <!--- Footer -->
    <footer>
      <div class="container-fluid">
        <div class="row footer-info">
          <div class="col-md-6">
            <hr class="footer-hr" />
            <h3 class="text-center">
              explorer<img src="src/img/logo1.png" alt="" />
            </h3>
            <hr class="footer-hr" />
            <div class="footer-detail text-justify">
              <p>Call : 555-555</p>
              <p>
                Mail :
                <a href="mailto:ardhiyan.hakim@mhs.unsoed.ac.id"
                  >explorer@gmail.com</a
                >
              </p>
              <p>
                Address : Pasar Jaya Lenteng Agung Lantai Dasar Nomor 212 Raya
                Kecamatan Jagakarsa, Jl. Raya Jagakarsa No.211, RT.3/RW.1,
                Jagakarsa, Kec. Jagakarsa, DKI Jakarta, Daerah Khusus Ibukota
                Jakarta 12630
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <hr class="footer-hr" />
            <h3 class="text-center">Active Time</h3>
            <hr class="footer-hr" />
            <div class="footer-detail">
              <p>Monday To Friday : 9am - 5am</p>
              <p>Saturday : 9am - 3am</p>
              <p>Sunday : closed</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid text-center footer-closing">
        &copy; explorer. All Rights Reserved.
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </body>
</html>
