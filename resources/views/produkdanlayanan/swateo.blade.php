<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      /* Menambah ketebalan pada topheader */
        .topheader {
        padding: 30px 0; /* Tambahkan padding di atas dan bawah */
        border-bottom: 25px solid white;
        }

         /* Mengatur warna ikon lokasi dan teks deskripsinya */
        .bi-geo-alt-fill {
        color: #0454a3; /* Warna biru sesuai dengan palet */
        }

        .d-flex .flex-column {
        color: #0454a3;
        }

        .navbar .dropdown-menu {
        background-color: lightblue; /* Warna latar belakang dropdown */
        border-radius: 10px; /* Membuat sudutnya membulat */
        }

    /* Ubah warna teks dan latar belakang saat dropdown item di-hover */
        .navbar .dropdown-menu .dropdown-item {
        color: #fff; /* Warna teks */
        font-size: 20px;
        }

        .navbar .dropdown-menu .dropdown-item:hover {
        background-color: #0454a3; /* Warna latar belakang saat di-hover */
        color: #fff; /* Warna teks saat di-hover */
        }
        
        .navbar-nav .nav-link {
        font-size: 1.3rem; /* Mengatur ukuran font untuk nav-link */
        color: white;
        font-weight: bold;
        }

        .custom-navbar {
          background-color: #0454a3; /* Ganti dengan warna latar belakang yang diinginkan */
          border-radius: 15px;
          width: 1850px; /* Mengatur lebar navbar */
          margin: 0 auto; /* Memusatkan navbar */
        }

        .navbar.collapse {
            border-radius: 15px;
        }

        .footer {
        background-color: #0454a3;
        padding: 20px;
        color: white;
      }

      .footer p, .footer a {
        margin: 0;
        color: white;
        text-decoration: none;
      }

      .footer a:hover {
        text-decoration: underline;
      }

      .footer .social-icons a {
        margin-right: 10px;
        color: white;
        font-size: 3rem;
      }

      .footer .contact-info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }

      .footer .contact-info i {
        font-size: 3rem;
        margin-right: 10px;
      }

      .footer .contact-info p {
        margin-bottom: 5px; /* Memberikan jarak antara paragraf */
        line-height: 1.5; /* Mengatur jarak antar baris teks */
      }

      .footer .contact-info p.title {
        font-weight: bold; /* Membuat judul lebih tebal */
        font-size: 1.1rem; /* Ukuran font lebih besar untuk judul */
      }

      .footer .contact-info p.deskripsi {
        font-size: 1.25rem;
      }
      </style>
  </head>
  <body>

    <!-- Header / Top Bar -->
    <div class="bg-white py-2 topheader">
        <div class="container-fluid d-flex justify-content-between align-items-center px-5">
          <img src="/assets/gambar_landingpage/logo_swabina.png" alt="Company Logo" class="img-fluid" style="width: 175px; height: 175px;">
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center me-5">
                <i class="bi bi-geo-alt-fill me-2" style="font-size: 80px;"></i>
                <div class="d-flex flex-column me-4">
                  <span>Alamat</span>
                  <span>Kantor Pusat & Pabrik AMDK:</span>
                  <span>Jl. R.A. Kartini No.21 A Gresik 61122,</span>                    
                  <span>Jawa Timur</span>
                </div>
              </div>
              
            <img src="/assets/gambar_landingpage/logo_iso1.png" alt="Logo 1" class="img-fluid me-3" style="width: 100px; height: 100px;">
            <img src="/assets/gambar_landingpage/logo_iso2.png" alt="Logo 2" class="img-fluid me-3" style="width: 100px; height: 100px;">
            <img src="/assets/gambar_landingpage/logo_iso3.png" alt="Logo 3" class="img-fluid me-3" style="width: 100px; height: 100px;">
            <img src="/assets/gambar_landingpage/logo_smk3.png" alt="Logo 4" class="img-fluid" style="width: 100px; height: 100px;">
          </div>
        </div>
      </div>
      

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link me-5"  href="#">Beranda</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item dropdown position-relative">
                <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk dan Layanan</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <li><a class="dropdown-item" href="#">SWA Facility Management</a></li>
                  <li><a class="dropdown-item" href="#">SWA Segar</a></li>
                  <li><a class="dropdown-item" href="#">SWA Tour & Event Organizer</a></li>
                  <li><a class="dropdown-item" href="#">SWA Digital Solution</a></li>
                  <li><a class="dropdown-item" href="#">SWA Academy</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown position-relative">
                <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tentang Kami
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <li><a class="dropdown-item" href="#">Sekilas Perusahaan</a></li>
                  <li><a class="dropdown-item" href="#">Visi & Misi Perusahaan</a></li>
                  <li><a class="dropdown-item" href="#">Sertifikat & Penghargaan</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#">Mengapa Memilih Kami</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#">Berita</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#">Karir</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#">Kontak Kami</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#">Eng</a> <!-- Add me-5 for margin -->
              </li>        
            </ul>
          </div>
        </div>
      </nav>
      
                
    <h1>Hello, world!</h1>

     <!-- Footer -->
     <footer class="footer mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="contact-info">
                <i class="bi bi-geo-alt-fill"></i>
                <div>
                  <p class="title">Alamat Kantor:</p>
                  <p class="deskripsi">Jl. R.A. Kartini No.21 A Gresik, Jawa Timur 61122</p>
                  <p class="title">Kantor Perwakilan:</p>
                  <p class="deskripsi">Desa Sumberarum, Kecamatan Kerek</p>
                  <p class="deskripsi">Tuban, 62356 Jawa Timur</p>
                </div>
              </div>
              <div class="contact-info">
                <i class="bi bi-envelope-fill"></i>
                <div>
                  <p class="title">Email:</p>
                  <p class="deskripsi">marketing@swabina.id</p>
                </div>
              </div>
              <div class="contact-info">
                <i class="bi bi-telephone-fill"></i>
                <div>
                  <p class="title">Telepon:</p>
                  <p class="deskripsi">+62 31 3984719</p>
                  <p class="deskripsi">+62 31 3985794</p>
                  <p class="deskripsi">+62 356 711992</p>
                  <p class="deskripsi">+62 356 711966</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 text-md-end">
              <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100074480148412"><i class="bi bi-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCYFZXYfnQjvJx269wUFN9og"><i class="bi bi-youtube"></i></a>
                <a href="https://www.instagram.com/swabina.official/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center mt-3">
              <p>&copy; 2024 Politeknik Negeri Jember. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
