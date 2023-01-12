@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pelanggaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pelanggaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <a href="/tambahpelanggaran" class="btn btn-success">Tambah Data</a>
      @if ($message = Session::get('succes'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
      @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Pelanggaran</th>
                <th scope="col">Sanksi</th>
                <th scope="col">Level</th>
                <th scope="col">Point</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
              @foreach ($data as $row)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $row->namapelanggaran }}</td>
                  <td>{{ $row->sanksi }}</td>
                  <td>{{ $row->level }}</td>
                  <td>{{ $row->poin }}</td>
                  <td>
                    <a href="/tampilpelanggaran/{{ $row->id }}" class="btn btn-warning">Edit</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
</div>
@endsection