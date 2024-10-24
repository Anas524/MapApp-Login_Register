<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map App Tracking System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <h2 class="<?= session('mapapp') ?>">Map App</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close">
            <i class="bi bi-x"></i>
        </span>
        
        <div class="from-box login">
            <h2>Login</h2>
            <form action="/add-login" method="post">
                <div class="input-box">
                    <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" name="email" required placeholder="Email">
                    <label>Email</label>   
                </div>
                <div class="input-box">
                    <span class="icon"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" required placeholder="Password">
                    <label>Password</label>   
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link"> Register</a></p>
                </div>
                @csrf
            </form>
        </div>

        <div class="from-box register">
            <h2>Registration</h2>
            <form action="/register" method="post">
                <div class="input-box">
                    <span class="icon"><i class="bi bi-person-fill"></i></span>
                    <input type="text" name="username" required placeholder="Username">
                    <label>Username</label>   
                </div>
                <div class="input-box">
                    <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" name="email" required placeholder="Email">
                    <label>Email</label>   
                </div>
                <div class="input-box">
                    <span class="icon"><i class="bi bi-lock"></i></span>
                    <input type="password" name="password" required placeholder="Password">
                    <label>Password</label>   
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" required> Agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link"> Login</a></p>
                </div>
                @csrf
            </form>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
