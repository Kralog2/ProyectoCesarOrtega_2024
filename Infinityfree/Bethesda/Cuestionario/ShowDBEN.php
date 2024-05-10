<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="shortcut icon" href="../recursos/media/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="StyleCuestionary.css">
</head>
<body>
    <nav class="menu">
        <a href="../indexEN.php">Home</a>
        <a href="indexEN.php">Questionnaire</a>
        <a href="deleteuserEN.php">Delete record</a>
        <a href="ShowDBEN.php">View records</a>
    </nav>
    <div class="translate">
        <a href="#" id="idioma" class="idioma">
            <img src="../recursos/banderas/usa.png" alt="icono de bandera">
            <img src="../recursos/banderas/buttondown.png" alt="icono bottom">
        </a>
        <ul id="idiomas" class="idiomas">
            <li class="opcion">
                <a href="ShowDB.php">
                    <img src="../recursos/banderas/mexico.png" alt="icono de bandera">
                    <span>Español</span>
                </a>
            </li>
            <li class="opcion">
                <a href="ShowDBEN.php">
                    <img src="../recursos/banderas/usa.png" alt="">
                    <span>English</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="titulo">
        <img src="../recursos/media/1200px-Bethesda_Game_Studios_logo.svg.png" alt="Logo de Bethesda">
        <h1>Data Collected</h1>
    </div>
    

    <div class="top">
        <h2>Warning:</h2>
        <p>In this section you will be able to see the number of records in the questionnaire.</p>
        <p>All information collected by this questionnaire is for non-commercial purposes and the data is for academic use only.</p>
    </div>

    <div style="background-color: #fff; padding-left: 30px; padding-right: 30px; padding-top: 5px; padding-bottom: 20px; margin: 20px 20px auto; border-radius: 15px; width: auto;">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Favorite genre</th>
                    <th>Favorite saga</th>
                    <th>Favorite game</th>
                    <th>feedback</th>
                </tr>
            </thead>
        <?php
        $consulta_sql="SELECT * FROM respuesta";
        $result = $conexion->query($consulta_sql);
        $count = mysqli_num_rows($result);
  
        while($row = mysqli_fetch_array($result)){
        ?>
            <tbody>
                <tr>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['gameTipe'] ?></td>
                    <td><?php echo $row['BethesdaSagas'] ?></td>
                    <td><?php echo $row['favoriteGame'] ?></td>
                    <td><?php echo $row['opinion'] ?></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
        </table>
    </div>
    <div class="comeHome">
        <a href="../indexEN.php">Back to main page</a>
        <br>
        <a href="indexEN.php">Make a new entry</a>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/idioma.js"></script>
    
</body>
</html>