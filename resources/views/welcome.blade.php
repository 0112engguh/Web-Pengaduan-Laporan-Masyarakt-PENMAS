<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

    <title>Laporan Masyarakat</title>
</head>
<style>
  .card {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }
</style>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg bg-light stroke">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{asset('front/img/logo.png')}}" style="width: 8em" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#header">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tata_cara">Tata Cara</a>
              </li>
            </ul>
            <a href="{{route('login')}}" class="btn btn-warning text-white">Masuk</a>
          </div>
        </div>
    </nav>

    <section id="header" class="">
      <div class="container">
        <div class="row">
          <div class="col-md-6 title-header" style="margin-top: 13rem">
            <h1 class="text-white" style="font-weight: bold">Layanan Laporan/Pengaduan<br>Masyarakat Online</h1>
            <p class="fw-light" style="color: #ABD1C6">Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat.</p>
            {{-- <a href="{{url('/dashboard-masyarakat')}}" class="btn btn-warning text-white">Laporkan!</a> --}}
          </div>
          <div class="col-md-6 d-flex right-header" style="margin-top: 7rem">
            <img class="img-header" src="{{asset('front/img/layer 1 1.svg')}}" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="tata_cara" class=" py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="card border-0">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <img src="{{asset('front/img/Hand holding pen-bro.svg')}}" alt="">
                </div>
                <div class="text mt-2">
                  <p class="d-flex justify-content-center fw-bold">1. Tulis Laporan</p>
                  <p class="d-flex justify-content-center mt-1" style="text-align: center">Tulis laporan keluhan Anda dengan jelas.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card border-0">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <img src="{{asset('front/img/Folder-bro.svg')}}" alt="">
                </div>
                <div class="text mt-2">
                  <p class="d-flex justify-content-center fw-bold">2. Verifikasi Laporan</p>
                  <p class="d-flex justify-content-center mt-1" style="text-align: center">Tunggu sampai laporan Anda di verifikasi</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card border-0">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <img src="{{asset('front/img/Completed steps-bro.svg')}}" alt="">
                </div>
                <div class="text mt-2">
                  <p class="d-flex justify-content-center fw-bold">3. Menindaklanjuti Laporan</p>
                  <p class="d-flex justify-content-center mt-1" style="text-align: center">Laporan Anda sedang dalam tindak lanjut.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card border-0">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  <img src="{{asset('front/img/Completed-bro.svg')}}" alt="">
                </div>
                <div class="text mt-2">
                  <p class="d-flex justify-content-center fw-bold">4. Selesai</p>
                  <p class="d-flex justify-content-center mt-1" style="text-align: center">Laporan pengaduan telah selesai ditindak.</p>
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
      window.onscroll = function() {myFunction()};

      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }
      } 

      window.addEventListener("scroll", function() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
          document.getElementById("navbar").style.boxShadow = "0 8px 6px -6px #000";
        } else {
          document.getElementById("navbar").style.boxShadow = "none";
        }
      });
    </script>


    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>