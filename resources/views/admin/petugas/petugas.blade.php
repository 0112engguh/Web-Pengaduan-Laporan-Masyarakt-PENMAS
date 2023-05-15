@extends('layouts.app')
@section('title', 'Petugas')
    
@section('content')
    <div class="container-fluid">
      <h4>Data Petugas</h4>
      <a href="{{route('admin.tambah-petugas')}}" class="btn btn-success">Tambah Petugas</a>

      <div class="table-responsive">
        <table class="table table-striped mt-3">
          <thead style="background: #004643" class="text-white">
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
              <tr>
                <th scope="row">{{$item->name}}</th>
                <td>{{$item->email}}</td>
                <td>{{$item->roles}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection