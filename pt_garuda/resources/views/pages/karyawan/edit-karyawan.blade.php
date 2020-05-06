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
                <h1 class="text-center">KARYAWAN PT GARUDA</h1>
                <hr>
                    {{-- <form method="POST" action="/gudangs/update/{{ $gudang->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }} --}}
                        <div class="form-group">
                            <label for="no_invoice">NIK</label> 
                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $karyawan->nik }}">
                            @error('nik')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}">
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ $karyawan->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. HP</label> 
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $karyawan->no_hp }}">
                            @error('no_hp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label> 
                            <input type="text" class="form-control" id="umur" name="umur" value="{{ $karyawan->umur }}">
                            @error('umur')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nik">Jenis Kelamin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki-laki" value="L" {{ $karyawan->jenis_kelamin == 'L' ?
                            'checked' : '' }}>
                        <label for="laki-laki" class="form-check-input">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P" {{ $karyawan->jenis_kelamin == 'P' ?
                            'checked' : '' }}>
                        <label for="perempuan" class="form-check-input">Perempuan</label>
                        </div>
                        @error('jenis_kelamin')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>