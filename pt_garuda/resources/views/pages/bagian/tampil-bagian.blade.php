<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Data Bagian</title>
</head>
<body>

    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12">
                <h3>TABEL BAGIAN KARYAWAN PT GARUDA</h3>
                <a href="{{ route('bagian.create') }}" class="btn btn-info btn-sm mb-2">Tambah Bagian</a>

                @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Bagian</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bagian as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                {{-- <td><a href="#{{ $data->id }}">{{ $data->nik }}</a></td> --}}
                                <td>{{ $data->bagian }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-3">
                                            <form action="{{route('bagian.edit', $data->id)}}" method="GET">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-warning btn-sm btn-block mb-2">Edit</button>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <form action="{{route('bagian.destroy', $data->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-block" style="">Hapus</button>
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