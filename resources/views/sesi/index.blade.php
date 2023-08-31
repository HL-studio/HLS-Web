<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>HL Studio | Industry Creative</title>

    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/mylogo/1.png')}}" style="height: max-content" />
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="{{asset('img/mylogo/1.png')}}" />

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/font/nunito.css" />

    <!-- Vendor CSS Files -->

    <link rel="stylesheet" href="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/aos/aos.css" />
    <link rel="stylesheet" href="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/remixicon/remixicon.css" />
    <link rel="stylesheet" href="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/glightbox/css/glightbox.min.css" />

    <link rel="stylesheet" href="css/style-alerts.css" />

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style-index.css')}}" rel="stylesheet" />

    <style>
      th,
      td {
        font-family: nunito;
      }

      th {
        font-size: 13pt;
        color: navy;
      }

      td {
        font-size: 10pt;
        text-align: justify;
      }

      ::-webkit-scrollbar {
        width: 8px;
      }

      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }

      ::-webkit-scrollbar-thumb {
        background: rgb(24, 24, 118);
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }

      /* optgroup { font-size:5px; } */

      .box {
        text-align: justify !important;
      }
    </style>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a class="logo d-flex align-items-center">
          <img src="{{asset('img/creative.jpg')}}" alt="Industry Creative" />
          <span class="label" style="font-size: 11pt"></span>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
            <li><a class="nav-link scrollto" href="#visimisi">Visi Misi</a></li>
            <li><a class="nav-link scrollto" href="#fitur">Fitur</a></li>
            <li><a type="button" style="background-color: #012970;" class="getstarted" data-bs-toggle="modal" data-bs-target="#login">Masuk</a></li>
            <li><a type="button" style="background-color: rgb(233, 176, 62);" class="getstarted" data-bs-toggle="modal" data-bs-target="#register">Register</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 class="judul" data-aos="fade-down"></h1>
            <div data-aos="fade-up">
              <div class="text-center text-lg-start">
                {{-- Notifikasi Sukses --}}
                <div>
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>
                    {{ session('success') }}
                </strong> Terimakasih sudah mengunjungi website saya!
            </div>
        @endif
        {{-- Notif Error --}}
                  @if($errors->any())
                      <div class="alert alert-danger">
                         <ul>
                              @foreach ($errors->all() as $item)
                              <li>{{ $item }}</li>
                    @endforeach
                        </ul>
                      </div>
                  @endif
                  {{-- Akhir Notifikasi --}}
                </div>
                 <!-- Audio -->
                <div>
                      <p class="captionmusic"></p>
                          <audio controls loop data-aos="zoom-in" data-aos-delay="1000">
                           <source src="{{asset('audio/audio1.mp3')}}" type="audio/mp3" /></audio>
                </div>
                <!-- Akhir Audio -->
                <button
                  type="button"
                  class="btn btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center mt-3"
                  data-bs-toggle="modal"
                  data-bs-toggle="modal-register"
                  data-bs-target="#login"
                  data-bs-target="#register"
                  style="font-family: Nunito; background-color: #012970"
                >
                  Mulai
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img" data-aos="zoom-out">
            <img src="{{asset('img/industry creative.jpg')}}" class="img-fluid" alt="" style="max-width: 550px" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= visimisi Section ======= -->
      <section id="visimisi" class="about">
        <div class="container-fluid" data-aos="fade-up">
          <div class="row gx-0">
            <div class="col-lg-3 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
              <img src="{{asset('img/mylogo/5.png')}}" alt="HL Studio" class="img-fluid py-4" style="max-width: 70%; display: block; margin-left: auto; margin-right: auto; background-image: url(https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/bg.svg);" />
            </div>
            <!-- Konten -->
            <div class="col-lg-9 d-flex flex-column justify-content-center content" data-aos="fade-up" data-aos-delay="50">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th colspan="2">Visi HL Studio Creative</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 3%">1.</td>
                    <td class="card-text1"></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th  colspan="2">Misi HL Studio Creative</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 3%">1.</td>
                    <td class="card-text2">
                     
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Fitur Section ======= -->
      <section id="fitur" class="values">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h1>Lingkup Aplikasi</h1>
          </header>

          <div class="row">
            <div class="col-lg-4 mt-4">
              <div class="box" data-aos="fade-down" data-aos-delay="200">
                <img src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/limatahunan.svg" class="img-fluid" alt="" />
                <h3 class="text-center">Ruang Kreatif Multifungsi</h3>
                <small>Studio ini dapat memiliki ruang yang dirancang khusus untuk mendukung berbagai bentuk seni dan desain, termasuk tempat untuk melukis, mencipta, fotografi, dan presentasi.</small>
              </div>
            </div>

            <div class="col-lg-4 mt-4">
              <div class="box" data-aos="fade-down" data-aos-delay="400">
                <img src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/tahunan.svg" class="img-fluid" alt="" />
                <h3 class="text-center">Studio Virtual</h3>
                <small>Fitur ini dapat memungkinkan pengguna untuk membuat karya seni atau desain secara virtual dengan berbagai alat digital yang tersedia dalam aplikasi.</small>
              </div>
            </div>

            <div class="col-lg-4 mt-4">
              <div class="box" data-aos="fade-down" data-aos-delay="600">
                <img src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/anggaran.svg" class="img-fluid" alt="" />
                <h3 class="text-center">Kelas Online</h3>
                <small>Aplikasi dapat menyediakan kelas dan workshop online tentang berbagai topik kreatif, di mana pengguna dapat mendaftar dan belajar langsung dari instruktur. </small>
              </div>
            </div>

            <div class="col-lg-4 mt-4">
              <div class="box" data-aos="fade-down" data-aos-delay="400">
                <img src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/tatausaha.svg" class="img-fluid" alt="" />
                <h3 class="text-center">Kurator Karya</h3>
                <small>Sebuah fitur di mana pengguna dapat mengatur dan mengkategorikan karya-karya favorit mereka dalam koleksi pribadi.</small>
              </div>
            </div>

            <div class="col-lg-4 mt-4">
              <div class="box" data-aos="fade-down" data-aos-delay="200">
                <img src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/pelaporan.svg" class="img-fluid" alt="" />
                <h3 class="text-center">Pusat Sumber Daya</h3>
                <small>Fitur ini dapat menyediakan sumber daya seperti tutorial, artikel, video, dan referensi terkait seni, desain, dan industri kreatif.</small>
              </div>
            </div>

            <div class="col-lg-4 mt-4">
              <div class="box" data-aos="fade-down" data-aos-delay="600">
                <img src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/sakip.svg" class="img-fluid" alt="" />
                <h3 class="text-center">Feedback dan Diskusi</h3>
                <small>Pengguna dapat memberikan umpan balik atas karya-karya yang dipamerkan dan berpartisipasi dalam diskusi online tentang tren kreatif terbaru.</small>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Values Section -->

      <!-- ======= F.A.Q Section ======= -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <!-- Lokasi -->
            <div class="col-lg-4 col-md-12 footer-info text-center text-md-start" style="margin-right: 40px">
              <a href="/" class="logo d-flex align-items-center">
                <img src="img/mylogo/3.png" alt="HL Studio Logo" />
                <span style="font-size: 14pt">HL Studio</span>
              </a>
              <p>
                Kabupaten Kotawaringin Timur, Kalimantan Tengah<br />
                Jl. Wengga Jaya Agung, Sampit
              </p>
            </div>
            <!-- Akhir Lokasi -->

            <!-- Contact US -->
            <div class="col-lg-2 col-md-6 footer-info text-center text-md-start">
              <a href="/" class="logo d-flex align-items-center">
                <img src="{{asset('img/mylogo/1.png')}}" alt="HL Studio" />
                <span style="font-size: 14pt">Contact US</span>
              </a>
              <p>
                Email: info@hlstudio.com<br />
                Phone: +123456789
              </p>
            </div>
            <!-- Akhir Contact Us -->
          </div>
        </div>
      </div>
    </footer>

    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/aos/aos.js"></script>
    <script src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/js/sweetalert2.js"></script>

    <!-- Template Main JS File -->
    <script src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    
    <script>
      gsap.registerPlugin(TextPlugin);  
      gsap.to('.card-text1', { duration: 2, delay: 1.5, text: 'Menjadi pusat kreativitas dan inovasi yang menginspirasi serta memberdayakan individu untuk menghasilkan karya yang berdampak positif dalam industri kreatif global.' });
      gsap.to('.card-text2', { duration: 3, delay: 2, text: ' HL Studio berkomitmen untuk memberikan ruang dan sumber daya yang diperlukan bagi individu dari berbagai latar belakang untuk mengeksplorasi dan mengungkapkan kreativitas mereka melalui berbagai bentuk seni dan desain.' });
      gsap.to('.judul', { duration: 3, delay: 2, text: ' HL Studio | Industry Creative in Sampit' });
      gsap.to('.label', { duration: 3, delay: 2, text: ' HL Studio | Industry Creative ' });
    </script>

    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function (event) {
        var modalLogin = document.getElementById('login');
        var inputPengguna = document.getElementById('kduser');
        var formLogin = document.getElementById('formLogin');
        var btnSubmit = document.getElementById('btnSubmit');

        modalLogin.addEventListener('shown.bs.modal', function () {
          inputPengguna.focus();
        });

        formLogin.addEventListener('submit', function () {
          btnSubmit.setAttribute('disabled', '');
        });
      });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div>
            @if($errors->any())
                <div class="alert alert-danger">
                   <ul>
                        @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
              @endforeach
                  </ul>
                </div>
            @endif
            {{-- Akhir Notifikasi --}}
          <div class="modal-body d-flex justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
              <img src="img/creative.jpg" alt="" style="width: 30px" />
              <span style="margin-left: 10px; font-family: Nunito; color: navy"><strong>Login</strong> Pengguna</span>
            </a>
            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row featurette">
              <div class="col-md-5 order-md-2">
                <form action="sesi/login" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="email class="form-label"><small>  Masukan Email</small></label>
                    <input class="form-control " id="email" name="email" value="{{Session::get('email')}}">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label"><small> Masukan Password</small></label>
                    <input type="password" class="form-control" name="password" id="password" />
                  </div>
                
                  <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Masuk</button>
                </form>
              </div>
              <div class="col-md-6 order-md-1 d-flex">
                <img src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/login.svg" alt="" class="mx-auto d-block" style="max-width: 300px" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>

    <!-- Modal Register -->
    <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div>
            @if($errors->any())
                <div class="alert alert-danger">
                   <ul>
                        @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
              @endforeach
                  </ul>
                </div>
            @endif
            {{-- Akhir Notifikasi --}}
          <div class="modal-body d-flex justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
              <img src="img/creative.jpg" alt="" style="width: 30px" />
              <span style="margin-left: 10px; font-family: Nunito; color: navy"><strong>Register</strong> Pengguna</span>
            </a>
            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row featurette">
              <div class="col-md-5 order-md-2">
                <form action="sesi/create" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label"><small>  Nama </small></label>
                    <input class="form-control" type="text" id="name" name="name" value="{{Session::get('name')}}">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label"><small>  Masukan Email</small></label>
                    <input class="form-control " id="email" name="email" value="{{Session::get('email')}}">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label"><small> Masukan Password</small></label>
                    <input type="password" class="form-control" name="password" id="password" />
                  </div>
                
                  <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Daftar Akun</button>
                </form>
              </div>
              <div class="col-md-6 order-md-1 d-flex">
                <img src="https://fmis.bpkp.go.id/s1/kotawaringintimurkab/assetsberanda/img/login.svg" alt="" class="mx-auto d-block" style="max-width: 300px" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
