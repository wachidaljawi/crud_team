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
                <h1 class="text-center">GAJI KARYAWAN PT GARUDA</h1>
                <hr>
                    {{-- <form method="POST" action="/gudangs/update/{{ $gudang->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }} --}}
                        <div class="form-group">
                            <label for="gaji">Gaji</label> 
                            <input type="text" class="form-control" id="gaji" name="gaji" value="{{ $gaji->gaji }}">
                            @error('gaji')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
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