@extends('layouts.app')
@section('title', 'Tanggapan')

@section('content')
  <div class="container">
    <div class="text-center">
      <h3 class="mb-3" style="font-weight: 700">Berikan Tanggapan</h3>
    </div>

    <div class="card">
      <div class="card-body">
        <form action="{{url('/tanggapan-store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="number" style="display: none" name="pengaduan_id" value="{{$item->id}}">

          <p class="form-label" for="tanggapan" style="font-weight: 500">Tulis Tanggapan<i class="fas fa-hand-point-down"></i></p>
          <textarea id="tanggapan" name="tanggapan" rows="10" cols="110" placeholder="Tulis tanggapan anda disini"></textarea>

          <div class="mt-3 mb-3">
            <label for="jenis_kelamin" class="form-label">Status<span class="text-danger">*</span></label>
            <select class="form-select form-control" name="status" aria-label="Default select example">
              <option value="Belum diproses">Belum diproses</option>
              <option value="Diproses">Proses</option>
              <option value="Selesai">Selesai</option>
            </select>
          </div>

          <div class="mt-2">
            <button type="submit" style="background: #004643" class="btn text-white mt-2 py-2 px-5">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection