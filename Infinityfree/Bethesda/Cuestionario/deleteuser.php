<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
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
                <a href="deleteuser.php">
                    <img src="../recursos/banderas/mexico.png" alt="icono de bandera">
                    <span>Español</span>
                </a>
            </li>
            <li class="opcion">
                <a href="deleteuserEN.php">
                    <img src="../recursos/banderas/usa.png" alt="">
                    <span>English</span>
                </a>
            </li>
        </ul>

    </div>

    <div class="titulo">
        <img src="../recursos/media/1200px-Bethesda_Game_Studios_logo.svg.png" alt="Logo de Bethesda">
        <h1>Eliminar Registro</h1>
    </div>
    

    <div class="top">
        <h2>Aviso:</h2>
        <p>En esta sección puede eliminar su registro en nuestra base de datos.</p>
    </div>
    <div class="form">
        <form method="post" autocomplete="off">
            <label for="email">Introduzca su dirección de correo electrónico</label>
            <input type="text" name="email" placeholder="Ingresa el correo con el que registraste tu respuesta">
            
            <div class="buttons">
                <input name="delete" type="submit" value="Eliminar">
            </div>
            

            <?php
                include("userdrop.php");
            ?>
        </form>
    </div>
    <div class="comeHome">
        <a href="../index.php">Regresar a la pagina principal</a>
        <br>
        <a href="index.php">Registra un nuevo registro</a>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/idioma.js"></script>
        
</body>
</html>