<?php
    function conectar(){
        $bd = mysqli_connect("localhost","root","", "lista_alumnos");
        if (!$bd) {
            echo "<h3>Error de conexion</h3>";
            return NULL;
        }else{
            return $bd;
        }
    }
?>