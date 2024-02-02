@extends('layouts.app')
@section('title', 'Laporan')

@push('css')
<style>
    /* .card {
        border-radius: 8px !important;
        padding: 1rem;
    } */
    .card-list {
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .card-img-top {
      border-radius: 8px;
    }
    .kalender {
      color: #B6C4B6;
    }
    .badge {
      border-radius: 10px !important;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="card">
        <div class="card-title">
          <div class="text-center">
            <p class="mt-3" style="font-size: 18px;font-weight:700">Data Laporan</p>
          </div>
        </div>

        <div class="card-body">
          <div class="row">
            @foreach ($data_pengaduan as $item)
            <div class="col-md-4 mb-4">
              <div class="card card-list" style="width: 19rem;">
                <img src="{{asset('foto_laporan/'.$item->path_foto)}}" class="card-img-top" style="height: 10rem;" alt="...">
                <div class="card-body">
                  <h5 class="card-title mb-2" style="font-weight: 650;opacity: 80%;font-size: 1rem">{{$item->judullaporan}}</h5>
                  <p class="card-text" style="font-weight: 500;font-size: 0.7rem"><i class="fa fa-calendar-day kalender mr-2"></i>{{$item->datepicker}}</p>
                  @if ($item->status === 'Selesai')
                    <div style="background-color: green" class="badge text-wrap"> 
                      <p class="mb-0">{{$item->status}}</p> 
                    </div>
                  @elseif ($item->status === 'Diproses')
                    <div style="background-color: yellow" class="badge text-wrap"> 
                      <p class="mb-0">{{$item->status}}</p> 
                    </div>
                  @else
                    <div style="background-color: red" class="badge text-wrap"> 
                      <p class="mb-0">{{$item->status}}</p> 
                    </div>
                  @endif
                </div>
              </div>
            </div>
            @endforeach

          </div>
          {{-- <div class="table-responsive">
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
          </div> --}}
        </div>
    </div>
</div>
@endsection
