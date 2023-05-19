<center>
    <h1>Login</h1>
    @if(session('error'))
        {{ session('error') }}
    @endif
    <form action="{{ route('login.post') }}" method="post">
        @csrf
        <label for="">Email</label>
        <input type="email" placeholder="Masukkan email" name="email"> <br><br>

        <label for="">Password</label>
        <input type="password" placeholder="Masukkan password" name="password"> <br><br>

        <button type="submit">Login</button>
    </form>
    <p>Tidak memiliki akun ? <a href="{{ route('register') }}">Register</a></p>

</center>
