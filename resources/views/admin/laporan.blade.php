@extends('layouts.app')
@section('title', 'Pengaduan')

@push('css')
<style>
    .card {
        border-radius: 8px !important;
        padding: 1rem;
    }
    .btn {
        border-radius: 4px !important;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="mb-3">
        <p style="font-size: 24px;font-weight:700">Data Laporan</p>
    </div>
    <div class="mb-3">
        {{-- <a href="{{route('cetak-all-laporan')}}" class="py-2 px-2 btn btn-outline-secondary" style="font-weight: 500">Cetak PDF <i class="fa-regular fa-file-pdf ml-2"></i></a> --}}
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background: #004643">
                        <tr class="text-center text-white">
                            <th class="px-4 py-3">Foto</th>
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Laporan</th>
                            <th class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td class="text-center"><img src="{{asset('foto_laporan/'.$item->path_foto)}}" alt=""></td>
                            <td class="text-center">{{date('d F Y', strtotime($item['created_at']))}}</td>
                            <td class="text-center">{{$item->laporan}}</td>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
