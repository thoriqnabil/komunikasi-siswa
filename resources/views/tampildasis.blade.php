<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Point Pelanggaran - Edit Data Siswa</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Siswa</h1>
        
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                    <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                        </div>
                        <div class="mb-3">
                        <label for="inputState" class="form-label">Kelas</label>
                            <select class="form-select" name="kelas" aria-label="Default select example">
                                <option selected>{{ $data->kelas }}</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                            <select class="form-select" name="jurusan" aria-label="Default select example">
                                <option selected>{{ $data->jurusan }}</option>
                                <option value="TJKT">TJKT</option>
                                <option value="Animasi">Animasi</option>
                                <option value="PPLG">PPLG</option>
                                <option value="BRF">BRF</option>
                                <option value="TE">TE</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NISN</label>
                            <input type="number" class="form-control" name="nisn" placeholder="NISN" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nisn }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                <option selected>{{ $data->jeniskelamin }}</option>
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>]
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                            <input type="number" class="form-control" name="notelp" placeholder="No Telepon" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->notelp }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->password }}">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <select class="form-control" name="walikelas" id="" required>
                            <!-- <input type="text" class="form-control" name="walikelas" placeholder="Wali Kelas" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                            @foreach ($walas as $guru)
                            <option value="{{ $guru->id }}">{{ $guru->name }}</option>
                            @endforeach
                            </select>
                            <!-- <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <input type="text" class="form-control" name="walikelas" placeholder="Wali Kelas" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->walikelas }}"> -->
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>