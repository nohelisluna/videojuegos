<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/pantalla1.css">

    <title>VideoJuegos</title>
</head>

<body>

    <header>
        <img class="logo" src="Images/logo.png">
        <a href="{{route("registrar")}}"><input class="regis" type="button"
                value="Registrarse"></a>
        <input id="Agregar" class="sesion" type="button" value="Iniciar sesion">
    </header>
    <div class="slider">
        <ul>
            <li>
                <img src="Images/marioo.jpg">
            </li>

            <li>
                <img src="Images/slider2.jpg">
            </li>

            <li>
                <img src="Images/slider4.jpg">
            </li>
            <li>
                <img src="Images/slider5.jpg">
            </li>
        </ul>
    </div>
    <div class="cuadro1">
        <div>
            <img class="imagen1" src="Images/fulbito.jpg">
        </div>
        <h6 class="txt">Disfruta toda la <br>emocion del futbol !</h6>
        <a href="https://www.ea.com/es-es/games/fifa/fifa-mobile"><input type="button" value="Jugar"
                class="btn1"></a>
    </div>
    <div class="cuadro2">
        <div>
            <img class="imagen2" src="Images/the lest of us.jpeg">
        </div>
        <h6 class="txt2">Espera lo inesperado en el<br> mundo de THE LAST OF US!</h6>
        <a href="https://www.playstation.com/es-co/games/the-last-of-us-part-i/"><input type="button" value="Jugar"
                class="btn2"></a>
    </div>
    <div class="cuadro3">
        <div>
            <img class="imagen3" src="Images/2x1_NSwitch_PokemonScarletViolet_Scarlet_esES_image1600w.jpg">
        </div>
        <h6 class="txt3">Descubre nuevo pokemon en <br> una inmesa aventura de mundo<br> abierto en pokemon
            escarlata.!</h6>
        <a href="https://www.nintendo.com/es-co/store/games/pokemon-games/#sort=df"><input class="btn3" type="button"
                value="Jugar"></a>
    </div>
    <!--
    <article >
        <img src="Imagenes/tu_papi.jpg">
        <img src="/Imagenes/el_tuyo (1).jpg">
       </article> -->

    <div id="mostrar"  class="contenedor">
        <div class="close">
            <p></p>
            <button id="cerrar">X</button>
        </div>
        <div class="logo2">
            <img src="Images/logo.png">
        </div>
        <div class="conten2">
            <div class="inicio">
                <h3 class="h1">Correo Usuario:</h3>
                <input class="input1" type="text">
            </div>
            <div class="inicio2">
                <h3 class="h2">Contraseña:</h3>
                <input class="input2" type="password">
            </div>
            <button class="Ingresar" type="button">Ingresar</button>
        </div>
    </div>

    <script src="/js/principal.js"></script>

</body>

</html>
