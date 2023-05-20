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
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Tambah Siswa</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('post.siswa') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label" >NIS</label>
                        <input type="text" class="form-control" name="nis_nama" placeholder="masukkan nis">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="masukkan nama">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis Kelamin</label>
                        <label for="" class="form-label"><input type="radio" name="jenis_kelamin" value="laki" id="">Laki</label>
                        <label for="" class="form-label"><input type="radio" name="jenis_kelamin" value="perempuan" id="">Perempuan</label>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">No HP</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="masukkan no hp">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Ortu</label>
                        <input type="text" class="form-control" name="nama_ortu" placeholder="masukkan nama ortu">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" name="asal_sekolah" placeholder="masukkan asal sekolah">

                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
