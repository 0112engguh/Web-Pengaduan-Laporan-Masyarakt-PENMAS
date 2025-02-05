<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

    <title>Laporan Masyarakat</title>
</head>
<style>
  .card {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }
</style>
<body>

    <header>
      <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top transparent">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{asset('front/img/Group 10.svg')}}" style="width: 6em" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-auto mt-2 fw-semibold mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#banner">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tata_cara">Tata Cara</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
            </ul>
            @if(auth()->check())
              @include('layouts.partials.nav-auth')
            @else
              <a href="{{route('register')}}" class="btn btn-primary">Daftar</a>
              <a href="{{route('login')}}" class="btn btn-primary ms-1">Masuk</a>
            @endif
          </div>
        </div>
      </nav> 
    </header>

    <section id="banner">
        <div class="banner">
          <video autoplay loop muted playsinline id="bg-video" class="">
            <source src="{{asset('front/img/bg2.mp4')}}">
          </video>
          <div class="container">
            <div class="text-banner position-absolute top-50 start-25 translate-middle-y">
              <ul class="fw-bold text-white">
                <li><p class="pb-0 mb-0">Layanan Pengaduan</p></li>
                <li><p>Masyarakat Online</p></li>
                <li><p class="fw-light fs-6">Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat.</p></li>
                <li><a href="{{url('/form-laporan')}}" class="btn btn-primary fs-6 fw-normal"><span class="icon"><img src="{{asset('front/img/pen.svg')}}" alt=""></span> Buat Pengaduan</a></li>
              </ul>
            </div>
          </div>
        </div>
    </section>

    <section id="menu" class="d-flex align-items-center">
      <div class="container">
        <div class="row fw-semibold" style="color: #263238 !important">
          <div class="col-md-4">
            <a href="">
              <div class="card">
                <div class="card-body d-flex justify-content-center align-items-center gap-2">
                  <span><img src="{{asset('front/img/fluent-color_people-20.svg')}}" alt=""></span>
                  <span class="">Lihat pengaduan masyarakat</span>
                  <span class=""><i class="bi bi-chevron-right"></i></span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4">
            <a href="">
              <div class="card">
                <div class="card-body d-flex justify-content-center align-items-center gap-2">
                  <span><img src="{{asset('front/img/fluent-color_history-20.svg')}}" alt=""></span>
                  <span class="">Laporan yang kamu buat</span>
                  <span class=""><i class="bi bi-chevron-right"></i></span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4">
            <a href="">
              <div class="card">
                <div class="card-body d-flex justify-content-center align-items-center gap-2">
                  <span><img src="{{asset('front/img/image 2.svg')}}" alt=""></span>
                  <span class="">Cari laporan</span>
                  <span class=""><i class="bi bi-chevron-right"></i></span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    
    <section id="tata_cara" class=" py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-3 ms-auto" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-5">
                  <img src="{{asset('front/img/Hand holding pen-bro.svg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">1. Tulis Laporan</h5>
                    <p class="card-text">Buat laporan yang jelas dan lengkap, mencakup informasi penting serta bukti pendukung seperti foto atau dokumen.</p>
                    {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-5">
                  <img src="{{asset('front/img/Folder-bro.svg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">2. Verifikasi Laporan</h5>
                    <p class="card-text">Laporan diverifikasi kebenaran informasi dalam laporannya dengan mengecek data dan sumber terkait.</p>
                    {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-3 ms-auto" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-5">
                  <img src="{{asset('front/img/Completed steps-bro.svg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">3. Menindaklanjuti Laporan</h5>
                    <p class="card-text">Laporan ditindak lanjut sesuai prosedur, seperti investigasi atau koordinasi dengan pihak terkait.</p>
                    {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-5">
                  <img src="{{asset('front/img/Completed-bro.svg')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">4. Laporan Selesai</h5>
                    <p class="card-text">Laporan dianggap selesai setelah masalah ditangani dan pelapor diberi informasi hasil penyelesaian.</p>
                    {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-center text-white font-medium py-3">
      © {{ now()->year }} Bagus Wicaksana
    </footer>














    <script>
      const navbar = document.getElementById('mainNavbar');
  
      window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
          navbar.classList.remove('transparent');
          navbar.classList.add('solid');
        } else {
          navbar.classList.remove('solid');
          navbar.classList.add('transparent');
        }
      });
    </script>





    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>