<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pertemuan6.update', $data->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">NIM</label>
                                        <input type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim', $data->nim) }}" placeholder="Masukkan NIM">

                                        <!-- error message untuk nim -->
                                        @error('nim')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">NAMA</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $data->nama) }}" placeholder="Masukkan Nama">

                                        <!-- error message untuk name -->
                                        @error('nama')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">JURUSAN</label>
                                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan', $data->jurusan) }}" placeholder="Masukkan Jurusan">

                                        <!-- error message untuk jurusan -->
                                        @error('jurusan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <a href="{{ route('pertemuan6.index') }}" class="btn btn-md btn-info">BACK</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
