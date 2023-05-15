@extends('layouts.app')
@section('title', 'Detail Pengaduan')

@push('css')
<style>
    .card {
        border-radius: 8px !important;
        padding: 1rem;
    }
    li {
      list-style: none;
    }
</style>
@endpush

@section('content')
<div class="container">
  <div class="text-center">
    <h3 class="mb-3" style="font-weight: 700">Detail Pengaduan</h3>
  </div>
    <div class="card">
      <div class="card-body">
        <ul>
          <li><p style="font-weight: 600;font-size:1rem">Tanggal: <span style="font-weight: 400">{{date('d F, Y', strtotime($item['created_at']))}}</span><p></li>
          <li><p style="font-weight: 600;font-size:1rem">Status: <span class="bg-warning px-2 py-1 mt-2" style="font-weight: 400">{{$item->status}}<p></span></li>
        </ul>
      </div>
    </div>

    <div class="card mt-4">
      <div class="card-body">
        <div class="row">
          <div class="col-md-3">
            <p>Foto</p>
            <img class="img-fluid" src="{{asset('foto_laporan/'.$item->path_foto)}}" alt="">
          </div>
          <div class="col-md-9">
            <div class="text-center">
              <p style="font-weight: 700;font-size: 1.2rem">Laporan</p>
            </div>
            <div class="text-center">
              <p>{{$item->laporan}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection