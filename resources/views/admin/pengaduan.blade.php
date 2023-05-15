@extends('layouts.app')
@section('title', 'Pengaduan')

@push('css')
<style>
    .card {
        border-radius: 8px !important;
        padding: 1rem;
    }
</style>
@endpush

@section('content')
<div class="container">
  <div class="mb-3">
    <p style="font-size: 24px;font-weight:700">Data Laporan</p>
  </div>
    <div class="card">
        <div class="card-title">
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead style="background: #004643">
                <tr class="text-center text-white">
                  <th class="px-4 py-3">Foto</th>
                  <th class="px-4 py-3">Tanggal</th>
                  {{-- <th class="px-4 py-3">Laporan</th> --}}
                  <th class="px-4 py-3">Status</th>
                  <th class="px-4 py-3">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                  <tr>
                    <td class="text-center"><img src="{{asset('foto_laporan/'.$item->path_foto)}}" alt=""></td>
                    <td class="text-center">{{date('d F Y', strtotime($item['created_at']))}}</td>
                    {{-- <td>{{$item->laporan}}</td> --}}
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
          </div>
        </div>
    </div>
</div>
@endsection