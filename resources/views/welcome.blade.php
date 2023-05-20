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
                <h1 class="fw-bold">Selamat Datang Di Pendaftaran Siswa </h1>
                <hr>
                @if (Auth::check())
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
                @else
                    <div class="p-5">
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        <p class="text-muted my-4">Tidak memiliki akun ? <a href="{{ route('register') }}">Register</a></p>
                    </div>
                @endif
            </div>
        </div>
    </div>

</body>
</html>
