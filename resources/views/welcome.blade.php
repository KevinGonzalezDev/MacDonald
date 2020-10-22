@extends('layout.general')

@section('content')
<div class="heroimage-mask">
        <img src="img/templates/fcr_banner_home.png" alt="Hero home image" id="hero-image">
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
        <h2>¡Adquiere ya tu ticket y haz parte de la receta solidaria!</h2>
        </div>
</div>
        <div class="contain-titleWithBackground-container">


        <div class="block-ticket">
                <img src="img/tickets/ticket-11.png" alt="">
                <h2 id="price">80.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>1 Ingreso</li>
                    <li>Sin box</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/ticket-07.png" alt="">
                <h3 id="price">300.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>1 Ingreso al evento</li>
                    <li>+ Box Premium</li>
                    <li class="small-text">(Caja con ingredientes para preparar una deliciosa receta guiada por Leo Espinosa)</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/ticket-08.png" alt="">
                <h2 id="price">500.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>2 Ingresos</li>
                    <li>+ 2 Box Premium</li>
                    <li class="small-text">(Caja con ingredientes para preparar una deliciosa receta guiada por Leo Espinosa)</li>
                </ul>
            </div>

            <div class="block-ticket">
                <img src="img/tickets/ticket-09.png" alt="">
                <h2 id="price">745.000</h2>
                <h2>INCLUYE</h2>
                <ul>
                    <li>3 Ingresos</li>
                    <li>+ 3 Box Premium</li>
                    <li class="small-text">(Caja con ingredientes para preparar una deliciosa receta guiada por Leo Espinosa)</li>
                </ul>
            </div>



        </div>


        <div class="absolute-button">

            <div id="mascara" href="">Compra Aquí</div>

            <div class="api-container">
                <div id="afrus-container-form" data-form="Zm9ybS0xMTkzLW9yZ2FuaXphdGlvbi04MA=="></div>
                <script src="https://my.afrus.app/template/index.js"></script>
            </div>


        </div>


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
                       <h2>Palabras en vivo de Héctor Orozco, Gerente General Arcos Dorados Colombia, Aruba, Curazao y Trinidad & Tobago y Presidente Consejo Directivo Fundación Casa Ronald McDonald de Colombia.</h2>
                   </div>
               </div>

               <div class="block-eventos">
                   <div class="eventosimg-mask">
                       <div class="eventosimg-filter-container">
                           <p>EN SEGUIDA</p>
                           <span></span>
                       </div>
                       <img src="img/eventos/2.jpg" alt="Gerente MacDonalds">
                   </div>
                   <div class="eventos-info-container">
                       <h2>¡La gran chef Colombiana te enseñará a preparar una deliciosa receta en vivo!</h2>
                   </div>
               </div>

               <div class="block-eventos">
                   <div class="eventosimg-mask">
                       <div class="eventosimg-filter-container">
                           <p>DESPUÉS</p>
                           <span></span>
                       </div>
                       <img src="img/eventos/3.jpg" alt="Gerente MacDonalds">
                   </div>
                   <div class="eventos-info-container">
                       <h2>El espectacular show de la agrupación Colombiana con reconocimiento a nivel mundial.</h2>
                   </div>
               </div>
           </div>
   </div>

   <!-- CONTENIDO DE EVENTOS !END!------------------------------------------------------------------------------ -->

        <div class="livestream-container">
        <div class="livestreamimg-mask">
            <img src="img/livestream/livestream_1.png" alt="livestream image">
        </div>
        <div class="livestream-info-container">
            <h2>Leo Espinosa</h2>
            <p>La chef de Restaurante Leo (antes Leo Cocina y Cava), situado en Bogotá, ostenta el puesto 49 en la lista de los 50 mejores restaurantes de América Latina 2014.  ha sido reconocida como Mejor Chef Femenina de América Latina en 2017. Nació en Cartagena y se define como economista y artista plástica. Y su trabajo entre los fogones de su restaurante se centra en mostrar, reivindicar y potenciar las tradiciones gastronómicas de las comunidades colombianas, a partir de su patrimonio biológico, cultural e inmaterial.</p>
            <a href="#" id="join-livestream">Acceder</a>
        </div>
    </div>


    <div class="welcome-container">
        <h2>¡Bienvenido a La Casa Ronald!</h2>

        <p>Miles de familias con niños enfermos acuden a hospitales para recibir tratamiento médico especializado lejos de su hogar.
           La incertidumbre y las dificultades propias de esta situación, junto a los costos de transporte, alimentación y alojamiento pueden convertirse en causa de estrés emocional y financiero para las familias.
           La Fundación Casa Ronald McDonald conoce esta problemática y se ha especializado en crear programas de atención para las familias cuyo objetivo es mejorar la calidad de vida, el bienestar psicológico y la experiencia general de la hospitalización para el paciente y su familia.
        </p>
        <img src="img/icons/logo.png" alt="fundacion">

        <div class="fotos-fundacion-container">
          <div class="mascara-imagen">
            <img src="img/templates/fundacion1.jpg" alt="fundacion">
          </div>
          <div class="mascara-imagen">
            <img src="img/templates/fundacion2.jpg" alt="fundacion">
          </div>
          <div class="mascara-imagen">
            <img src="img/templates/fundacion3.jpg" alt="fundacion">
          </div>
        </div>


    </div>




@endsection
