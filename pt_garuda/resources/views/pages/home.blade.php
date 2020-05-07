<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garuda Indonesia</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/garuda.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <header>
        <!-- <div class="container-fluid" id="container-header"> -->
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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

    </header>
    <!-- content -->
    <div class="jumbotron jumbotron-fluid" id="banner-container-fluid">
        <div class="container">
            <!-- <h1 class="text-center"><b> Garuda Indonesia </b></h1> -->
        </div>
    </div>
    <div class="container">
        <div class="jumbotron" id="isi">
            <img class="img-circle" src="img/logo Garuda Indonesia.png" alt="">
            <h1 class="display-4">Garuda Indonesia</h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia asperiores, totam illum recusandae
                veritatis dolor velit. Libero dicta eum illum consectetur non ipsum hic iure voluptate, iusto
                exercitationem neque blanditiis? </p>
            <p>
                <a class="btn btn-primary btn-lg" href="#">Learn More</a>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width:auto;">
                    <img src="img/garuda.jpg" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: auto;">
                    <img src="img/garuda.jpg" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                    </div>
                </div>
            </div>
        </div> <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width:auto;">
                    <img src="img/garuda.jpg" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: auto;">
                    <img src="img/garuda.jpg" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <br>
    <!-- footer -->
    <div class="container">
        <div class="footer">
            <h1 class="display-4">ETIAM VEROEROS LOREM</h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia asperiores, totam illum recusandae
                veritatis dolor velit. Libero dicta eum illum consectetur non ipsum hic iure voluptate, iusto
                exercitationem neque blanditiis? </p>
            <p>
                <a class="btn btn-outline-primary" href="#">GET STARTED</a>
            </p>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>