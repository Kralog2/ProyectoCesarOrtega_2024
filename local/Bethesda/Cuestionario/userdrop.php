<?php
require "conexion.php";
if (isset($_POST['delete'])){

    mysqli_set_charset($conexion,'utf8');
    $registroEliminado = $_POST['email'];

    $buscarusuario = "SELECT * FROM respuesta WHERE email = '$registroEliminado'";
    $encontrado = $conexion -> query($buscarusuario);
    $count =mysqli_num_rows($encontrado);

    if($count==1){

        $dbdelete = "DELETE FROM respuesta WHERE email = '$registroEliminado'";

        mysqli_query($conexion, $dbdelete);
        mysqli_close($conexion);
        header('Location: deleteuser.php');

        ?>
            <h3 class="success">Tu informacion ha sido enviada</h3>
        <?php

    }else{
        ?>
            <h3 class="error">El correo no ha sido registrado</h3>
        <?php
    }

}

?>