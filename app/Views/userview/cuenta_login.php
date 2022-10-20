<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crear cuenta de usuario</title>

    <meta name="description" content="Acceso al servicio de banca en linea">
    <meta name="author" content="Diseño de Aplicaciones Web">

    <link rel="stylesheet" href=<?php echo base_url() . '/public/css/bootstrap.min.css'; ?>>

</head>

<body>

    <div class="container mt-5">
        <form method="post" action=<?php echo base_url() . "/login/crear";?>>
        <div class="form-group">
                <label for="cedula">Numero de c&eacute;dula</label>
                <input type="text" class="form-control" id="cedula" name="cedula">
            </div>
            <div class="form-group">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="text" class="form-control" id="clave" name="clave">
            </div>
            <div class="form-group">
                <label for="clave2">Repetir clave</label>
                <input type="email" class="form-control" id="clave2" name="clave2">
            </div>      
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src=<?php echo base_url() . "/public/js/jquery.min.js"; ?>> </script>
		<script src= <?php echo base_url() . "/public/js/bootstrap.min.js"; ?>> </script>

</body>

</html>