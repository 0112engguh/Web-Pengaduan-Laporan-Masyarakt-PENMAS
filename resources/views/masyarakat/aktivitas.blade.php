@extends('layouts.pengaduan')
@section('title', 'Laporan')

@push('css')
<style>
a {
  text-decoration: none !important;
  color: black !important;
}
a:hover {
  color: #006d68 !important; /* Warna lebih terang saat hover */
}
</style>
@endpush

@section('content')
<div class="container">
  {{-- <div class="mt-3 mb-3 w-50 d-flex inputs">
    <span><i class="fa fa-search"></i></span><input type="text" class="form-control" placeholder="Cari Laporan...">
  </div> --}}

  <div class="row">
    @foreach ($data_pengaduan as $item)
    <div class="col-md-3 mt-3 mb-4 d-flex justify-content-center">
      <div class="card card-list" style="width: 19rem;">
        <img src="{{asset('foto_laporan/'.$item->path_foto)}}" class="card-img-top rounded-3 p-2" style="height: 10rem;" alt="...">
        <div class="card-body">
          <a href="{{route('detail-pengaduan', $item->id)}}" class="card-title mb-2" style="font-weight: 650;opacity: 80%;font-size: 1rem">{{$item->judullaporan}}</a>
          <p class="card-text fw-light fs-6 text-truncate opacity-50">{{$item->laporan}}</p>
          <p class="card-text" style="font-weight: 500;font-size: 0.7rem"><i class="fa fa-calendar-day kalender me-2"></i>{{$item->datepicker}}</p>
          <div class="row">
            <div class="col-md-6">
              @if ($item->status === 'Selesai')
                <div style="background-color: green" class="badge text-wrap p-2"> 
                  <p class="mb-0">{{$item->status}}</p> 
                </div>
              @elseif ($item->status === 'Diproses')
                <div style="background-color: yellow" class="badge text-wrap p-2"> 
                  <p class="mb-0">{{$item->status}}</p> 
                </div>
              @else
                <div style="background-color: red" class="badge text-wrap p-2"> 
                  <p class="mb-0 text-white">{{$item->status}}</p> 
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
    {{-- <div class="card">
        <div class="card-title">
          <div class="text-center">
            <p class="mt-3" style="font-size: 18px;font-weight:700">Data Laporan</p>
          </div>
        </div>

        <div class="card-body">
          
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr class="text-center">
                  <th class="px-4 py-3">Foto</th>
                  <th class="px-4 py-3">Tanggal</th>
                  <th class="px-4 py-3">Laporan</th>
                  <th class="px-4 py-3">Status</th>
                  <th class="px-4 py-3">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                @foreach ($data_pengaduan as $item)
                  <tr>
                    <td><img src="{{asset('foto_laporan/'.$item->path_foto)}}" alt=""></td>
                    <td>{{date('d F Y', strtotime($item['created_at']))}}</td>
                    <td>{{$item->laporan}}</td>
                    <td>{{$item->status}}</td>
                    <td>
                      <div class="">
                        <a href="{{route('detail-pengaduan', $item->id)}}" class="btn"><i class="fa-sharp fa-solid fa-eye"></i></a>
                        <form method="POST" action="{{url('pengaduan-delete/'.$item->id)}}">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn "><i class="fa-solid fa-trash"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div> --}}
</div>
@endsection

