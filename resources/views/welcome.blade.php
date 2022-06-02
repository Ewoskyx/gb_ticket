<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/panel.css') }}" rel="stylesheet">

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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Panel</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Müşteriler</span>
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
                <div class="search">
                    <label>
                        <input type="text" placeholder="Ara">
                        <ion-icon name="search-circle-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <img src="">
                </div>
            </div>

            <div class="cardBox">
                <div class="card ticket-total">
                    <div>
                        <div class="numbers">1,292</div>
                        <div class="cardName">Toplam Talep</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="ticket-outline"></ion-icon>
                    </div>
                </div>
                <div class="card pend">
                    <div>
                        <div class="numbers">280</div>
                        <div class="cardName">Bekliyor</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="bug-outline"></ion-icon>
                    </div>
                </div>
                <div class="card inprog">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Çalışılıyor</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="barbell-outline"></ion-icon>
                    </div>
                </div>
                <div class="card res">
                    <div>
                        <div class="numbers">842</div>
                        <div class="cardName">Çözümlendi</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="checkmark-done-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Müşteri Talepleri</h2>
                        <a href="#" class="btn">Tümünü Görüntüle</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Kategori</td>
                                <td>Talep</td>
                                <td>Detay</td>
                                <td>Durum</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bug</td>
                                <td>User Register is not working</td>
                                <td>A new user can not register to the system</td>
                                <td><span class="status inprogress">Çalışılıyor</span></td>
                            </tr>
                            <tr>
                                <td>Feature</td>
                                <td>We need better styles</td>
                                <td>Better styles are needed for our main page</td>
                                <td><span class="status resolved">Çözümlendi</span></td>
                            </tr>
                            <tr>
                                <td>Bug</td>
                                <td>User Register is not working</td>
                                <td>A new user can not register to the system</td>
                                <td><span class="status pending">Bekliyor</span></td>
                            </tr>
                            <tr>
                                <td>Feature</td>
                                <td>We need better styles</td>
                                <td>Better styles are needed for our main page</td>
                                <td><span class="status pending">Bekliyor</span></td>
                            </tr>
                            <tr>
                                <td>Feature</td>
                                <td>We need better styles</td>
                                <td>Better styles are needed for our main page</td>
                                <td><span class="status resolved">Çözümlendi</span></td>
                            </tr>
                            <tr>
                                <td>Bug</td>
                                <td>User Register is not working</td>
                                <td>A new user can not register to the system</td>
                                <td><span class="status inprogress">Çalışılıyor</span></td>
                            </tr>
                            <tr>
                                <td>Feature</td>
                                <td>We need better styles</td>
                                <td>Better styles are needed for our main page</td>
                                <td><span class="status resolved">Çözümlendi</span></td>
                            </tr>
                            <tr>
                                <td>Bug</td>
                                <td>User Register is not working</td>
                                <td>A new user can not register to the system</td>
                                <td><span class="status pending">Bekliyor</span></td>
                            </tr>
                            <tr>
                                <td>Feature</td>
                                <td>We need better styles</td>
                                <td>Better styles are needed for our main page</td>
                                <td><span class="status pending">Bekliyor</span></td>
                            </tr>
                            <tr>
                                <td>Feature</td>
                                <td>We need better styles</td>
                                <td>Better styles are needed for our main page</td>
                                <td><span class="status resolved">Çözümlendi</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/panel.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
