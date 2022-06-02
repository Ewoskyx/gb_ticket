<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form novalidate="" action="{{ route('login') }}" method="POST">
        @csrf
        <img src="/images/gb_logo.png" alt="GB Logo">

        <label for="username">E-Posta</label>
        <input type="email" name="email" placeholder="E-Posta" id="email">

        <label for="password">Parola</label>
        <input type="password" name="password" placeholder="Parola" id="password">

        <button>Giriş</button>
        <div class="social">
            {{-- <div class="go"><i class="fab fa-google"></i> Parolamı unuttum</div>
            <div class="fb"><i class="fab fa-facebook"></i> Yeni Kayıt</div> --}}
        </div>
    </form>
</body>

</html>
