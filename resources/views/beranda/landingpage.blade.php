<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar .dropdown-menu .dropdown-item:hover {
        background-color: #0454a3; /* Warna latar belakang saat di-hover */
        color: #fff; /* Warna teks saat di-hover */
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

      .contact-info .bi-geo-alt-fill {
        color: white; /* Warna biru sesuai dengan palet */
      }
      </style>
  </head>
  <body>

    <!-- Header / Top Bar -->
<div class="bg-white py-2 topheader" style="padding: 30px 0; border-bottom: 25px solid white;">
  <div class="container-fluid d-flex justify-content-between align-items-center px-5">
      <img src="/assets/gambar_landingpage/logo_swabina.png" alt="Company Logo" class="img-fluid" style="width: 175px; height: 175px;">
      <div class="d-flex align-items-center">
          <div class="d-flex align-items-center me-5">
              <i class="bi bi-geo-alt-fill me-2" style="font-size: 80px; color: #0454a3;"></i>
              <div class="d-flex flex-column me-4" style="color: #0454a3;">
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
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top" style="background-color: #0454a3; border-radius: 15px; width: 1850px; margin: 0 auto; box-shadow: 0px 15px 15px -5px rgba(0, 0, 0, 0.5)">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="border-radius: 15px;">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link me-5"  href="#" style="font-size: 1.3rem; color: white; font-weight: bold;">Beranda</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item dropdown position-relative">
                <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.3rem; color: white; font-weight: bold;">
                  Produk dan Layanan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1" style="background-color: lightblue; border-radius: 10px;">
                  <li><a class="dropdown-item" href="#" style="color: #fff; font-size: 20px;">SWA Facility Management</a></li>
                  <li><a class="dropdown-item" href="#" style="color: #fff; font-size: 20px;">SWA Segar</a></li>
                  <li><a class="dropdown-item" href="#" style="color: #fff; font-size: 20px;">SWA Tour & Event Organizer</a></li>
                  <li><a class="dropdown-item" href="#" style="color: #fff; font-size: 20px;">SWA Digital Solution</a></li>
                  <li><a class="dropdown-item" href="#" style="color: #fff; font-size: 20px;">SWA Academy</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown position-relative">
                <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.3rem; color: white; font-weight: bold;">
                  Tentang Kami
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2" style="background-color: lightblue; border-radius: 10px;">
                  <li><a class="dropdown-item" href="#" style="color: #fff; font-size: 20px;">Sekilas Perusahaan</a></li>
                  <li><a class="dropdown-item" href="#" style="color: #fff; font-size: 20px;">Visi & Misi Perusahaan</a></li>
                  <li><a class="dropdown-item" href="#" style="color: #fff; font-size: 20px;">Sertifikat & Penghargaan</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#" style="font-size: 1.3rem; color: white; font-weight: bold;">Mengapa Memilih Kami</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#" style="font-size: 1.3rem; color: white; font-weight: bold;">Berita</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#"style="font-size: 1.3rem; color: white; font-weight: bold;">Karir</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#" style="font-size: 1.3rem; color: white; font-weight: bold;">Kontak Kami</a> <!-- Add me-5 for margin -->
              </li>

              <li class="nav-item">
                <a class="nav-link me-5" href="#" style="font-size: 1.3rem; color: white; font-weight: bold;">Eng</a> <!-- Add me-5 for margin -->
              </li>        
            </ul>
          </div>
        </div>
      </nav>

<!-- Carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false" style="position: relative; margin-top: 15px;">
  <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="/assets/gambar_landingpage/carousel1.jpg" class="d-block w-100" alt="Slide 1" style="width: 100%; height: 900px; object-fit: cover;">
      </div>
      <div class="carousel-item">
          <img src="/assets/gambar_landingpage/carousel2.jpg" class="d-block w-100" alt="Slide 2" style="width: 100%; height: 900px; object-fit: cover;">
      </div>
      <div class="carousel-item">
          <img src="/assets/gambar_landingpage/carousel3.jpeg" class="d-block w-100" alt="Slide 3" style="width: 100%; height: 900px; object-fit: cover;">
      </div>
  </div>

  <div class="carousel-controls" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); display: flex; gap: 10px; z-index: 1000;">
      <span class="dot" data-bs-slide-to="0" style="width: 12px; height: 12px; background-color: white; border-radius: 50%; display: inline-block; transition: background-color 0.3s ease;"></span>
      <span class="dot" data-bs-slide-to="1" style="width: 12px; height: 12px; background-color: white; border-radius: 50%; display: inline-block; transition: background-color 0.3s ease;"></span>
      <span class="dot" data-bs-slide-to="2" style="width: 12px; height: 12px; background-color: white; border-radius: 50%; display: inline-block; transition: background-color 0.3s ease;"></span>
  </div>
