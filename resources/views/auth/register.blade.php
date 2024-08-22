
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
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Register</h1>

            <div class="input-box">
                <input type="text" name="name" placeholder="Name" required autofocus>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <i class='bx bx-lock'></i>
            </div>

            <button type="submit" class="btn">Register</button>

            <div class="register-link">
                <p>Sudah punya akun? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
