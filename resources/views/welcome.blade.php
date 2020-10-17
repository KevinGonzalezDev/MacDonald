@extends('layout.general')

@section('content')
<div class="heroimage-mask">
        <img src="img/templates/heroimage.jpg" alt="Hero home image" id="hero-image">
    </div>


    <div class="timer-container">
        <div class="timerimg-mask">
            <img src="img/timer.png" alt="timer image">
        </div>

        <div class="timer-count-container">
            <h2>FALTAN:</h2>
            <p id="timing"></p>
        </div>
    </div>

    <!-- CONTENIDO DE TICKETS ------------------------------------------------------------------------------ -->

    <div class="tickets-container">
        <div class="header-tickets">
            <img src="img/templates/header-tickets.png" alt="tickets header">
            <div class="header-tickets-info-container">
                <h2>¡Sé parte de uno de los eventos más esperados del año!</h2>
                <p>Apoya a la fundación que da cuidados, salud y bienestar a familias y niños en tratamientos médicos.</p>
            </div>
        </div>
    </div>



    <div class="titleWithBackground-container">
        <div class="info-titleWithBackground-container">
            <h2>¡Adquiere tu ticket!</h2>
            <p>Sé parte de uno de los eventos más esperado del año.</p>
        </div>
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

        </div>


        <div class="absolute-button">

            <div id="mascara" href="">Compra Aquí</div>

            <div class="api-container">
                <div id="afrus-container-form" data-form="Zm9ybS0xMjA4LW9yZ2FuaXphdGlvbi02MA=="></div>
                <script src="https://my.afrus.app/template/index.js"></script>
            </div>


        </div>




@endsection
