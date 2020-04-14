<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Importir</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/importir.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <!-- <div class="container-fluid" id="container-header"> -->
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-5">
            <a class="navbar-brand ml-5" href="#"><img src="img/importir.png" class="img-fluid" alt=""
                    style="float: left; width: 50px;">
                <b style="color: black; line-height: 1.5; font-size: 25px;"> &nbsp; IMPORTIR</b></a>
            <button class="navbar-toggler" style="background-color: ghostwhite;" type="button" data-toggle="collapse"
                data-target="#nav-header" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav-header">
                <div class="navbar-nav mx-auto">
                    <a class="nav-item nav-link active m-2" href="desain"><b>DESAIN</b></a>
                    <a class="nav-item nav-link active m-2" href="digital_marketing"><b>DIGITAL MARKETING</b></a>
                    <a class="nav-item nav-link active m-2" href="pengembang"><b>PENGEMBANG</b></a>
                    
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

    <div class="container isi">
        <h2 class= "text-center">Desainer Importir</h2>
        <table class="table table-hover">
            <thead class="table table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Bagian</th>
                <th scope="col">No Telp</th>
                <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                    @foreach ($karyawan as $item)
                        <td>{{$item}}</td>
                    @endforeach
                    <td><img src="/img/gambar_1.jpg" alt="gambar" height="80px;"></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                    @foreach ($staff as $item)
                        <td>{{$item}}</td>
                    @endforeach
                    <td><img src="/img/gambar_2.jpg" alt="gambar" height="80px;"></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                    @foreach ($kontrak as $item)
                        <td>{{$item}}</td>
                    @endforeach
                    <td><img src="/img/gambar_3.jpg" alt="gambar" height="80px;"></td>

                </tr>
            </tbody>
        </table>
    </div>

    <script type="text/JavaScript" src="/js/jquery-3.4.1.min.js"></script>
    <script type="text/JavaScript" src="/js/popper.min.js"></script>
    <script type="text/JavaScript" src="/js/bootstrap.min.js"></script>
</body>
</html>