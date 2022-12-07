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
        <?php
        include("menu.php");
        ?>
        <div class="row">

            <div class="col-sm-12 col-md-7">
                <br>
                <h3>Lista de Estudiantes</h3>
                <hr>
                <form action="eliminar2.php" method="post" id="editar" enctype="multipart/form-data">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Documento</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("conecta.php");
                            $bd = conectar();
                            $sql = "select codigo, nombre, apellido, documento, correo from alumnos";
                            $datos = mysqli_query($bd, $sql);
                            while ($arr = mysqli_fetch_array($datos)) {
                                echo "<tr>";
                                echo "<td><input type='radio' name='victima' value='$arr[0]' required></td>";
                                echo "<td>$arr[0]</td>";
                                echo "<td>$arr[1]</td>";
                                echo "<td>$arr[2]</td>";
                                echo "<td>$arr[3]</td>";
                                echo "<td>$arr[4]</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <input type="submit" value="Eliminar" class="btn btn-danger btn-lg">
                </form>
            </div>
        </div>
        <?php
        mysqli_close($bd);
        include("pie.php");
        ?>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>