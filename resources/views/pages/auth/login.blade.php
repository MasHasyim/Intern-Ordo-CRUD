<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/svg/logo.svg') }}">

    @php
        $files = File::glob(public_path('build/assets/*.css'));
    @endphp
    @foreach ($files as $file)
        <link rel="stylesheet" href="{{ asset('build/assets/' . basename($file)) }}" />
    @endforeach
    @vite(['resources/sass/app.scss'])

    {{-- boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="p-login p-auth">
        <img class="login-vector" src="{{ asset('images/background/wave.png') }}" alt="">
        <div class="login-content">
            <p class="login-title">Selamat Datang</p>
            <form id="loginForm" method="POST" onsubmit=" return validateForm()">
                <div class="login-card">
                    <div class="login-card-header">
                        <img src="{{ asset('images/icon/logo.svg') }}" alt="logo">
                    </div>
                    <div class="filter-group">
                        <div class="item">
                            <p>Username</p>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                            <span class="text-danger" id="usernameWarning" style="display: none">Please fill in your
                                username.</span>
                        </div>
                        <div class="item">
                            <p>Kata Sandi</p>
                            <div class="input-wrapper">
                                <input type="password" name="password" class="form-control" placeholder="Passsword"
                                    id="password" required>
                                <span class="text-danger" id="passwordWarning" style="display: none">Please fill in your
                                    password.</span>
                                <i class="bi bi-eye-slash input-postfix" id="togglePassword"
                                    onclick="togglePasswordVisibility()"></i>
                            </div>
                        </div>
                    </div>
                    <div class="filter-group">
                        <div class="item">
                            <button type="button"
                                onclick="window.location.href = `{{ route('super-admin.dashboard.index') }}`"
                                class="border-0 bg-transparent">
                                <a class="login-button">
                                    LOGIN
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    function togglePasswordVisibility() {
        var password = document.getElementById('password');
        var icon = document.getElementById('togglePassword');
        if (password.type === 'password') {
            password.type = 'text';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        } else {
            password.type = 'password';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        }
    }

    function validateForm() {
        let isvalid = true;
        const username = document.querySelctor('input[name="email"]');
        const password = document.querySelctor('input[name="password"]');

        document.getElementById('usernameWarning').style.display = 'none';
        document.getElementById('passwordWarning').style.display = 'none';

        if (!username.value) {
            document.getElementById('usernameWarning').style.display = 'block';
            isvalid = false;
        }

        if (!username.value) {
            document.getElementById('passwordWarning').style.display = 'block';
            isvalid = false;
        }

        return isvalid;

    }
</script>

</html>
