@extends('layouts.app')
@section('title', 'Pengaduan')

@push('css')
<style>
    .card {
      border-radius: 8px !important;
      padding: 0.4rem;
    }

    img {
      width: 100%;
      height: 10rem;
      border-radius: 7px;
    }
    a {
      box-shadow: inset 0 0 0 0 #004643;
      color: #004643;
      margin: 0 -.25rem;
      padding: 0 .25rem;
      transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
      font-weight: 500;
    }
    a:hover {
      box-shadow: inset 100px 0 0 0 #004643;
      color: white;
      text-decoration: none;
    }
</style>
@endpush

@section('content')
<div class="container">
  <div class="mb-3">
    <p style="font-size: 24px;font-weight:700">Data Laporan</p>
  </div>
  @foreach ($items as $item)
    <div class="card w-50">
        <div class="card-title my-1">
        </div>

        <div class="card-body py-0">
          <div class="row">
            <div class="col-md-5 p-0 flex-wrap">
              <img class="rounded float-left" src="{{asset('foto_laporan/'.$item->path_foto)}}" alt="">
            </div>
            <div class="col-md-7">
              <p class="font-weight-bold mb-0">{{$item->judullaporan}}</p>
              <p class="card-text" style="font-weight: 500;font-size: 0.7rem;opacity: 70%"><i class="fa fa-calendar-day kalender mr-2"></i>{{$item->datepicker}}</p>
              <span class="d-inline-block text-truncate text-wrap" style="max-height: 5rem;opacity: 85%">
                <p>{{$item->laporan}}</p>
              </span>
              <a href="{{route('admin.pengaduan.detail', $item->id)}}" class="float-right" style="border-radius: 5px !important;font-size:0.8rem">Detail</a>
            </div>
          </div>




          {{-- <div class="table-responsive">
            <table class="table">
              <thead style="background: #004643">
                <tr class="text-center text-white">
                  <th class="px-4 py-3">Foto</th>
                  <th class="px-4 py-3">Tanggal</th>
                  <th class="px-4 py-3">Status</th>
                  <th class="px-4 py-3">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                  <tr>
                    <td class="text-center"><img src="{{asset('foto_laporan/'.$item->path_foto)}}" alt=""></td>
                    <td class="text-center">{{date('d F Y', strtotime($item['created_at']))}}</td>
                    <td class="text-center">
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
                    </td>
                    <td>
                      <div class="d-flex justify-content-center">
                        <div class="detail">
                          <a href="{{route('admin.pengaduan.detail', $item->id)}}" class="btn bg-warning"><i class="fa-sharp fa-solid fa-eye text-white"></i></a>
                        </div>
                        <div class="delete">
                          <form method="POST" action="{{url('pengaduan-delete/'.$item->id)}}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn bg-danger"><i class="fa-solid fa-trash text-white"></i></button>
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div> --}}
        </div>
    </div>
      
  @endforeach
</div>
@endsection