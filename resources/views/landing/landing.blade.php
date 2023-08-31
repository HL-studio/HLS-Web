<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Portofolio | Hilal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!-- Animasi gerak -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--My CSS -->
    {{-- <link rel="stylesheet" href="style.css" /> --}}
    <link rel="stylesheet" href="css/style-porto.css">

    {{-- Favicons --}}
    <link rel="icon" type="image/png" sizes="16x16" href="img/mylogo/1.png" style="height: max-content" />
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="img/logo.png" />

    <!-- Boostrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  </head>

  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #032a63">
      <div class="container">
        <a class="navbar-brand mylogonavbar" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="100">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="200">
              <a class="nav-link" href="#tentang">About</a>
            </li>
            <li class="nav-item" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="300">
              <a class="nav-link" href="#galeri">Gallery</a>
            </li>
            <li class="nav-item" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="400">
              <a class="nav-link" href="#kontak">Pesan Anonymous</a>
            </li>
            <li class="nav-item" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="400">
              <a class="nav-link" href="/sesi/logout">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <div>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>
          {{ session('success') }}
      </strong> Terimakasih sudah mengunjungi website saya!
  </div>
@endif
      </div>
      <img src="asset/img/Label.jpeg" alt="Hilal Hibatullah" width="200" class="rounded-circle img-thumbnail shadow" data-aos="flip-left" data-aos-duration="1000" />
      <h1 class="display-4 namaku"></h1>
      <p class="lead"></p>
      <!-- Audio -->
      <p class="captionmusic"></p>
      <audio controls loop data-aos="zoom-in" data-aos-delay="1000">
        <source src="asset/audio/audio1.mp3" type="audio/mp3" />
      </audio>
      <!-- Akhir Audio -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L30,186.7C60,181,120,171,180,149.3C240,128,300,96,360,112C420,128,480,192,540,213.3C600,235,660,213,720,186.7C780,160,840,128,900,112C960,96,1020,96,1080,117.3C1140,139,1200,181,1260,186.7C1320,192,1380,160,1410,144L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="tentang">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col" data-aos="zoom-out" data-aos-duration="500">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-lg-center">
          <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
            <p>
              Halo, nama saya Hilal Hibatullah. Saya seorang mahasiswa di Universitas Muhammadiyah Malang (UMM) dengan jurusan Informatika.saya berusaha untuk terus meningkatkan kemampuan dan pengetahuan saya di bidang ini agar dapat
              menjadi seorang profesional yang berkualitas. Selain itu, saya juga aktif dalam berbagai kegiatan di kampus untuk mengembangkan soft skills dan menjalin hubungan sosial yang baik. Saya sangat antusias untuk menghadapi
              tantangan baru dan berkontribusi positif bagi dunia teknologi melalui ilmu yang saya pelajari.
            </p>
          </div>
          <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <p>
              Saya memiliki hobi bermain bulutangkis dan antusias dengan desain UI/UX. Selain menikmati kegiatan fisik seperti bermain bulutangkis untuk menjaga kesehatan tubuh, saya juga merasa senang dan tertarik dalam merancang antarmuka
              pengguna (UI) yang menarik dan pengalaman pengguna (UX) yang memuaskan. Saya selalu berusaha untuk menggabungkan kreativitas dan kecermatan dalam setiap proyek desain yang saya kerjakan. Semangat dan ketekunan saya dalam
              bermain bulutangkis dan desain UI/UX menggambarkan bagaimana saya berusaha untuk mencapai keseimbangan dalam kehidupan dan berkarier di bidang yang saya cintai.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,288L26.7,256C53.3,224,107,160,160,160C213.3,160,267,224,320,224C373.3,224,427,160,480,154.7C533.3,149,587,203,640,218.7C693.3,235,747,213,800,192C853.3,171,907,149,960,117.3C1013.3,85,1067,43,1120,58.7C1173.3,75,1227,149,1280,186.7C1333.3,224,1387,224,1413,224L1440,224L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <section id="galeri">
      <div class="galeri">
        <div class="row text-center mb-3">
          <div class="col" data-aos="zoom-in" data-aos-duration="500">
            <h2>My Gallery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card" data-aos="flip-left" data-aos-duration="500">
              <img src="asset/img/projects/1.jpeg" class="card-img-top" alt="projects 1" />
              <div class="card-body">
                <p class="card-text1"></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
              <img src="asset/img/projects/2.jpeg" class="card-img-top" alt="projects 2" />
              <div class="card-body">
                <p class="card-text2"></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
              <img src="asset/img/projects/3.jpeg" class="card-img-top" alt="projects 3" />
              <div class="card-body">
                <p class="card-text3"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,128L34.3,117.3C68.6,107,137,85,206,96C274.3,107,343,149,411,186.7C480,224,549,256,617,234.7C685.7,213,754,139,823,122.7C891.4,107,960,149,1029,176C1097.1,203,1166,213,1234,197.3C1302.9,181,1371,139,1406,117.3L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->

    <!-- Contact -->
    <section id="kontak">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col" data-aos="zoom-in" data-aos-duration="500">
            <h2>Pesan Anonymous</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form name="hls-contact-form"method="post" action="/halaman">
              @csrf
              <div class="mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                <label for="name" class="form-label">Nama/Inisial/Nama Samaran</label>
                <input type="Text" class="form-control" id="Nama Lengkap" aria-describedby="name" name="nama" />
              </div>
              <div class="mb-3" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <label for="pesan" class="form-label">Masukan Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim" style="background-color: #032a63; border: whiteB" data-aos="fade-up" data-aos-duration="1000">Kirim</button>
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
          fill="#032a63"
          fill-opacity="1"
          d="M0,96L26.7,117.3C53.3,139,107,181,160,176C213.3,171,267,117,320,117.3C373.3,117,427,171,480,176C533.3,181,587,139,640,149.3C693.3,160,747,224,800,245.3C853.3,267,907,245,960,213.3C1013.3,181,1067,139,1120,122.7C1173.3,107,1227,117,1280,133.3C1333.3,149,1387,171,1413,181.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="text-white text-center pb-2" style="background-color: #032a63">
      <p>Created with by <i class="bi bi-alt text-white"></i> HL Studio</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Inisialisasi Animasi -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>

    <script>
      gsap.registerPlugin(TextPlugin);
      gsap.to('.lead', { duration: 2, delay: 1, text: 'UI/UX Design | Informatics Engineering' });
      gsap.to('.namaku', { duration: 2, delay: 1.5, text: 'Hilal Hibatullah' });
      gsap.to('.captionmusic', { duration: 2, delay: 2, text: 'Dengarkan lagu biar gak bosan bos' });

      gsap.to('.card-text1', { duration: 2, delay: 1.5, text: 'Pemandangan ini mencerminkan kesan kedamaian dan keindahan di tengah-tengah kota yang sibuk.' });
      gsap.to('.card-text2', { duration: 3, delay: 2, text: 'Pemandangan sawah yang menakjubkan menghampar di depan mata. Luasnya ladang hijau yang subur membentang sejauh mata memandang, menciptakan kesan kedamaian dan keasrian.' });
      gsap.to('.card-text3', {
        duration: 4,
        delay: 2.5,
        text: 'Pemandangan pantai adalah tempat di mana alam memperlihatkan kemegahannya yang tak tergantikan, menawarkan kedamaian, keindahan, dan kesempatan untuk bersantai dan menghargai keajaiban bumi yang luar biasa.',
      });
      gsap.to('.mylogonavbar', { duration: 1, text: 'HL Studio' });
      gsap.form('.navbar', { duration: 1.5, y: '100%', opacity: 0, ease: 'bounce' });
      // gsap.form('.img-thumbnail', { duration: 1, rotateY: 360, opacity: 0 });
      // gsap.form('.navbar', { duration: 1.5, y: '-100%', opacity: 0 });
      // gsap.form('.display-4', { duration: 1, x: 50, opacity: 0, delay: 0.5, ease: 'back' });
    </script>

    {{-- <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbyxGDj6bBGrq2lG0jdlFUs-wWuvhEG62i53MZXpsvJ3gmaA3MiICrvXNYmJh8_ARub9/exec';
      const form = document.forms['hls-contact-form'];
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const MyAlert = document.querySelector('.my-alert');

      form.addEventListener('submit', (e) => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tampilkan tombol loading, hilangkan tombol kirim
        btnKirim.classList.toggle('d-none');
        btnLoading.classList.toggle('d-none');
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
          .then((response) => {
            // Tammpilkan tombol kirim, hilangkan tombol loading
            btnKirim.classList.toggle('d-none');
            btnLoading.classList.toggle('d-none');

            // Tampilkan alert
            MyAlert.classList.toggle('d-none');

            // reser form
            form.reset();

            console.log('Success!', response);
          })
          .catch((error) => console.error('Error!', error.message));
      });
    </script> --}}
  </body>
</html>
