<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php 
            include("menu.php");  
            include("conecta.php");
            $bd = conectar();
            $nom = $_POST["txtnom"];
            $ape = $_POST["txtape"];
            $ced = $_POST["txtcod"];
            $correo = $_POST["txtcorreo"];
        ?>
        <h1>   </h1>
        <h3>Resultado de agregar alumno</h3>
        <hr>
        <?php

            $sql = "insert into alumnos values ('','$nom','$ape','$ced','$correo')";
            echo "<div><p>Nombre: $nom <br>Apellido: $ape <br>Documento: $ced <br>Correo: $correo </p></div>";
            try {
                $res = mysqli_query($bd,$sql);
                if (!$res) {
                    echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Error de registro.</p>
                    <hr>
                    <p class='mb-0'>El alumno no se pudo registrar revisa nuevamente los datos.</p>
                    </div>";
                }else{
                    echo "<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>¡Bien hecho!</h4>
                    <p>Registro exitoso.</p>
                    <hr>
                    <p class='mb-0'>El alumno se ha registrado con exito.</p>
                </div>";
                }
            } catch (\Throwable $th) {
                echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Numero de documento duplicado.</p>
                    <hr>
                    <p class='mb-0'>Los datos ingrsados ya se encuentran en nuestra base de datos, por favor verifica nuevamente los datos ingresados.</p>
                </div>";
            }
            mysqli_close($bd);
        ?>
    </div>
    <?php include("pie.php")?>

</body>

</html>