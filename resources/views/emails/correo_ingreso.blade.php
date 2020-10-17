<style>
.mailing-container{
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    width: 50%;
    margin: auto;
}

.header-mailing{
    width: 100%;
    overflow: hidden;
    height: 450px;
}

.header-mailing img{
    object-fit: cover;
    object-position: center;
    width: 100%;
    height: 100%;
}

.title-mail{
    align-self: flex-start;
}

.title-mail h2{
    font-family: var(--font-family-bold);
    font-size: var(--main-font-size-middleTitles);
    margin: .5em;
}

.title-mail p{
    font-family: var(--font-family-light);
    font-size: var(--main-font-size-paragraphs);
    margin: .5em;
    color: #4B4B4B;
}

.body-text-mail{
    margin-top: 5em;
}

.body-text-mail h2{
    text-align: center;
    font-family: var(--font-family-bold);
    font-size: var(--main-font-size-middleTitles);
    margin-bottom: .5em;
}

.body-mailing{
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
}

.body-text-mail p{
    text-align: justify;
    font-family: var(--font-family-light);
    font-size: var(--main-font-size-paragraphs);
    width: 80%;
    margin: auto;
    color: #4B4B4B;
}

#cita{
    margin-top: 2em;
}

#join-here{
    display: inline-block;
    padding: 1em 2em 1em 2em;
    background-color: var(--main-red-color);
    font-family: var(--font-family-regular);
    font-size: var(--main-font-size-verySmallTitles);
    text-decoration: none;
    color: var(--main-white-color);
    margin: 4em 0 4em 0;
}

    body {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<div class="mailing-container">
    <div class="header-mailing">
        <img src="https://eventoronaldmc.000webhostapp.com/img/mail/mail-header.jpg" alt="mailing">
    </div>

    <div class="body-mailing">
        <div class="title-mail">
            <p>Bienvenido/a</p>
            <h2>La casa Ronald</h2>
        </div>

        <div class="body-text-mail">
            <h2>¡Gracias por tu ayuda!</h2>
            <p>Con tu donacion estas apoyando a cientos de niños y sus familias, que son acogidos por la Fundación Casa Ronald.
                Tu solidaridad hace posible que estas familias cuenten con un hogar, lejos de su hogar. </p>

                <p id="cita">Tenemos una cita que sera inolvidable, el próximo miércoles 25 de noviembre a las 7:00 p.m.
¡No Faltes!</p>
        </div>


        <a href="#" id="join-here">Ingrese Aquí</a>

    </div>

</div>