</div>

<!-- Produk dan Layanan -->
<section id="produk-layanan" style="padding: 0 0 8rem 0; background: url('/assets/gambar_landingpage/bg.png') no-repeat center center; background-size: 100% 100%;">
  <!-- Judul Section -->
  <div style="text-align: center; margin-bottom: 2rem;">
    <h1 style="font-size: 3rem; color: white; font-weight: bold; padding:30px;">Produk dan Layanan</h1>
  </div>

  <!-- Carousel -->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <!-- Carousel Item 1 (menampilkan 3 item) -->
      <div class="carousel-item active">
        <div style="display: flex; justify-content: center; gap: 2rem;">
          <div class="card p-3 mb-5 bg-body-tertiary" style="width: 20rem; height: 30rem; border-radius: 20px; background-color:white; box-shadow: 0px 15px 15px -5px rgba(0, 0, 0, 0.5);">
            <div style="display: flex; justify-content: center; align-items: center; height: 70%;">
              <img src="/assets/gambar_landingpage/kerja.png" alt="..." style="width: 60%; height: auto;">
            </div>
            <div class="card-body">
              <h3 class="card-text" style="text-align: center; font-weight: bold; color:#0454a3;">SWA</h3>
              <h3 class="card-text" style="text-align: center; font-weight: bold;">Facility Management</h3>
            </div>
          </div>

          <div class="card" style="width: 20rem; height: 30rem; border-radius: 20px; background-color:white; box-shadow: 0px 15px 15px -5px rgba(0, 0, 0, 0.5);">
            <div style="display: flex; justify-content: center; align-items: center; height: 70%;">
              <img src="/assets/gambar_landingpage/air.png" alt="..." style="width: 60%; height: auto;">
            </div>
            <div class="card-body">
              <h3 class="card-text" style="text-align: center; font-weight: bold; color:#0454a3;">SWA</h3>
              <h3 class="card-text" style="text-align: center; font-weight: bold;">Segar</h3>
            </div>
          </div>

          <div class="card" style="width: 20rem; height: 30rem; border-radius: 20px; background-color:white; box-shadow: 0px 15px 15px -5px rgba(0, 0, 0, 0.5);">
            <div style="display: flex; justify-content: center; align-items: center; height: 70%;">
              <img src="/assets/gambar_landingpage/tour.png" alt="..." style="width: 60%; height: auto;">
            </div>
            <div class="card-body">
              <h3 class="card-text" style="text-align: center; font-weight: bold; color:#0454a3;">SWA</h3>
              <h3 class="card-text" style="text-align: center; font-weight: bold;">Tour & Event Organizer</h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel Item 2 (menampilkan 3 item) -->
      <div class="carousel-item">
        <div style="display: flex; justify-content: center; gap: 2rem;">
          <div class="card p-3 mb-5 bg-body-tertiary" style="width: 20rem; height: 30rem; border-radius: 20px; background-color:white; box-shadow: 0px 15px 15px -5px rgba(0, 0, 0, 0.5);">
            <div style="display: flex; justify-content: center; align-items: center; height: 70%;">
              <img src="/assets/gambar_landingpage/academy.png" alt="..." style="width: 60%; height: auto;">
            </div>
            <div class="card-body">
              <h3 class="card-text" style="text-align: center; font-weight: bold; color:#0454a3;">SWA</h3>
              <h3 class="card-text" style="text-align: center; font-weight: bold;">Academy</h3>
            </div>
          </div>

          <div class="card" style="width: 20rem; height: 30rem; border-radius: 15px; background-color:white; box-shadow: 0px 15px 15px -5px rgba(0, 0, 0, 0.5);">
            <div style="display: flex; justify-content: center; align-items: center; height: 70%;">
              <img src="/assets/gambar_landingpage/digital.png" alt="..." style="width: 60%; height: auto;">
            </div>
            <div class="card-body">
              <h3 class="card-text" style="text-align: center; font-weight: bold; color:#0454a3;">SWA</h3>
              <h3 class="card-text" style="text-align: center; font-weight: bold;">Digital Solution</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!--Tentang Kami-->

