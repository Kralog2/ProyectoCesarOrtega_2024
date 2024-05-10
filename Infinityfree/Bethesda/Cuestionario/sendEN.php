<?php
include ("conexion.php");


   
    if (isset($_POST['send'])){
        
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $gametipe = trim($_POST['gameTipe']);
            $likeBethesdagames = trim($_POST['likeBethesdagames']);
            $BethesdaSagas = trim($_POST['BethesdaSagas']);
            $favoriteGame = trim($_POST['favoriteGame']);
            $opinion = trim($_POST['opinion']);

    mysqli_set_charset($conexion,'utf8');

    $buscarusuario = "SELECT * FROM respuesta WHERE email = '$email'";

    $encontrado = $conexion -> query($buscarusuario);
    $count =mysqli_num_rows($encontrado);
        if($count==1){
            ?>
                <h3 class ="error">This e-mail has already been registered</h3>
            <?php
        }else{
            $consulta = "INSERT INTO respuesta(nombre,email,gameTipe,likeBethesdagames,BethesdaSagas,favoriteGame,opinion)
                            VALUES ('$nombre','$email','$gametipe','$likeBethesdagames','$BethesdaSagas','$favoriteGame','$opinion')";
            $resultado = mysqli_query($conexion,$consulta);
    
            if($consulta){
                /*echo"<h3>Tu informacion ha sido enviada</h3>";
                echo "<a href='./index.html'>Nuevo registro</a>";*/
                ?>
                    <div class="success">
                        <h3>Your information has been sent</h3>
                        <a href="deleteuserEN.php">If you want you can delete your registration here</a>
                        <br>
                        <a href="ShowDBEN.php">If you want to see the other records click here</a>
                    </div>
                    
                <?php
            }else{
                /*echo"<h3>Ocurrio un error</h3>";
                echo "<a href='./index.html'>Nuevo registro</a>";*/
                
                
                ?>
                    <h3 class="error">An error occurred</h3>
                <?php
            }
        }
            
    }


?>