@extends('layouts.app')
@section('Laporkan!')

@push('css')
<style>
    .card {
        border-radius: 8px !important;
        padding: 1rem;
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
<div class="container">
    <div class="card">
        <div class="card-title">
          <div class="text-center">
            <p style="font-size: 18px;font-weight:700">Silahkan tulis laporan anda!</p>

          </div>
        </div>

        <div class="card-body">
            <form action="{{url('/dashboard-masyarakat-store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="number" style="display: none" name="user_id" value="{{Auth::user()->id}}">

              <p class="form-label" for="laporan" style="font-weight: 500">Tulis laporan disini <i class="fas fa-hand-point-down"></i></p>
              <textarea id="story" name="laporan" rows="10" cols="170" placeholder="Tulis laporan anda disini"></textarea>

              <div class="mt-3">
                <p style="font-weight: 500" class="form-label">Upload Foto</p>
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
