<?php 
if (isset($_SESSION['username'])=== false) { //jika sessionnya salah atau tidak ada
  header("Location: ./login.php"); //ngarahin ke home kalau udah login
}
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
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/responsive.css" />
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
            explorer<img src="../img/logo1.png" alt="Logo of Explorer" />
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
              <a href="/#class-section" class="nav-link">Class</a>
            </li>
            <li class="nav-item">
              <a href="/#about-us" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link sign-up-btn">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="class-change row text-center">
        <div class="col-sm-4">
          <a
            href="/src/templates/html5.html"
            id="buttonClassHTML"
            class="btn btn-primary btn-lg"
            >Learn HTML</a
          >
        </div>
        <div class="col-sm-4">
          <a
            href="/src/templates/css-1.html"
            id="buttonClassCSS"
            class="btn btn-primary btn-lg"
            >Learn CSS</a
          >
        </div>
        <div class="col-sm-4">
          <a
            href="/src/templates/javascript-1.html"
            id="buttonClassJavascript"
            class="btn btn-primary btn-lg"
            >Learn Javascript</a
          >
        </div>
      </div>
      <div class="upper" id="content">
        <div class="container-fluid">
          <div class="row text-center padding">
            <div class="col-md-12 selection-item item-content">
              <h1 class="text-center">Praktik Javascript</h1>
              <div class="main-content card text-justify">
                <p>
                  Karena kita sudah mempelajari tentang bagaimana menuliskan
                  kode javascript pada file HTML, maka kita bisa mulai
                  mempelajari apa saja yang akan kita gunakan sebagai basis
                  dalam pembuatan project dalam skala menengah hingga besar.
                  Tunggu apa lagi? Yuk kita mulai belajar javascript dengan
                  menonton video di bawah.
                </p>
                <h2 class="text-center">
                  Javascript Course with
                  <a
                    href="https://www.youtube.com/channel/UC29ju8bIPH5as8OGnQzwJyA"
                    >Traversy Media</a
                  >
                </h2>
                <figure>
                  <iframe
                    class="content"
                    height="100%"
                    src="https://www.youtube.com/embed/hdI2bqOjy3c"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </figure>
                <p>
                  Brad Traversy telah menjadi programmer selama sekitar 12 tahun
                  dan mengajar selama hampir 5 tahun. Dia adalah pemilik
                  Traversy Media yang merupakan saluran YouTube pengembangan web
                  yang sukses dan berspesialisasi dalam segala hal mulai dari
                  HTML5 hingga kerangka kerja ujung depan seperti Angular serta
                  teknologi sisi server seperti Node.js, PHP, dan Python. Brad
                  telah menguasai menjelaskan topik yang sangat kompleks dengan
                  cara yang sederhana yang sangat dimengerti.
                </p>

                <h2 class="text-center">
                  Javascript Course with
                  <a
                    href="https://www.youtube.com/channel/UC8butISFwT-Wl7EV0hUK0BQ"
                    >freeCodeCamp.org</a
                  >
                </h2>
                <figure>
                  <iframe
                    class="content"
                    height="100%"
                    src="https://www.youtube.com/embed/PkZNo7MFNFg"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </figure>
                <p>
                  freeCodeCamp adalah organisasi nirlaba yang terdiri dari
                  platform web pembelajaran interaktif, forum komunitas online,
                  ruang obrolan, publikasi online, dan organisasi lokal yang
                  bermaksud membuat pembelajaran pengembangan web dapat diakses
                  oleh siapa saja.
                </p>

                <div class="tips">
                  <h2>Tips & Trik</h2>
                  <p>
                    Selama pembelajaran javascript, ada beberapa hal yang perlu
                    diatur jika anda menggunakan OS Windows yakni environment
                    variable yang perlu anda deklarasikan jika anda akan
                    menginstal node js atau yang lainnya. Penyelesaian terhadap
                    masalah tersebut dan anda temukan
                    <a
                      href="https://sulhi.id/setting-path-environment-variable-di-windows-10/"
                      >disini</a
                    >.
                  </p>
                  <p>
                    Tidak lupa juga, akan ada banyak bug yang terjadi selama
                    proses pembelajaran dan pengembangan. Anda bisa mencari
                    solusi terhadap bug yang anda temukan dengan mencarinya di
                    google dengan keyword dari pesan error yang ditampilkan.
                    Kamu juga bisa bertanya langsung dengan orang-orang lain
                    lewat forum seperti
                    <a href="https://stackoverflow.com/">Stack Overflow</a> dan
                    beragam alternatif lain yang dapat anda baca lebih lanjut
                    <a
                      href="https://medium.com/@techloop.io/tired-of-stack-overflow-and-github-here-are-the-alternatives-c970d64a0bd3"
                      >disini</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-12 selection-item item-number">
              <ul class="no-bullets">
                <li>
                  <a
                    href="/src/templates/javascript-1.html"
                    class="btn btn-light"
                    >1</a
                  >
                </li>
                <li>
                  <a
                    href="/src/templates/javascript-2.html"
                    class="btn btn-light"
                    >2</a
                  >
                </li>
                <li>
                  <a
                    href="/src/templates/javascript-3.html"
                    class="btn btn-light"
                    >3</a
                  >
                </li>
              </ul>
            </div>
          </div>
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
              explorer<img src="../img/logo1.png" alt="" />
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
