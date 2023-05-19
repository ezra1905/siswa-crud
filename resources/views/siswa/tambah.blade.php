<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Siswa</h1>
    <form action="{{ route('post.siswa') }}" method="post">
        @csrf
        <label for="">NIS</label>
        <input type="text" name="nis_nama" placeholder="masukkan nis"> <br><br>

        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="masukkan nama"><br><br>

        <label for="">Jenis Kelamin</label>
        <label for=""><input type="radio" name="jenis_kelamin" value="laki" id="">Laki</label>
        <label for=""><input type="radio" name="jenis_kelamin" value="perempuan" id="">Perempuan</label><br><br>

        <label for="">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea><br><br>

        <label for="">No HP</label>
        <input type="text" name="no_hp" placeholder="masukkan no hp"><br><br>

        <label for="">Nama Ortu</label>
        <input type="text" name="nama_ortu" placeholder="masukkan nama ortu"><br><br>

        <label for="">Asal Sekolah</label>
        <input type="text" name="asal_sekolah" placeholder="masukkan asal sekolah"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
