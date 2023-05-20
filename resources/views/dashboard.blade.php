<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <div class="card">
            <div class="card-body text-center">
                <center>
                    <h1>Selamat Datang Di Pendaftaran Siswa </h1>
                    <a href="{{ route('tampil.siswa') }}">Data Siswa</a> | <a href="{{ route('register') }}">Tambah Register</a> <br>
                    <br> <br>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-danger"  value="Logout">
                    </form>
                </center>
            </div>
        </div>
    </div>

</body>
</html>
