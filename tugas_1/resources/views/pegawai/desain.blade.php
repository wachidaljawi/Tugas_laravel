<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Importir</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h2 class= "text-center">Teknisi Garuda Indonesia</h2>
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