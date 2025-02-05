<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js"></script>
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
      border-radius: 8px !important;
      padding: 1rem;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      width: 60% !important;
      /* height: 75%; */
  }
  p {
    margin-bottom: 8px !important;
  }
  .lapmas {
      background-color: #3a20e3;
      border-radius: 5px;
  }
  label,
  textarea {
      font-size: 0.8rem;
      letter-spacing: 1px;
  }
  textarea {
      padding: 5px;
      max-width: 100%;
      line-height: 1.3;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-shadow: 1px 1px 1px #999;
  }
    label {
        display: block;
        margin-bottom: 10px;
    }
</style>
<body>
  <section id="formulir">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100% !important">
      <div class="card">
          <div class="card-title px-3">
            <div class="lapmas p-2 mt-2">
              <p class="text-white m-2" style="font-size: 16px;font-weight:700">Sampaikan Laporan Anda!</p>
            </div>
          </div>
  
          <div class="card-body pt-0">
              <form class="row" action="{{url('/dashboard-masyarakat-store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="number" style="display: none" name="user_id" value="{{Auth::user()->id}}">
                <div class="col-md-6">
                  <div class="mt-1">
                    <p class="ml-3" style="font-weight: 600" class="form-label">Judul Laporan</p>
                    <div class="input-group mb-3">
                      <input placeholder="* Ketik Judul laporan anda" type="text" class="form-control" name="judullaporan" id="judullaporan">
                      <label class="form-label" for="inputGroupFile02"></label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mt-1">
                    <p class="ml-3" style="font-weight: 600" class="form-label">Tanggal Kejadian</p>
                    <div class="input-group date" id="datepicker">
                      <input name="datepicker" placeholder="* Ketik Tanggal kejadian" type="text" class="form-control">
                      <span class="input-group-append">
                          <span class="input-group-text bg-white d-block">
                              <i class="fa fa-calendar"></i>
                          </span>
                      </span>
                      <label class="form-label" for="inputGroupFile02"></label>
                    </div>
                    {{-- <div class="input-group mb-3">
                      <input name="datepicker" placeholder="* Ketik Tanggal kejadian" type="text" class="form-control" id="datepicker">
                      <label class="form-label" for="inputGroupFile02"></label>
                    </div> --}}
                  </div>
                </div>

                <div class="col-md-12 mb-1">
                  <div class="mt-1">
                    <p class="ml-3" style="font-weight: 600" class="form-label">Isi Laporan</p>
                    <textarea name="laporan" id="story" rows="6" class="form-control textarea-flex autosize" placeholder="* Ketik Isi Laporan Anda" required="" style="overflow: hidden; overflow-wrap: break-word; height: 157.6px;"></textarea>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mt-1">
                    <p class="ml-3" style="font-weight: 600" class="form-label">Lokasi Kejadian</p>
                    <div class="input-group mb-3">
                      <input name="lokasi" placeholder="* Ketik Lokasi kejadian" type="text" class="form-control" id="inputLokasi">
                      <label class="form-label" for="inputGroupFile02"></label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 mt-1">
                  <p class="ml-3" style="font-weight: 600" class="form-label">Kategori</p>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kategori</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>

                <div class="col-md-12">
                  <div class="mt-1">
                    <p class="ml-3" style="font-weight: 600" class="form-label">Upload Foto</p>
                    <div class="input-group mb-3">
                      <input name="path_foto" type="file" class="form-control" id="inputGroupFile02">
                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                  </div>
                </div>
              
  
                <div class="">
                  <button type="submit" style="background: #3a20e3" class="btn text-white mt-2 py-2 px-5">Kirim</button>
                </div>
              </form>
          </div>
      </div>
    </div>
  </section>
    <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          $('#datepicker').datepicker({
              format: 'dd-mm-yyyy',
              autoclose: true,      
              todayHighlight: true, 
              language: 'id'        
          });
      });
  </script>
  
</body>
</html>