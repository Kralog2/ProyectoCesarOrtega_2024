<?php
require "conexion.php";
if (isset($_POST['delete'])){

    mysqli_set_charset($conexion,'utf8');
    $registroEliminado = trim($_POST['email']);

    $buscarusuario = "SELECT * FROM respuesta WHERE email = '$registroEliminado'";
    $encontrado = $conexion -> query($buscarusuario);
    $count =mysqli_num_rows($encontrado);

    if($count==1){

        $dbdelete = "DELETE FROM respuesta WHERE email = '$registroEliminado'";

        mysqli_query($conexion, $dbdelete);
        mysqli_close($conexion);
        header('Location: deleteuserEN.php');

        ?>
            <div class="success">
                <h3 >Your information has been deleted</h3>
                <br>
                <a href="ShowDBEN.php">If you want to see the other records click here</a>
            </div>
            
        <?php

    }else{
        ?>
            <h3 class="error">Mail has not been registered</h3>
        <?php
    }

}

?>