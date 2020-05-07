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

    <div class="container">
        <div class="row">
            <div class="col-6">

                <h3 class="mt-3"><b>Detail Karyawan {{$karyawan->nama}}</b></h3>
            </div>
        </div>
        {{-- <div class="card"> --}}
            {{-- <div class="card-body"> --}}

              <h5 class="card-title">{{$karyawan->nik}}</h5>
              <h5 class="card-title">{{$karyawan->nama}}</h5>
              <p class="card-text">{{$karyawan->alamat}}</p>
              <p class="card-text">{{$karyawan->no_HP}}</p>
              <p class="card-text">{{$karyawan->umur}}</p>
              <p class="card-text">{{$karyawan->jenis_kelamin}}</p>

              {{-- <a href="{{ $karyawan->id }}/edit" class="badge badge-info">Edit</a> --}}

              {{-- <form action="{{ $gudang->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="badge badge-danger">Delete</button>
              </form> --}}

              <a href="/karyawan" class="badge badge-warning">Kembali</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
