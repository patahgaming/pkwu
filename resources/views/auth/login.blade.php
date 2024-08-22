
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
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url(https://th.bing.com/th/id/OIP.VQWsrG57Qii3xK3N5b77XwHaE8?rs=1&pid=ImgDetMain) no-repeat;
    background-size: cover;
    background-position: center;
} 

.wrepper {
    width: 420px;
    background:transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: white;
    border-radius: 10px;
    padding: 30px 40px;
}

.wrepper h1 {
    font-size: 36px;
    text-align: center;
}

.wrepper .input-box {
position: relative;
width: 100%;
height: 50px;
margin: 30px 0;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, 2);
    border-radius: 40px;
    font-size: 16px;
    color: white;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder{
    color: white;
}

.input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.wrepper .remember-forgot {
    display:flex ;
    justify-content:space-between ;
    font-size: 14.5px;
    margin: -15px 0 15px;
}

.remember-forgot label input {
    accent-color: white;
    margin-right: 3px;
}

.remember-forgot a {
    color: white;
    text-decoration: none;
}

.remember-forgot a:hover {
    text-decoration:underline ;
}

.wrepper .btn {
    width: 100%;
    height: 45px;
    background: white;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.wrepper .register-link {
    font-size: 14.5px;
    text-align: center;
   margin: 20px 0 15px;
}

.register-link p a {
    color: #0CC0DF;
    text-decoration: none;
    font-weight: 600;
}
 
.register-link p a:hover {
    text-decoration: underline;
}

</style>
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
