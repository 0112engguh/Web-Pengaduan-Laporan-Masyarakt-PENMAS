@extends('layouts.app')
@section('title', 'Laporan')

@push('css')
<style>
    .card {
        border-radius: 8px !important;
        padding: 1rem;
    }
    /* .table-responsive {
      display: table !important;
    } */
</style>
@endpush

@section('content')
<div class="container">
    <div class="card">
        <div class="card-title">
          <div class="text-center">
            <p style="font-size: 18px;font-weight:700">Data Laporan</p>
          </div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr class="text-center">
                  <th class="px-4 py-3">Foto</th>
                  <th class="px-4 py-3">Tanggal</th>
                  {{-- <th class="px-4 py-3">Laporan</th> --}}
                  <th class="px-4 py-3">Status</th>
                  <th class="px-4 py-3">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                @foreach ($data_pengaduan as $item)
                  <tr>
                    <td><img src="{{asset('foto_laporan/'.$item->path_foto)}}" alt=""></td>
                    <td>{{date('d F Y', strtotime($item['created_at']))}}</td>
                    {{-- <td>{{$item->laporan}}</td> --}}
                    <td>{{$item->status}}</td>
                    <td>
                      <div class="">
                        <a href="{{route('detail-pengaduan', $item->id)}}" class="btn"><i class="fa-sharp fa-solid fa-eye"></i></a>
                        {{-- <form method="POST" action="{{url('pengaduan-delete/'.$item->id)}}">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn "><i class="fa-solid fa-trash"></i></button>
                        </form> --}}
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@endsection
