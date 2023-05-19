<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Siswa</h1>
    <form action="{{ route('siswa.update',$siswa->id) }}" method="post">
        @csrf
        <label for="">NIS</label>
        <input type="text" name="nis_nama" placeholder="masukkan nis" value="{{ $siswa->nis }}"> <br><br>

        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="masukkan nama" value="{{ $siswa->nama }}"><br><br>

        <label for="">Jenis Kelamin</label>
        <label for=""><input type="radio" name="jenis_kelamin" value="laki" id="" {{ $siswa->jenis_kelamin == 'laki' ? 'checked' : '' }}>Laki</label>
        <label for=""><input type="radio" name="jenis_kelamin" value="perempuan" id="" {{ $siswa->jenis_kelamin == 'perempuan' ? 'checked' : '' }}>Perempuan</label><br><br>

        <label for="">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10">
            {{ $siswa->alamat }}
        </textarea><br><br>

        <label for="">No HP</label>
        <input type="text" name="no_hp" placeholder="masukkan no hp" value="{{ $siswa->no_hp }}"><br><br>

        <label for="">Nama Ortu</label>
        <input type="text" name="nama_ortu" placeholder="masukkan nama ortu" value="{{ $siswa->nama_ortu }}"><br><br>

        <label for="">Asal Sekolah</label>
        <input type="text" name="asal_sekolah" placeholder="masukkan asal sekolah" value="{{ $siswa->asal_sekolah }}"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
