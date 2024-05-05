<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarusuario="SELECT * FROM  	respuesta WHERE nombre ='$_POST[nombre]'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
echo "Encontrado";
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='./index.html'>Nuevo registro</a>";

}else{

    mysqli_query($conexion,"INSERT INTO respuesta (
        nombre,email,gameTipe,blike,likeBethesdagames,favoriteGame,opinion)
        VALUES(
            '$_POST[nombre]',
            '$_POST[email]',
            '$_POST[gameTipe]',
            '$_POST[likeBethesdagames]',
            '$_POST[BethesdaSagas]',
            '$_POST[favoriteGame]',
            '$_POST[opinion]'
    )");
        echo "<br> <h1>Usuario creado con exito</h1>";
        echo "<a href='./index.html'>Puedes generar un Nuevo registro</a>";
}
 

?>