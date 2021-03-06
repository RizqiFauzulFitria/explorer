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
              <h1 class="text-center">Menulis Kode Javascript pada HTML</h1>
              <div class="main-content card text-justify">
                <p>
                  Seperti yang sudah dituliskan sebelumnya, saat ini kita akan
                  membahas tentang bagaimana sebuah metode javascript untuk
                  dituliskan pada sebuah file HTML
                </p>
                <p>
                  Beberapa metode untuk menuliskan kode javascript pada file
                  HTML dapat ditulis sebagai berikut.
                  <ol>
                    <li>
                      Embed. Metode ini akan menuliskan kode javascript langsung
                      pada HTML yang akan dituliskan pada elemen body seperti yang
                      sudah dicontohkan di halaman sebelumnya.
                    </li>
                    <li>
                      Inline. Pada metode ini kita akan menuliskan kode javascript
                      pada sebuah tag di HTML untuk melakukan trigger sesuatu yang
                      nanti akan kita contohkan.
                    </li>
                    <li>
                      Eksternal. Metode ini menggunakan sebuah tag khusus bernama
                      script yang akan disematkan di bagian akhir tag body.
                    </li>
                  </ol>
                </p>
                <h2>1. Penulisan kode Javascript Embed</h2>
                <p>
                  Pada metode embed ini kita akan menggunakan tag script untuk bisa
                  menuliskan kode javascript. Lalu apa bedanya metode embed dengan
                  metode eksternal jika keduanya sama - sama menggunakan tag script
                  ? Perbedaannya adalah dimana tag script ini ditaruh.
                </p>
                <p>
                  Seperti yang dijelaskan sebelumnya metode eksternal sendiri
                  menggunakan tag script yang ditaruh pada bagian akhir sebelum
                  penutup tag body sedangkan metode embed dituliskan pada bagian
                  akhir sebelum penutup tag head atau juga bisa di bagian akhir
                  sebelum penutup tag body. Contohnya sebagai berikut.
                </p>
                    <div class="highlight">
                  <pre
                    tabindex="0"
                    style="
                      color: #f8f8f2;
                      background-color: #282a36;
                      -moz-tab-size: 4;
                      -o-tab-size: 4;
                      tab-size: 4;
                    "
                  ><code class="language-html" data-lang="html"><span style="color:#ff79c6">&lt;!DOCTYPE html&gt;</span>
&lt;<span style="color:#ff79c6">html</span>&gt;
    &lt;<span style="color:#ff79c6">head</span>&gt;
        &lt;<span style="color:#ff79c6">title</span>&gt;Belajar Javascript dari Nol&lt;/<span style="color:#ff79c6">title</span>&gt;
        &lt;<span style="color:#ff79c6">script</span>&gt;
            <span style="color:#6272a4">// ini adalah penulisan kode javascript
</span><span style="color:#6272a4"></span>            <span style="color:#6272a4">// di dalam tag &lt;head&gt;
</span><span style="color:#6272a4"></span>            console.log(<span style="color:#f1fa8c">"Hello JS dari Head"</span>);
        &lt;/<span style="color:#ff79c6">script</span>&gt;
    &lt;/<span style="color:#ff79c6">head</span>&gt;
    &lt;<span style="color:#ff79c6">body</span>&gt;
        &lt;<span style="color:#ff79c6">p</span>&gt;Tutorial Javascript untuk Pemula&lt;/<span style="color:#ff79c6">p</span>&gt;
        &lt;<span style="color:#ff79c6">script</span>&gt;
            <span style="color:#6272a4">// ini adalah penulisan kode javascript
</span><span style="color:#6272a4"></span>            <span style="color:#6272a4">// di dalam tag &lt;body&gt;
</span><span style="color:#6272a4"></span>            console.log(<span style="color:#f1fa8c">"Hello JS dari body"</span>);
        &lt;/<span style="color:#ff79c6">script</span>&gt;
    &lt;/<span style="color:#ff79c6">body</span>&gt;
