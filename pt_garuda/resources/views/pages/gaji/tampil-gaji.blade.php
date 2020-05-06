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
                <h3>TABEL GAJI KARYAWAN PT GARUDA</h3>
                {{-- <a href="{{ route('gudang.create') }}" class="btn btn-info btn-sm">Tambah Barang</a> --}}
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gaji as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                {{-- <td><a href="#{{ $data->id }}">{{ $data->nik }}</a></td> --}}
                                <td>{{ $data->gaji }}</td>
                                <td>
                                    {{-- <a href="/gudangs/edit/{{ $data->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/gudangs/delete/{{ $data->id }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                </td>
                            </tr>
                        @endforeach
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