<div class="container mt-5">
  <h1 class="text-center" style="font-weight: bold; font-size: 50px; margin-bottom: 50px;">Tentang Kami</h1>
  <ul class="nav nav-pills justify-content-center mt-3" id="aboutTab" role="tablist">
      <li class="nav-item">
          <a class="nav-link active" id="overview-tab" data-bs-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true" style="background-color: #0454a3; font-weight: bold; font-size:20px; color: white;">Sekilas Perusahaan</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" id="milestones-tab" data-bs-toggle="pill" href="#milestones" role="tab" aria-controls="milestones" aria-selected="false" style="color: #0454a3; font-weight: bold; font-size:20px;">Jejak Langkah</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" id="vision-tab" data-bs-toggle="pill" href="#vision" role="tab" aria-controls="vision" aria-selected="false" style="color: #0454a3; font-weight: bold; font-size:20px;">Visi Misi dan Budaya</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" id="certificates-tab" data-bs-toggle="pill" href="#certificates" role="tab" aria-controls="certificates" aria-selected="false" style="color: #0454a3; font-weight: bold; font-size:20px;">Sertifikat dan Penghargaan</a>
      </li>
  </ul>
<!--Sekilas Perusahaan-->
  <div class="tab-content mt-4" id="aboutTabContent">
      <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab" style="display: block; padding: 20px;">
          <p style="text-align: center; font-size:x-large">PT Swabina Gatra atau yang lebih dikenal dengan nama SWA adalah perusahaan swasta nasional dan merupakan bagian dari Semen Indonesia Group. 
            Berdiri sejak tahun 1988, SWA memiliki kisah sukses yang panjang dan terus tumbuh menjadi perusahaan modern, profesional dan bereputasi prima. 
            SWA memiliki 5 lini bisnis utama yaitu Penyediaan Tenaga Kerja, produksi Air Minum Dalam Kemasan, Jasa Agen Perjalanan, Solusi Teknologi Informasi serta Lembaga Diklat & Sertifikasi.</p>
            <p style="text-align: center; font-size:x-large">Dengan pengalaman selama lebih dari 3 dekade, SWA telah dipercaya oleh Pelanggan dari beragam segmen yang tersebar di berbagai kota di Indonesia, mulai dari Aceh hingga Papua. 
            Keberhasilan kami tidak terlepas dari komitmen akan kualitas. SWA senantiasa berkomitmen untuk menjaga standar tertinggi dalam menjalankan bisnisnya.</p>
            <a href="#" role="button" class="btn btn-primary btn-lg" style="background-color:#0454a3; border:none; text-decoration:none; color:white; padding: 15px 50px; display: inline-block; float:right; margin-top:50px; margin-bottom: 80px;"
               onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">Baca Selengkapnya</a>
      </div>