&lt;/<span style="color:#ff79c6">html</span>&gt;
                  </code></pre>
                </div>
                <p>
                  Pada tag manakah yang lebih baik dari metode embed ? Banyak yang
                  merekomendasikan untuk ditulis pada tag body. Hal ini dikarenakan
                  akan kode dibaca secara urut berdasarkan baris mulai dari baris
                  paling atas hingga paling bawah. Karenanya jika kamu menggunakan
                  metode ini, dan menuliskan kode javascript pada tag head maka
                  dalam proses loading halaman, halaman akan melakukan render pada
                  kode javascript terlebih dahulu dan bukannya menampilkan halaman
                  dari program HTML.
                </p>
                <p>
                  Untuk saat ini waktu yang dibutuhkan halaman untuk me-load kode
                  javascript hampir tidak terasa karena jumlah teks pada kode
                  javascript yang masih sedikit. Tapi bisa dibayangkan apa yang akan
                  terjadi ketika kita memiliki kode javascript hingga ratusan baris
                  bahkan ribuan. Ini akan berpengaruh terhadap user experience yang
                  buruk.
                </p>
                <h2>2. Penulisan kode Javascript Inline</h2>
                <p>
                  Pada metode inline ini kita akan menggunakan attribute HTML
                  berdasarkan event handler yang disediakan HTML. Event-event ini
                  akan melakukan trigger secara otomatis berdasarkan jenis event
                  handler yang digunakan. Contohnya dapat dilihat seperti ini.
                </p>
                <div class="highlight">
                  <pre
                    tabindex="0"
                    style="
                      color: #f8f8f2;
                      background-color: #282a36;
                      -moz-tab-size: 4;
                      -o-tab-size: 4;
                      tab-size: 4;
                    "
                  ><code class="language-html" data-lang="html">&lt;<span style="color:#ff79c6">a</span> <span style="color:#50fa7b">href</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"#"</span> <span style="color:#50fa7b">onclick</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"alert('Yey!')"</span>&gt;Klik aku!&lt;/<span style="color:#ff79c6">a</span>&gt;
                  </code></pre>
                </div>
                <p>
                  Pada contoh diatas kita menggunakan event handler
                  "<b>onclick</b>". Event ini akan melakukan trigger ketika tag
                  bersangkutan di klik dan akan menjalan fungsi
                  "<b>alert('Yey!')</b>". Kamu bisa membaca lebih lanjut tentang macam-macam event handler yang dapat digunakan untuk website kamu <a href="https://www.w3schools.com/tags/ref_eventattributes.asp">disini</a>.
                </p>
                <figure>
                  <img 
                    src="https://www.petanikode.com/img/js/inline-js.gif" 
                    alt="Ilustrasi hasil penulisan kode javascript dengan metode inline"
                    >
                </figure>
                <h2>3. Penulisan kode Javascript Eksternal</h2>
                <p>
                  Seperti yang dijelaskan sebelumnya, metode ini menggunakan tag
                  script yang dituliskan sebelum bagian akhir sebuah tag body. Hal
                  yang berbeda dari kedua metode sebelumnya adalah kita hanya perlu
                  menyisipkan 1 baris kode pada HTML dan sisanya akan kita tuliskan
                  di sebuah file terpisah dengan ekstensi "<b>.js</b>" .
                </p>
                <p>
                  Daripada berlama-lama, bagaimana kalau kita langsung mulai membuat
                  programnya. Pertama-tama kamu perlu membuat sebuah folder bernama
                  "<b>belajar-js</b>" dan kemudian buatlah 2 buah file bernama
                  "<b>index.html</b>" dan "<b>kode-program.js</b>" seperti pada
                  tampilan berikut.
                </p>
                <div class="highlight">
                  <pre
                    tabindex="0"
                    style="
                      color: #f8f8f2;
                      background-color: #282a36;
                      -moz-tab-size: 4;
                      -o-tab-size: 4;
                      tab-size: 4;
                    "
                  ><code class="language-bash" data-lang="bash">belajar-js/
