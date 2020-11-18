<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Ronald McDonald</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <?php echo '<script type="text/javascript" src = "js/config.js?v='.date("Y-m-d H:i:s").'"></script>';?>
    <?php echo '<script type="text/javascript" src = "js/mobile-menu.js?v='.date("Y-m-d H:i:s").'"></script>';?>
    <?php echo '<script type="text/javascript" src = "js/pagination.js?v='.date("Y-m-d H:i:s").'"></script>';?>
    <?php echo '<script type="text/javascript" src = "js/timer.js?v='.date("Y-m-d H:i:s").'"></script>';?>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

  <div class="mobile-menu-container">
      <span id="hamburger-icon"><img src="img/icons/mobile-menu.png" alt="hamburger icon"></span>
      <div class="mobile-menu-options">
          <ul>
              <li><a href="https://casaronald.org.co">Home</a></li>
              <li><a href="#">Galería</a></li>
              <li id="user-button-mobile"><a href="#">User</a><img src="img/icons/down-arrow.png" alt="donw arrow icon"></li>
          </ul>
      </div>
  </div>



      <header class="menu-container">
          <img src="img/icons/logo.png" alt="Logotipo" class="Logo">
          <ul class="menu">
              <li><a href="https://casaronald.org.co
  " target="_blank">Conoce más de la fundación</a></li>
              <li><a href="#">Livestream</a></li>
              <li><a href="#">Galería</a></li>
              <li id="user-button"><a href="#">User</a><img src="img/icons/down-arrow.png" alt="down arrow icon"></li>
          </ul>
      </header>

  <script src="js/mobile-menu.js"></script>


@yield('content')
@yield('feedback')


<div class="footer-container">
    <div class="info-footer-container">
        <div class="info-footer-diana">

            <h2>Contacto:</h2>
            <p>Diana Peña Giraldo<br>
            Dir. Ejecutiva
            </p>
            <p>Cel.: +57 313 8894160</p>
            <p>diana.pena@casaronald.org.co</p>
            <p>Fundación Casa Ronald McDonald de Colombia</p>

        </div>

        <div class="footer-separator"></div>

        <div class="info-footer-renata">
            <p>Renata Angel Saavedra<br>
            Directora de Desarrollo de Fondos y Comunicaciones</p>

            <p>Cel.: +57 300 6110848</p>
            <p>renata.angel@casaronald.org.co</p>
        </div>

    </div>

    <div class="social-footer-container">
        <ul>
            <li><a href="https://www.facebook.com/CasaRonaldColombia/"><img src="img/icons/facebook.png" alt="social icon"></a></li>
            <li><a href="https://instagram.com/casaronaldcolombia"><img src="img/icons/instagram.png" alt="social icon"></a></li>
            <li><a href="https://twitter.com/casaronaldcol"><img src="img/icons/twitter.png" alt="social icon"></a></li>
        </ul>
    </div>
</div>

<div class="copyright-container">
    <p>Copyright por: ©2020 Fundación Casa Ronald. Todos los derechos reservados.</p>
</div>
</body>
</html>
