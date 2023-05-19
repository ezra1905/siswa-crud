<center>
    <h1>Selamat Datang Di Pendaftaran Siswa </h1>
    <a href="{{ route('tampil.siswa') }}">Data Siswa</a> | <a href="{{ route('register') }}">Tambah Register</a> <br>
    <br> <br>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit"  value="Logout">
    </form>
</center>
