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
        <br>
        <h3>Lista de Estudiantes</h3>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-md-5">

                <form action="agregar.php" method="post" id="frmAgregar" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="txtnom" class="form-label">Nombre</label>
                            <input type="text" required name="txtnom" id="txtnom" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="txtape" class="form-label">Apellido</label>
                            <input type="text" required name="txtape" id="txtape" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="txtcod" class="form-label">Numero Documento</label>
                        <input type="number" required min="10" name="txtcod" id="txtcod" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtcorreo" class="form-label">Correo Electrónico</label>
                        <input type="email" required name="txtcorreo" id="txtcorreo" class="form-control">
                    </div>


                    <hr>
                    <br>
                    <input type="submit" value="Agregar" class="btn btn-primary btn-lg">
                    <input type="reset" value="Limpiar" class="btn btn-secondary btn-lg">
                </form>
            </div>
            <div class="col-sm-12 col-md-7">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include("pie.php"); ?>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>