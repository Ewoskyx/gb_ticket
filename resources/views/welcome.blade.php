<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/panel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">

    <title>GB ADMIN</title>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">GB ADMIN</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('stats') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Panel</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('all_tickets') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Müşteri Talepleri</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="title">Mesajlar</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-buoy-outline"></ion-icon>
                        </span>
                        <span class="title">Yardım</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Ayarlar</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Parola</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <span class="icon">
                            <ion-icon name="enter-outline"></ion-icon>
                        </span>
                        <span class="title">
                            Çıkış
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="user">
                    <img src="{{ asset('images/image-1.png') }}">
                </div>
            </div>

            {{-- @include('layouts.stat_cards') --}}
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Müşteri Talepleri</h2>
                        <div class="search">
                            <label>
                                <input type="text" placeholder="Ara">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </div>
                    </div>
                    @yield('table')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/panel.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
