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
        <div class="card">
            <div class="card-header">
                <h6>Data Siswa</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('tambah.siswa') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
                <table border="2" class="table table-bondered">
                    <thead>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Nama Ortu</th>
                        <th>Asal Sekolah</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis_kelamin == 'laki' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->nama_ortu }}</td>
                                <td>{{ $item->asal_sekolah }}</td>
                                <td>
                                    {{-- http://127.0.0.1:8000/siswa/edit/parameter id --}}
                                    <a href="{{ route('siswa.edit',$item->id) }}" class="btn btn-warning">Edit</a> | <a href="{{ route('siswa.hapus',$item->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>
