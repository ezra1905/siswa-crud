<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('register.post') }}" method="post">
        @csrf
        <label for="">Email</label>
        <input type="email" name="email" id="" placeholder="Masukkan email"><br><br>

        <label for="">Nama</label>
        <input type="text" name="nama" id="" placeholder="Masukkan nama anda"><br><br>

        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukkan password"> <br><br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>
