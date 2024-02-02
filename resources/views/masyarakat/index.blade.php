@extends('layouts.app')
@section('Laporkan!')

@push('css')
<style>
    .card {
        border-radius: 8px !important;
        padding: 1rem;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .lapmas {
      background-color: #004643;
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
        line-height: 1.5;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-shadow: 1px 1px 1px #999;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }
</style>
@endpush

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-75">
        <div class="card-title px-3">
          <div class="lapmas p-2 mt-2">
            <p class="text-white m-2" style="font-size: 18px;font-weight:700">Sampaikan Laporan Anda!</p>
          </div>
        </div>

        <div class="card-body pt-0">
            <form action="{{url('/dashboard-masyarakat-store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="number" style="display: none" name="user_id" value="{{Auth::user()->id}}">

              <div class="mt-3">
                <p class="ml-3" style="font-weight: 600" class="form-label">Judul Laporan</p>
                <div class="input-group mb-3">
                  <input placeholder="* Ketik Judul laporan anda" type="text" class="form-control" name="judullaporan" id="judullaporan">
                  <label class="form-label" for="inputGroupFile02"></label>
                </div>
              </div>

              <div class="mt-3">
                <p class="ml-3" style="font-weight: 600" class="form-label">Isi Laporan</p>
                <textarea name="laporan" id="story" rows="6" class="form-control textarea-flex autosize" placeholder="* Ketik Isi Laporan Anda" required="" style="overflow: hidden; overflow-wrap: break-word; height: 157.6px;"></textarea>
              </div>
              {{-- <p class="form-label" for="laporan" style="font-weight: 500">Tulis laporan disini <i class="fas fa-hand-point-down"></i></p>
              <textarea id="story" name="laporan" rows="10" cols="170" placeholder="Tulis laporan anda disini"></textarea> --}}

              <div class="mt-3">
                <p class="ml-3" style="font-weight: 600" class="form-label">Lokasi Kejadian</p>
                <div class="input-group mb-3">
                  <input name="lokasi" placeholder="* Ketik Lokasi kejadian" type="text" class="form-control" id="inputLokasi">
                  <label class="form-label" for="inputGroupFile02"></label>
                </div>
              </div>

              <div class="mt-3">
                <p class="ml-3" style="font-weight: 600" class="form-label">Tanggal Kejadian</p>
                <div class="input-group mb-3">
                  <input name="datepicker" placeholder="* Ketik Tanggal kejadian" type="text" class="form-control" id="datepicker">
                  <label class="form-label" for="inputGroupFile02"></label>
                </div>
              </div>
              

              <div class="mt-3">
                <p class="ml-3" style="font-weight: 600" class="form-label">Upload Foto</p>
                <div class="input-group mb-3">
                  <input name="path_foto" type="file" class="form-control" id="inputGroupFile02">
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
              </div>

              <div class="mt-2">
                <button type="submit" style="background: #004643" class="btn text-white mt-2 py-2 px-5">Kirim</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
