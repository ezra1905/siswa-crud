<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h6>Data Siswa</h6>
    <a href="{{ route('tambah.siswa') }}">Tambah Siswa</a>
    <table border="2">
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
                        <a href="{{ route('siswa.edit',$item->id) }}">Edit</a> | <a href="{{ route('siswa.hapus',$item->id) }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
