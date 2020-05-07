<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/garuda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Data Karyawan</title>
</head>
<body>
    <header class="judul mb-3">
        <!-- <div class="container-fluid" id="container-header"> -->
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-3">
            <a class="navbar-brand ml-5" href="#"><img src="img/travels.png" class="img-fluid" alt=""
                    style="float: left; width: 50px;">
                <b style="color: black; line-height: 1.5; font-size: 25px;"> &nbsp; Garuda</b></a>
            <button class="navbar-toggler" style="background-color: ghostwhite;" type="button" data-toggle="collapse"
                data-target="#nav-header" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav-header">
                <div class="navbar-nav mx-auto">
                    <a class="nav-item nav-link active m-2" href="home"><b>HOME</b></a>
                    <a class="nav-item nav-link active m-2" href="/karyawan"><b>KARYAWAN</b></a>
                    <a class="nav-item nav-link active m-2" href="/gaji"><b>GAJI</b></a>
                    <a class="nav-item nav-link active m-2" href="/bagian"><b>BAGIAN</b></a>
                    
                </div>
                <div class="number">
                    <p> <i class="fa fa-phone mt-3" style="color: red"></i> 10(256)-928 256 |</p>
                </div>
                <div class="navbar-icon mr-5">
                    <i class="fa fa-instagram m-2" style="color:rgb(172, 161, 161);"></i>
                    <i class="fa fa-linkedin m-2" style="color:rgb(172, 161, 161);"></i>
                    <i class="fa fa-facebook m-2" style="color:rgb(172, 161, 161);"></i>
                    <i class="fa fa-google-plus m-2" style="color:rgb(172, 161, 161)"></i>
                </div>
                <div class="search_icon ml-4">
                    <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                        <i class="fa fa-search mt-4 ml-4" style="color: ghostwhite;"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header> <br>

    <div class="container bg-white mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3>TABEL KARYAWAN PT GARUDA</h3>
                <a href="/karyawan/create" class="btn btn-info my-3">Tambah Data Karyawan</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('status') }}
                    </div>
                @endif

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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawan as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td><a href="/karyawan/{{ $data->id }}">{{ $data->nik }}</a></td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->no_HP }}</td>
                                <td>{{ $data->umur }}</td>
                                <td>{{ $data->jenis_kelamin}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-3">
                                            <form action="{{ route ('karyawan.edit', $data->id) }}" method="GET">
                                                @csrf
                                                @method('Patch')
                                                <button type="submit" class="btn btn-warning btn-sm mb-2">Edit</button>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <form action="{{ route ('karyawan.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
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