<!--Visi dan Misi-->
      <div class="tab-pane fade" id="milestones" role="tabpanel" aria-labelledby="milestones-tab" style="display: none; padding: 20px;">
        <img src="/assets/gambar_landingpage/jejak_ind.png" alt="Jejak Langkah" class="img-fluid mb-3" style="display: block; margin: 0 auto;">
      </div>
      <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab" style="display: none; padding: 20px;">
        <h2 style="text-decoration-line: underline; margin-bottom: 15px;">Visi</h2>
          <p style="font-size: larger; margin-bottom: 40px;">Menjadi Perusahaan yang dapat tumbuh dan berkembang dengan sehat dan selalu unggul dibidangnya.</p>
        <h2 style="text-decoration-line: underline; margin-bottom: 15px;">Misi</h2>
          <p style="font-size: larger">1. Meningkatkan dan mengembangkan bidang usaha utama (Core Business).</p>
          <p style="font-size: larger">2. Meningkatkan dan mengembangkan bidang usaha penunjang sebagai usaha untuk mendukung pendapatan dari kegiatan bidang usaha utama</p>
          <p style="font-size: larger">3. Meningkatkan kualitas pengelolaan sumber daya manusia yang berdaya saing tinggi guna mendukung penyediaan tenaga kerja yang profesional</p>
          <p style="font-size: larger; margin-bottom: 40px;">4. Menghasilkan laba yang wajar dan memberikan deviden yang memuaskan bagi Pemegang Saham.</p>
<!--Budaya Perusahaan-->
        <h2 style="text-decoration-line: underline; margin-bottom: 20px;">Budaya Perusahaan</h2>
        <h2 style="font-weight: bold">SIAP</h2>
          <p style="font-size: larger">Makna SIAP adalah Semangat, Ikhlas, Akhlak dan Profesional.</p>
        <h2 style="font-weight: bold">BISA</h2>
          <p style="font-size: larger">Makna BISA adalah dengan rahmat Allah SWT, PT Swabina Gatra pasti bisa mewujudkan visi Perusahaan saat ini dan di masa selanjutnya.</p>
          <a href="#" role="button" class="btn btn-primary btn-lg" style="background-color:#0454a3; border:none; text-decoration:none; color:white; padding: 15px 50px; display: inline-block; float:right; margin-top:50px; margin-bottom: 80px;"
          onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">Baca Selengkapnya</a>
      </div>
