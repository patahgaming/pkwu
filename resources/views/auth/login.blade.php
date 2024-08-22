
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="btw.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="wrepper">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login</h1>
            <div class="input-box">
                <!-- Menggunakan 'name' dan 'type' yang sesuai agar form berfungsi -->
                <input type="email" name="email" placeholder="Username/Email" required autofocus>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <!-- Menggunakan 'name' dan 'type' yang sesuai agar form berfungsi -->
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember">Ingatkan saya</label>
                <a href="#">Lupa password?</a>
            </div>
            <!-- Pastikan 'type' adalah 'submit' agar button bisa submit form -->
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Tidak punya akun? <a href="/register">Daftar</a></p>
            </div>
        </form>
    </div>
</body>
</html>
