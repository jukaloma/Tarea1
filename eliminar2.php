<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icons/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <?php include("menu.php"); ?>
        <h3>Resultado de la actualización</h3>
        <?php
            include("conecta.php");
            $bd = conectar();

            $cod = $_POST["victima"];

            $sql = "delete from alumnos where codigo = '$cod'";
            //echo $sql;

            $res = mysqli_query($bd,$sql);

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'>
                    <h4 class='alert-heading'>Error</h4>
                    <p>Error de eliminacion.</p>
                    <hr>
                    <p class='mb-0'>El alumno no se pudo eliminar revisa nuevamente los datos.</p>
                    </div>";
                mysqli_rollback($bd);
            }
            else {
                echo "<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'>¡Bien hecho!</h4>
                    <p>Modificacion exitosa.</p>
                    <hr>
                    <p class='mb-0'>El alumno se ha eliminado con exito.</p>
                </div>";
                mysqli_commit($bd);
            }
            mysqli_close($bd);
        ?>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>