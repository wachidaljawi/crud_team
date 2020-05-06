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
                <h3>TABEL BIODATA KARYAWAN</h3>
                {{-- <a href="{{ route('gudang.create') }}" class="btn btn-info btn-sm">Tambah Barang</a> --}}
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. HP</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $karyawan->id }}</td>
                                <td>{{ $karyawan->nik }}</td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->alamat }}</td>
                                <td>{{ $karyawan->no_hp }}</td>
                                <td>{{ $karyawan->umur }}</td>
                                <td>{{ $karyawan->jenis_kelamin }}</td>
                                <td>
                                    {{-- <a href="/gudangs/edit/{{ $gudang->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/gudangs/delete/{{ $gudang->id }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>