@extends('layouts.app')
@section('title', 'Pengaduan')

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
      <div class="card-body d-flex flex-row">
        <ul>
          <li><p style="font-weight: 600;font-size:1rem">Nama:</p></li>
          <li><p style="font-weight: 600;font-size:1rem">Telepon:</p></li>
          <li><p style="font-weight: 600;font-size:1rem">Tanggal:</p></li>
          <li><p class="mt-2" style="font-weight: 600;font-size:1rem">Status:</p></li>
        </ul>
        <ul>
          <li><p style="font-weight: 400">{{$data->name}}</p></li>
          <li><p style="font-weight: 400">{{$data->telepon}}</p></li>
          <li><p style="font-weight: 400">{{date('d F, Y', strtotime($item['created_at']))}}</p></li>
          <li>
            <p style="font-weight: 400">
              @if ($item->status == 'Belum diproses')
                <span class="bg-danger px-2 py-1 text-white rounded">
                  {{$item->status}}
                </span>
              @elseif ($item->status == 'Diproses')
                <span class="bg-warning px-2 py-1 text-white rounded">
                  {{$item->status}}
                </span>
              @else
                <span class="bg-success px-2 py-1 text-white rounded">
                  {{$item->status}}
                </span>
              @endif
            </p>
          </li>
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

    <div class="card mt-4">
      <div class="card-title text-center">
        <h4 style="font-weight: 700;font-size: 1.2rem">Tanggapan</h4>
      </div>
      <div class="card-body">
        <div class="text-center">
          @if (empty($tanggap->tanggapan))
              Belum ada Tanggapan
          @else
              <p>{{$tanggap->tanggapan}}</p>  
          @endif
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center mt-5">
      <a href="{{route('tanggapan', $item->id)}}" class="btn text-white py-3 px-3" style="background: #004346">Beri Tanggapan</a>
    </div>
    <div class="d-flex justify-content-center mt-2">
      <a href="{{route('cetak-pdf', $item->id)}}" class="btn text-white py-3 px-3" style="background: #004346">Cetak PDF</a>
    </div>
</div>
@endsection