<!-- Sertifikat dan Penghargaan -->
      <div class="tab-pane fade" id="certificates" role="tabpanel" aria-labelledby="certificates-tab" style="display: none; padding: 20px;">
        <div id="certificatesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
          <div class="carousel-indicators" style="bottom: -80px; text-align: center;">
            <button type="button" data-bs-target="#certificatesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 12px; height: 12px; border-radius: 50%; background-color: #0454a3; margin: 1px;"></button>
            <button type="button" data-bs-target="#certificatesCarousel" data-bs-slide-to="1" aria-label="Slide 2" style="width: 12px; height: 12px; border-radius: 50%; background-color: #0454a3; margin: 1px;"></button>
            <button type="button" data-bs-target="#certificatesCarousel" data-bs-slide-to="2" aria-label="Slide 3" style="width: 12px; height: 12px; border-radius: 50%; background-color: #0454a3; margin: 1px;"></button>
            <button type="button" data-bs-target="#certificatesCarousel" data-bs-slide-to="3" aria-label="Slide 4" style="width: 12px; height: 12px; border-radius: 50%; background-color: #0454a3; margin: 1px;"></button>
            <button type="button" data-bs-target="#certificatesCarousel" data-bs-slide-to="4" aria-label="Slide 5" style="width: 12px; height: 12px; border-radius: 50%; background-color: #0454a3; margin: 1px;"></button>
            <button type="button" data-bs-target="#certificatesCarousel" data-bs-slide-to="5" aria-label="Slide 6" style="width: 12px; height: 12px; border-radius: 50%; background-color: #0454a3; margin: 1px;"></button>
            <button type="button" data-bs-target="#certificatesCarousel" data-bs-slide-to="6" aria-label="Slide 7" style="width: 12px; height: 12px; border-radius: 50%; background-color: #0454a3; margin: 1px;"></button>
            <button type="button" data-bs-target="#certificatesCarousel" data-bs-slide-to="7" aria-label="Slide 8" style="width: 12px; height: 12px; border-radius: 50%; background-color: #0454a3; margin: 1px;"></button>
        </div>        
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/assets/gambar_landingpage/sertif1.jpg" class="d-block mx-auto" alt="Sertifikat 1" style="width: 500px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); margin:10px;">
            </div>
            <div class="carousel-item">
              <img src="/assets/gambar_landingpage/sertif2.jpg" class="d-block mx-auto" alt="Sertifikat 2" style="width: 500px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); margin:10px;">
            </div>
            <div class="carousel-item">
              <img src="/assets/gambar_landingpage/sertif3.jpg" class="d-block mx-auto" alt="Sertifikat 3" style="width: 500px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); margin:10px;">
            </div>
            <div class="carousel-item">
              <img src="/assets/gambar_landingpage/sertif4.jpg" class="d-block mx-auto" alt="Sertifikat 4" style="width: 500px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); margin:10px;">
            </div>
            <div class="carousel-item">
              <img src="/assets/gambar_landingpage/sertif5.jpg" class="d-block mx-auto" alt="Sertifikat 5" style="width: 500px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); margin:10px;">
            </div>
            <div class="carousel-item">
              <img src="/assets/gambar_landingpage/sertif6.jpg" class="d-block mx-auto" alt="Sertifikat 6" style="width: 500px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); margin:10px;">
            </div>
            <div class="carousel-item">
              <img src="/assets/gambar_landingpage/sertif7.jpg" class="d-block mx-auto" alt="Sertifikat 7" style="width: 500px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); margin:10px;">
            </div>
            <div class="carousel-item">
              <img src="/assets/gambar_landingpage/sertif8.jpeg" class="d-block mx-auto" alt="Sertifikat 8" style="width: 500px; height: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); margin:10px;">
            </div>
          </div>
          <a href="#" role="button" class="btn btn-primary btn-lg" style="background-color:#0454a3; border:none; text-decoration:none; color:white; padding: 15px 50px; display: inline-block; float:right; margin-top:50px; margin-bottom: 80px;"
          onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">Baca Selengkapnya</a>
          <!-- Kontrol Carousel -->
          <a class="carousel-control-prev" href="#certificatesCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="display: inline-block; width: 0; height: 0; border-top: 15px solid transparent; border-bottom: 15px solid transparent; border-right: 20px solid #0454a3;"></span>
        </a>
        <a class="carousel-control-next" href="#certificatesCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="display: inline-block; width: 0; height: 0; border-top: 15px solid transparent; border-bottom: 15px solid transparent; border-left: 20px solid #0454a3;"></span>
        </a>             
        </div>
      </div>
    </div>
  </div>

  <!--Foto Direksi-->
  <div class="container-fluid" style="padding: 0; margin: 0;">
    <img src="/assets/gambar_landingpage/foto_direksi.jpeg" class="img-fluid" alt="Contoh Gambar" style="width: 100%; height: auto;">
</div>

<!--Konten Card Mengapa Memilih Kami-->
<!-- Konten Card -->
<div class="container" style="overflow-x: auto; padding: 20px;">
  <h1 style="font-weight: bold; text-align:center; font-size:50px; margin-bottom: 60px;">Mengapa Memilih Kami</h1>
  <div class="row" style="display: flex; flex-wrap: nowrap;">
      <div class="col-md-3 mb-3" style="flex: 0 0 auto; width: 20%;">
          <div class="card" style="width: 100%; border:none">
              <img src="/assets/gambar_landingpage/competence.png" class="card-img-top" alt="Card Image">
              <div class="card-body">
                  <h4 class="card-title" style="font-weight: bold">Competence</h4>
                  <a href="#" class="btn btn-primary" style="background: #0454a3; font-weight:bold; border: none;"
                  onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">Baca Selengkapnya</a>
              </div>
          </div>
      </div>
      <div class="col-md-3 mb-3" style="flex: 0 0 auto; width: 20%;">
          <div class="card" style="width: 100%; border:none">
              <img src="/assets/gambar_landingpage/integrity.png" class="card-img-top" alt="Card Image">
              <div class="card-body">
                  <h4 class="card-title" style="font-weight: bold">Integrity</h4>
                  <a href="#" class="btn btn-primary" style="background: #0454a3; font-weight:bold; border: none;"
                  onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">Baca Selengkapnya</a>
              </div>
          </div>
      </div>
      <div class="col-md-3 mb-3" style="flex: 0 0 auto; width: 20%;">
          <div class="card" style="width: 100%; border:none">
              <img src="/assets/gambar_landingpage/excellence.png" class="card-img-top" alt="Card Image">
              <div class="card-body">
                  <h4 class="card-title" style="font-weight: bold">Excellent</h4>
                  <a href="#" class="btn btn-primary" style="background: #0454a3; font-weight:bold; border: none;"
                  onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">Baca Selengkapnya</a>
              </div>
          </div>
      </div>
      <div class="col-md-3 mb-3" style="flex: 0 0 auto; width: 20%;">
        <div class="card" style="width: 100%; border:none">
            <img src="/assets/gambar_landingpage/innovative.png" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h4 class="card-title" style="font-weight: bold">Innovative</h4>
                <a href="#" class="btn btn-primary" style="background: #0454a3; font-weight:bold; border: none;"
                onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" style="flex: 0 0 auto; width: 20%;">
      <div class="card" style="width: 100%; border:none">
          <img src="/assets/gambar_landingpage/profesional.png" class="card-img-top" alt="Card Image">
          <div class="card-body">
              <h4 class="card-title" style="font-weight: bold">Profesional</h4>
              <a href="#" class="btn btn-primary" style="background: #0454a3; font-weight:bold; border: none;"
              onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">Baca Selengkapnya</a>
          </div>
      </div>
  </div>
  </div>
</div>

<!--Video Youtube-->
<section style="background-color:rgba(236, 236, 236, 0.958); padding: 40px 0;">
  <div class="container" style="width: 100%; max-width: 100%; padding: 0; display: flex; justify-content: center;">
    <div class="embed-responsive embed-responsive-16by9" style="width: 75%; position: relative; padding-bottom: 42%; height: 0; overflow: hidden;">
      <iframe class="embed-responsive-item" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/f3bHlPrWspY" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Layanan Area -->
<section style="padding: 0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 6px 20px rgba(0, 0, 0, 0.19); position: relative; margin-bottom: 0;">
  <img src="/assets/gambar_landingpage/layanan_area.png" alt="Deskripsi Gambar" style="width: 100%; height: auto; display: block;">
  <a href="#" role="button" class="btn btn-primary btn-lg" 
     style="background-color:#0454a3; border:none; text-decoration:none; color:white; padding: 15px 50px; 
     position: absolute; bottom: 20px; right: 20px;"
     onmouseover="this.style.backgroundColor='#0d6efd';" onmouseout="this.style.backgroundColor='#0454a3';">
    Baca Selengkapnya
  </a>
</section>

<!-- Footer -->
<footer class="footer">
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

