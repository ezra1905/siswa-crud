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
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="fw-bold text-center">Login</h1>
                        @if(session('error'))
                            {{ session('error') }}
                        @endif
                        <form action="{{ route('login.post') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label"> Email</label>
                                <input type="email" placeholder="Masukkan email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" placeholder="Masukkan password" name="password" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <p class="text-muted">Tidak memiliki akun ? <a href="{{ route('register') }}">Register</a></p>

                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
