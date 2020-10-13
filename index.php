<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ronald Mac Donald</title>
    <link rel="stylesheet" href="estilos/main.css">
    <link rel="stylesheet" href="estilos/responsive.css">
</head>
<body>
    
    <?php include __DIR__ . '/menu.php' ?>


    <div class="heroimage-mask">
        <img src="img/templates/heroimage.jpg" alt="Hero home image" id="hero-image">
    </div>
    

    <img src="img/templates/timer.jpg" alt="Timer" id="timerimg">

    <!-- CONTENIDO DE TICKETS ------------------------------------------------------------------------------ -->

    <div class="tickets-container">
        <div class="header-tickets">
            <img src="img/templates/header-tickets.png" alt="tickets header">
            <div class="header-tickets-info-container">                
                <h2>¡Sé parte de uno de los eventos más esperados del año!</h2>
                <p>Adquiere ya tus tickets o regístrate para crear una orden de compra y realizar en el momento que desees.</p>
            </div>
        </div>
    </div>



    <div class="titleWithBackground-container">
        <div class="info-titleWithBackground-container">
            <h2>¡Adquiere tu ticket!</h2>
            <p>Sé parte de uno de los eventos más esperado del año.</p>
        </div>

        <div class="contain-titleWithBackground-container">

            <div class="block-ticket">
                <img src="img/tickets/ticket-07.png" alt="">
                <h3 id="price">300.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>1 Ingreso al evento</li>
                    <li>+ emotional box</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/ticket-08.png" alt="">
                <h2 id="price">500.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>2 Ingresos</li>
                    <li>+ 2 emotional box</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/ticket-09.png" alt="">
                <h2 id="price">745.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>3 Ingresos</li>
                    <li>+ 3 emotioal box</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/ticket-09.png" alt="">
                <h2 id="price">990.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>4 Ingresos</li>
                    <li>+ 4 emotioal box</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/ticket-09.png" alt="">
                <h2 id="price">80.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>1 Ingreso</li>
                    <li>Sin box</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- CONTENIDO DE TICKETS !END! ------------------------------------------------------------------------------ -->


    
    <!-- CONTENIDO DE EVENTOS ------------------------------------------------------------------------------ -->


    <div class="eventos-container">
        <h2>Nuestro Evento</h2>

            <div class="blocks-evento-container">
                <div class="block-eventos">
                    <div class="eventosimg-mask">
                        <div class="eventosimg-filter-container">
                            <p>EN VIVO</p>
                            <span></span>
                        </div>
                        <img src="img/eventos/1.jpg" alt="Gerente MacDonalds">
                    </div>

                    <div class="eventos-info-container">
                        <h2>Presentación: Gerente Mc Donald's</h2>
                        <p>Los eventos virtuales llegaron para quedarse. El desafío de encontrar nuevas experiencias.</p>
                    </div>
                </div>

                <div class="block-eventos">
                    <div class="eventosimg-mask">
                        <div class="eventosimg-filter-container">
                            <p>EN SEGUIDA</p>
                            <span></span>
                        </div>
                        <img src="img/eventos/1.jpg" alt="Gerente MacDonalds">
                    </div>
                    <div class="eventos-info-container">
                        <h2>Cocinando con Leonor Espinosa</h2>
                        <p>La resiliencia es uno de los factores determinantes del éxito y la reorientación estratégica.</p>
                    </div>
                </div>

                <div class="block-eventos">
                    <div class="eventosimg-mask">
                        <div class="eventosimg-filter-container">
                            <p>DESPUÉS</p>
                            <span></span>
                        </div>
                        <img src="img/eventos/1.jpg" alt="Gerente MacDonalds">
                    </div>
                    <div class="eventos-info-container">
                        <h2>Show especial: Monsieur Periné</h2>
                        <p id="black-paragraph">Sed ut perspiciatis unde omnis iste natus error voluptatem accusan tium dolore.</p>
                    </div>
                </div>
            </div>
    </div>

    <!-- CONTENIDO DE EVENTOS !END!------------------------------------------------------------------------------ -->



    <!-- CONTENIDO DE LIVESTREAM ------------------------------------------------------------------------------ -->


    <div class="livestream-container">
        <div class="livestreamimg-mask">
            <img src="img/livestream/livestream.png" alt="livestream image">
        </div>
        <div class="livestream-info-container">
            <h2>LIVESTREAM</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio similique distinctio deleniti repudiandae ratione obcaecati dolore, beatae, doloremque fugit unde amet expedita blanditiis facilis. Aliquam, temporibus. Asperiores, distinctio blanditiis similique assumenda est, velit eaque tempora eveniet, iure quam commodi illum ipsam quae! Nihil, inventore fugit repudiandae suscipit voluptate consectetur quibusdam?</p>
            <a href="#" id="join-livestream">Acceder</a>
        </div>
    </div>


    <!-- CONTENIDO DE lIVESTREAM !END! ------------------------------------------------------------------------------ -->

    <?php include __DIR__ . '/feedback.php' ?>

    <?php include __DIR__ . '/footer.php' ?>



    <script src="js/pagination.js"></script>
    
</body>
</html>