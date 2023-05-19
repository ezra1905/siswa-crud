<center>
    <h1>Selamat Datang Di Pendaftaran Siswa </h1>
    @if (Auth::check())
        <a href="{{ route('dashboard') }}">Dashboard</a>
    @else
        <a href="{{ route('login') }}">Login</a>
        <p>Tidak memiliki akun ? <a href="{{ route('register') }}">Register</a></p>
    @endif
</center>
