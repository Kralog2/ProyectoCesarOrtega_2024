<?php
    $user_db="if0_36491599";
    $password_db="sI4LyGipCZjJbw";
    $db_name="if0_36491599_Registro";
    $host_db="sql212.infinityfree.com";
    $conexion= new mysqli($host_db,$user_db,$password_db, $db_name);
    if ($conexion -> connect_error){
        die("La conexxion fallo". $conexion->connection_error)
    }

?>