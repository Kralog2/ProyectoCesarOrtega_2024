<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
    <link rel="shortcut icon" href="../recursos/media/favicon.png" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="StyleCuestionary.css">
</head>
<body>
    <div class="translate">
        <a href="#" id="idioma" class="idioma">
            <img src="../recursos/banderas/mexico.png" alt="icono de bandera">
            <img src="../recursos/banderas/buttondown.png" alt="icono bottom">
        </a>
        <ul id="idiomas" class="idiomas">
            <li class="opcion">
                <a href="index.php">
                    <img src="../recursos/banderas/mexico.png" alt="icono de bandera">
                    <span>Español</span>
                </a>
            </li>
            <li class="opcion">
                <a href="indexEN.php">
                    <img src="../recursos/banderas/usa.png" alt="">
                    <span>English</span>
                </a>
            </li>
        </ul>

    </div>

    <div class="titulo">
        <img src="../recursos/media/1200px-Bethesda_Game_Studios_logo.svg.png" alt="Logo de Bethesda">
        <h1>Cuestionario sobre Bethesda</h1>
    </div>
    

    <div class="top">
        <h2>Aviso:</h2>
        <p>En este apartado podrás realizar un cuestionario acerca de los juegos desarrollados por Bethesda, incluso si no son tus favoritos, esto es con el objetivo de recabar información acerca de los distintos tipos de jugadores que existen, y conocer las opiniones de las personas que disfrutan de los juegos de la compañía,y de igual manera de las que no.</p>
        <p>Toda la información recopilada por este cuestionario no tiene ningún fin comercial y los datos son de uso académico.</p>
    </div>
    <div class="form">
        <form method="post" autocomplete="off">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required placeholder="Ingresa tu nombre o apodo" maxlength="50">
                <br><br>
            </div>
            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" required placeholder="Ingresa tu correo">
                <br><br>
            </div>
            <div>
                <label for="gameTipe">¿Cual es tu genero de videojuegos favorito?</label>
                <input type="text" name="gameTipe" placeholder="indica cual es el genero de videojuegos que más te gusta=" required list="lista-tipeGame">
                <datalist id="lista-tipeGame">
                    <option value="RPG">Juego de Roll</option>
                    <option value="Shoter">Juego de disparos</option>
                    <option value="Simulacion">Juego de Simulacion</option>
                    <option value="Sandbox">Mundo abierto</option>
                    <option value="Gacha">Gacha</option>
                    <option value="RTS">Juego de estrategia en tiempo real</option>
                    <option value="MOBA">videojuegos multijugador de arena de batalla en línea</option>
                    <option value="MMO">Multijugador masivo en línea</option>
                </datalist>
                <br><br>
            </div>
            <div>
                <label for="likeBethesdagames">¿Te gustan los juegos de Bethesda?</label>
                <input type="text" name="likeBethesdagames" placeholder="indica si te gustan o no los juegos de Bethesda" required list="lista-like">
                <datalist id="lista-like">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </datalist>
                <br><br>
            </div>
            <div>
                <label for="BethesdaSagas">¿Qué franquicia es tu favorita?</label>
                <input type="text" name="BethesdaSagas" placeholder="indica cual saga te gusta mas" required list="lista-saga">
                <datalist id="lista-saga">
                    <option value="Fallout">Fallout</option>
                    <option value="The Elder Scrolls">The Elder Scrolls</option>
                    <option value="Wolfenstein">Wolfenstein</option>
                    <option value="Doom">Doom</option>
                    <option value="Starfield">Starfield</option>
                    <option value="Quake">Quake</option>
                </datalist>
                <br><br>
            </div>
            <div>
                <label for="favoriteGame">Juego favorito</label>
                <input type="text" name="favoriteGame" required placeholder="Escribe tu juego favorito" maxlength="200">
                <br><br>
            </div>
            <div>
                <label for="opinion">Escribe una opinión sobre Bethesda (opcional)</label>
                <input type="text" name="opinion" placeholder="Da un pequeño mensaje sobre lo que piensas de Bethesda y sus franquicias" maxlength="1500">
                <br><br>
            </div>
            <div class="buttons">
                <input name="send" type="submit" class="btn" value="Enviar">
                <input type="reset" name="reset" class="btn" value="Reset"></button>
            </div>
        </form>

        <?php
            include("send.php");
        ?>

    </div>
    <div class="comeHome">
        <a href="../index.php">Regresar a la pagina principal</a>
        <br><br>
        <a href="deleteuser.php">Elimina tu registro aquí</a>
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/idioma.js"></script>
</body>
</html>