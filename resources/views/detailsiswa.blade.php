@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


      <table>
        <div class="container">
          <div class="row">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $data->nama }}" placeholder="Example input placeholder" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $data->kelas }}" placeholder="Kelas placeholder" disabled>
                </div>
                <div class="row">
                        <div class="col">
                          <label for="" class="form-label">Jurusan</label>
                          <input type="email" class="form-control" placeholder="email" value="{{ $data->jurusan }}" aria-label="email" disabled>
                        </div>
                        <div class="col">
                          <label for="" class="form-label">NISN</label>
                          <input type="text" class="form-control" placeholder="password" value="{{ $data->nisn }}" aria-label="password" disabled>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $data->alamat }}" placeholder="Example input placeholder" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $data->jeniskelamin }}" placeholder="Kelas placeholder" disabled>
                    </div>
                    <div class="row">
                        <div class="col">
                          <label for="" class="form-label">Email</label>
                          <input type="email" class="form-control" placeholder="email" value="{{ $data->email }}" aria-label="email" disabled>
                        </div>
                        <div class="col">
                          <label for="" class="form-label">Password</label>
                          <input type="password" class="form-control" placeholder="password" value="{{ $data->password }}" aria-label="password" disabled>
                        </div>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Wali Kelas</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $data->walikelasx }}" placeholder="Wali Kelas" disabled>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <!-- /.container-fluid -->


<!-- End of Main Content -->
@endsection