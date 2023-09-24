<?php 
session_start();
if ( !isset($_SESSION["login"] ) ) {
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS KU -->
    <link rel="stylesheet" href="style.css" />
    <title>Portofolio | Christian Luis</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Christian</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">LOG Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/unnamed.jpg" alt="unnamed" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Christian</h1>
      <p class="lead">Web Development | Student</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,192L48,170.7C96,149,192,107,288,128C384,149,480,235,576,250.7C672,267,768,213,864,192C960,171,1056,181,1152,170.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center md-5">
          <div class="col mb-4">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-5" data-aos="fade-right" data-aos-duration="1000">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, nobis maxime? Sint, nostrum veniam! Nisi.</p>
          </div>
          <div class="col-md-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ex nam iusto veritatis voluptas vero officiis hic facilis.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#2b79a7"
          fill-opacity="1"
          d="M0,256L48,250.7C96,245,192,235,288,224C384,213,480,203,576,218.7C672,235,768,277,864,272C960,267,1056,213,1152,170.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->
    <!-- Project -->
    <section id="project">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="500">
              <img src="img/1.jpg" class="card-img-top" alt="project1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
            <div class="card">
              <img src="img/2.jpg" class="card-img-top" alt="project2" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
            <div class="card">
              <img src="img/3.jpg " class="card-img-top" alt="project3" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,192L48,208C96,224,192,256,288,261.3C384,267,480,245,576,229.3C672,213,768,203,864,186.7C960,171,1056,149,1152,144C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->
     <!-- Gallery -->
     <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Gallery</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/1.jpg" alt="gambar 1" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/2.jpg" alt="gambar 2" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/3.jpg" alt="gambar 3" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/4.jpg" alt="gambar 4" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/5.jpg" alt="gambar 5" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/6.jpg" alt="gambar 6" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/7.jpg" alt="gambar 7" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/8.jpg" alt="gambar 8" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/9.jpg" alt="gambar 9" class="img-fluid gallery-img">
              </a>
            </div>
            <div class="col-md-3 p-3">
              <a href="#">
                <img src="gallery/10.jpg" alt="gambar 10" class="img-fluid gallery-img">
              </a>
            </div>
        </div>
    </section>
    <!-- Akhir Gallery -->
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 justify-content-center">
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Terima Kasih!</strong> Pesan Anda Sudah Kami Terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="contact-form justify-content-center">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea id="pesan" rows="3" class="form-control" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">Submit</button>
              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#198754"
          fill-opacity="1"
          d="M0,160L48,160C96,160,192,160,288,144C384,128,480,96,576,112C672,128,768,192,864,229.3C960,267,1056,277,1152,256C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->
    <!-- footer -->
    <footer class="bg-success text-center p-3">
      <p>Website Ini Dibuat Oleh <a href="https://www.youtube.com/channel/UCs8s_lIgkjmgQGnVgdBA01g" class="text-white fw-bold">Christian Luis</a></p>
    </footer>
    <!-- Akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      const galleryimage = document.querySelectorAll('.gallery-img');

      galleryimage.forEach((img, i) => { 
        img.dataset.aos = 'fade-down';
        img.dataset.aosDelay = i * 50;
      })

      AOS.init({
        once: true,
      });
    </script>

    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycbxp33qrYCpKtdKQT5MP5rv0fcimzPCtkg8JLsBRHnqY2vwVdZjweHKuXbsR2dzSuaIVuA/exec";
      const form = document.forms["contact-form"];
      const btnkirim = document.querySelector(".btn-kirim");
      const btnloading = document.querySelector(".btn-loading");
      const myalert = document.querySelector(".my-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tampilkan tombol loading hilangkan tombol kirim
        btnloading.classList.toggle("d-none");
        btnkirim.classList.toggle("d-none");
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // tampilkan tombol Kirim Hilangkan tombol loading
            btnloading.classList.toggle("d-none");
            btnkirim.classList.toggle("d-none");
            //  tampilkan alert
            myalert.classList.toggle("d-none");
            // reset formnya
            form.reset();
            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
  </body>
</html>
