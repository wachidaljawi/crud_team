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
                <h1 class="text-center">FORM BAGIAN KARYAWAN PT GARUDA</h1>
                <hr>
                {{-- <form action="{{ route('gudang.store') }}" method="POST">
                    @csrf --}}
                    <div class="form-group">
                        <label for="bagian">Bagian</label>
                        <select name="bagian" id="bagian" class="form-control">
                            <option value="Frontend Developer" {{ old('bagian') == 'Frontend Developer' ? 'selected' : '' }}>
                                Frontend Developer
                            </option>
                            <option value="Backend Developer" {{ old('bagian') == 'Backend Developer' ? 'selected' : '' }}>
                                Backend Developer
                            </option>
                            <option value="Fullstack Developer" {{ old('bagian') == 'Fullstack Developer' ? 'selected' : '' }}>
                                Fullstack Developer
                            </option>
                        </select>
                        @error('bagian')
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