@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <a href="/tambahdasis" class="btn btn-success">Tambah Data</a>
      @if ($message = Session::get('succes'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
      @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">NISN</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Wali Kelas</th>
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
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->kelas }}</td>
                  <td>{{ $row->jurusan }}</td>
                  <td>{{ $row->nisn }}</td>
                  <td>{{ $row->jeniskelamin }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>0{{ $row->notelp }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->password }}</td>
                  <!-- <td>{{ $row->walikelas }}</td> -->
                  <td>
                  @foreach ($walas as $guru)
                    <option value="{{ $guru->id }}">{{ $guru->name }}</option>
                  @endforeach
                  <td>
                    <a href="/tampildasis/{{ $row->id }}" class="btn btn-warning">Edit</a>
                    <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                    <a href="/detailsiswa/{{ $row->id }}" class="btn btn-info">Detail</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
</div>
@endsection