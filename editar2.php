<!DOCTYPE html>
<html lang="en">

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
        <h3>Editar Alumno</h3>
        <?php
        include("conecta.php");
        $bd = conectar();
        $nom = "";
        $ape = "";
        $ced = "";
        $correo = "";
        $cod = $_POST["victima"];

        $sql = "select nombre, apellido, documento, correo from alumnos where codigo=$cod";
        $datos = mysqli_query($bd, $sql);
        while ($arr = mysqli_fetch_array($datos)) {
            $nom = $arr[0];
            $ape = $arr[1];
            $ced = $arr[2];
            $correo = $arr[3];
        }
        ?>
        <div class="row">
            <div class="col-6">
                <form action="editar3.php" method="post" id="frmAgregar" enctype="multipart/form-data">
                    <input type="hidden" name="txtcod" id="txtcod" value="<?php echo $cod?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="txtnom" class="form-label">Nombre</label>
                            <input type="text" required name="txtnom" id="txtnom" class="form-control" value="<?php echo $nom ?>">
                        </div>
                        <div class="col-sm-6">
                            <label for="txtape" class="form-label">Apellido</label>
                            <input type="text" required name="txtape" id="txtape" class="form-control" value="<?php echo $ape ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="txtced" class="form-label">Numero Documento</label>
                        <input type="number" required min="10" name="txtced" id="txtced" class="form-control" value="<?php echo $ced ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtcorreo" class="form-label">Correo Electrónico</label>
                        <input type="email" required name="txtcorreo" id="txtcorreo" class="form-control" value="<?php echo $correo ?>">
                    </div>
                    <hr>
                    <br>
                    <input type="submit" value="Guardar" class="btn btn-primary btn-lg">
                </form>
            </div>
            <div class="col-6"></div>
        </div>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>