<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ronald Mac Donald</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
<div class="mobile-menu-container">
    <span id="hamburger-icon"><img src="img/icons/mobile-menu.png" alt="hamburger icon"></span>
    <div class="mobile-menu-options">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Livestream</a></li>
            <li><a href="#">Galería</a></li>
            <li id="user-button-mobile"><a href="#">User</a><img src="img/icons/down-arrow.png" alt="donw arrow icon"></li>
        </ul>
    </div>
</div>



    <header class="menu-container">
        <img src="img/icons/logo.png" alt="Logotipo" class="Logo">
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Livestream</a></li>
            <li><a href="#">Galería</a></li>
            <li id="user-button"><a href="#">User</a><img src="img/icons/down-arrow.png" alt="down arrow icon"></li>
        </ul>
    </header>


@yield('content')
@yield('feedback')


<div class="footer-container">
    <div class="info-footer-container">
        <ul>
            <li><img src="img/icons/location.png" alt="location icon"><p>7909 Route 29, Buffalo, NY 14215</p></li>
            <li><img src="img/icons/phone.png" alt="phone icon"><p>+1-202-555-0153</p><br><p>+1-202-555-0116</p></li>
            <li><img src="img/icons/email.png" alt="email icon"><p>info@eventy123.com</p><br><p>contact@eventy123.com</p></li>
        </ul>
    </div>

    <div class="social-footer-container">
        <ul>
            <li><img src="img/icons/social.png" alt="social icon"></li>
            <li><img src="img/icons/social.png" alt="social icon"></li>
            <li><img src="img/icons/social.png" alt="social icon"></li>
            <li><img src="img/icons/social.png" alt="social icon"></li>
        </ul>
    </div>
</div>

<div class="copyright-container">
    <p>Copyright 2020 Event Landing Page - All rights reserved.</p>
</div>
<script src="js/mobile-menu.js"></script>
<script src="js/pagination.js"></script>
<script src="js/timer.js"></script>
</body>
</html>
