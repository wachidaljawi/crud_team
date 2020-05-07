<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
</head>
<body>

    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">FORM KARYAWAN PT GARUDA</h1>
                <hr>
                <form action="/karyawan" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik"  placeholder="Masukan Nik" name="nik" value="{{ old('nik') }}">
                        @error('nik')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama"  placeholder="Masukan Nama Anda" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat"  placeholder="Masukan Alamat Anda" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_HP">No. HP</label>
                        <input type="text" class="form-control" id="no_HP"  placeholder="Masukan No Handphone" name="no_HP" value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" id="umur"   placeholder="Masukan Umur Anda" name="umur" value="{{ old('umur') }}">
                        @error('umur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki">
                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    <a href="/karyawan" class="btn btn-warning">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