<!-- Floating Button -->
<div class="floating-btn" style="position: fixed; right: 30px; top: 50%; transform: translateY(-50%); z-index: 1000;">
  <img src="/assets/gambar_landingpage/user.png" alt="Floating Button" class="btn-img" 
       style="width: 110px; height: 110px; border-radius: 50%; cursor: pointer;">
       <h3 style="font-weight: bold; margin-left: 0; margin-right: 5px; margin-top: 5px; color: rgb(255, 255, 4)">HOTLINE</h3>
       
  <!-- Social Icons -->
  <div class="social-icons" style="position: absolute; left: -30px; top: 25%; transform: translateY(-50%);">
    <div class="icon facebook-icon" style="position: absolute; background-color: #0071BC; border-radius: 50%; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; transition: all 0.3s ease; opacity: 0;">
      <a href="https://www.facebook.com" target="_blank" style="color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
        <i class="bi bi-facebook" style="font-size: 2rem;"></i>
      </a>
    </div>
    
    <div class="icon instagram-icon" style="position: absolute; background-color: #0071BC; border-radius: 50%; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; transition: all 0.3s ease; opacity: 0;">
      <a href="https://www.instagram.com" target="_blank" style="color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
        <i class="bi bi-instagram" style="font-size: 2rem;"></i>
      </a>
    </div>
    
    <div class="icon youtube-icon" style="position: absolute; background-color: #0071BC; border-radius: 50%; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; transition: all 0.3s ease; opacity: 0;">
      <a href="https://www.youtube.com" target="_blank" style="color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
        <i class="bi bi-youtube" style="font-size: 2rem;"></i>
      </a>
    </div>
    
    <div class="icon whatsapp-icon" style="position: absolute; background-color: #0071BC; border-radius: 50%; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; transition: all 0.3s ease; opacity: 0;">
      <a href="https://api.whatsapp.com/send?phone=6281281887873" target="_blank" style="color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
        <i class="bi bi-whatsapp" style="font-size: 2rem;"></i>
      </a>
    </div>
    
    <div class="icon profile-icon" style="position: absolute; background-color: #0071BC; border-radius: 50%; width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; transition: all 0.3s ease; opacity: 0;">
      <a href="#" style="color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
        <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
      </a>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    const carousel = document.querySelector('#carouselExampleFade');
    const dots = document.querySelectorAll('.carousel-controls .dot');

    carousel.addEventListener('slid.bs.carousel', function (event) {
    const index = Array.from(event.relatedTarget.parentNode.children).indexOf(event.relatedTarget);
    dots.forEach((dot, i) => {
        dot.style.backgroundColor = i === index ? '#0454a3' : 'white';
    });
});

// Add event listeners to dots
dots.forEach((dot) => {
    dot.addEventListener('click', (e) => {
        const index = e.target.getAttribute('data-bs-slide-to');
        const carouselInstance = bootstrap.Carousel.getInstance(carousel);
        carouselInstance.to(index);
    });
});


      /* Tentang Kami */
document.querySelectorAll('#aboutTab .nav-link').forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        document.querySelectorAll('#aboutTab .nav-link').forEach(function(nav) {
            nav.style.backgroundColor = '';
            nav.style.color = '#0454a3';
        });

        link.style.backgroundColor = '#0454a3';
        link.style.color = 'white';

        document.querySelectorAll('#aboutTabContent .tab-pane').forEach(function(pane) {
            pane.style.display = 'none';
        });

        const targetPane = document.querySelector(link.getAttribute('href'));
        if (targetPane) {
            targetPane.style.display = 'block';
        }
    });
});

/*icon hotline*/
document.addEventListener('DOMContentLoaded', () => {
  const floatingBtn = document.querySelector('.floating-btn .btn-img');
  const icons = document.querySelectorAll('.floating-btn .social-icons .icon');
  let isOpen = false;

  floatingBtn.addEventListener('click', () => {
    isOpen = !isOpen;
    const radius = 120; // Radius of the semi-circle
    const totalIcons = icons.length;
    
    icons.forEach((icon, index) => {
      if (isOpen) {
        // Adjust angle for half-circle on the left side
        const angle = Math.PI / 2 + (Math.PI / (totalIcons - 1)) * index;
        const x = Math.cos(angle) * radius;
        const y = Math.sin(angle) * radius;
        icon.style.transform = `translate(${x}px, ${y}px)`;
        icon.style.opacity = '1';
      } else {
        icon.style.transform = 'translate(0, 0)';
        icon.style.opacity = '0';
      }
    });
  });
});

    </script>
  </body>
</html>