????????? kode-program.js
????????? index.html
                  </code></pre>
                </div>
                <p>Isi dari file "<b>kode-program.js</b>" :</p>
                <div class="highlight">
                  <pre
                    tabindex="0"
                    style="
                      color: #f8f8f2;
                      background-color: #282a36;
                      -moz-tab-size: 4;
                      -o-tab-size: 4;
                      tab-size: 4;
                    "
                  ><code class="language-javascript" data-lang="javascript">alert(<span style="color:#f1fa8c">"Hello, ini adalah program JS eksternal!"</span>);
                  </code></pre>
                </div>

                <p>Isi dari file "<b>index.html</b>" :</p>
                <div class="highlight">
                  <pre
                    tabindex="0"
                    style="
                      color: #f8f8f2;
                      background-color: #282a36;
                      -moz-tab-size: 4;
                      -o-tab-size: 4;
                      tab-size: 4;
                    "
                  ><code class="language-html" data-lang="html"><span style="color:#ff79c6">&lt;!DOCTYPE html&gt;</span>
&lt;<span style="color:#ff79c6">html</span>&gt;
&lt;<span style="color:#ff79c6">head</span>&gt;
    &lt;<span style="color:#ff79c6">title</span>&gt;Belajar Javascript dari Nol&lt;/<span style="color:#ff79c6">title</span>&gt;
&lt;/<span style="color:#ff79c6">head</span>&gt;
&lt;<span style="color:#ff79c6">body</span>&gt;
    &lt;<span style="color:#ff79c6">p</span>&gt;Tutorial Javascript untuk Pemula&lt;/<span style="color:#ff79c6">p</span>&gt;

    <span style="color:#6272a4">&lt;!-- Menyisipkan kode js eksternal --&gt;</span>
    &lt;<span style="color:#ff79c6">script</span> <span style="color:#50fa7b">src</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"kode-program.js"</span>&gt;&lt;/<span style="color:#ff79c6">script</span>&gt;
&lt;/<span style="color:#ff79c6">body</span>&gt;
&lt;/<span style="color:#ff79c6">html</span>&gt;
                  </code></pre>
                </div>
                <p>Hasilnya dapat dilihat sebagai berikut.</p>
                <figure>
                  <img 
                    src="https://www.petanikode.com/img/js/js-eksternal.png" 
                    alt="Hasil ilustrasi penulisan kode dengan metode eksternal"
                    >
                </figure>
                <p>
                  Selamat ya, kamu saat ini telah berhasil menyelesaikan
                  pembelajaran dasar tentang bagaimana sebuah kode javascript
                  dituliskan. Lalu apa lagi yang harus kamu pelajari agar bisa
                  menjadi developer yang baik ?
                </p>
                <p>
                  Kamu perlu mempelajari bagaimana sebuah website bekerja dari sisi
                  server dan proses pembelajaran ini akan jadi yang paling lama dan
                  paling sulit dibanding seluruh pelajaran yang sebelumnya. Tetapi,
                  selama kamu memiliki kemauan yang kuat untuk bisa menjadi seorang
                  Software Developer maka kamu pasti bisa menyelesaikan semuanya.
                  Semangat ya ~!
                </p>
                              
                <div class="tips">
                  <h2>Tips & Trik</h2>
                  <p>
                    Metode terbaik untuk menuliskan kode javascript adalah dengan 
                    menggunakan metode eksternal sehingga kode yang tampil pada HTML
                    jauh lebih rapih, dirawat, serta di-maintenance.
                  </p>
                  <p>
                    Mempelajari javascript memang kendala yang sulit. Akan tetapi ada
                    banyak alternatif untuk mempelajarinya dengan mencari literatur
                    atau dokumentasi di google ataupun website lain seperti
                    <a href="https://www.w3schools.com/js/default.asp" target="_blank"
                      >w3schools.com</a
                    >
                    atau melalui situs pembelajaran yang lain. Kamu juga bisa
                    mengontak kami jika kamu mengalami kesulitan dalam pembelajaran ya
                    :)
                  </p>
                  </div>
              </div>
            </div>
            <div class="col-md-12 selection-item item-number">
              <ul class="no-bullets">
                <li>
                  <a href="/src/templates/javascript-1.html" class="btn btn-light"
                    >1</a
                  >
                </li>
                <li>
                  <a href="/src/templates/javascript-2.html" class="btn btn-light"
                    >2</a
                  >
                </li>
                <li>
                  <a href="/src/templates/javascript-3.html" class="btn btn-light"
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
