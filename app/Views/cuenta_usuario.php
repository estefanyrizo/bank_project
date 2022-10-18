<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servicio de Banca en Linea</title>

    <meta name="description" content="Acceso al servicio de banca en linea">
    <meta name="author" content="Diseño de Aplicaciones Web">

    <link rel="stylesheet" href=<?php echo base_url() . '/public/css/bootstrap.min.css'; ?>>

</head>

<body>

    <div class="container mt-5">
        <form method="post" action=<?php echo base_url() . "/usuario/registro"?>>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido1">Primer apellido</label>
                <input type="text" class="form-control" id="apellido1" name="apellido1">
            </div>
            <div class="form-group">
                <label for="apellido2">Segundo apellido</label>
                <input type="text" class="form-control" id="apellido2" name="apellido2">
            </div>
            <div class="form-group">
                <label for="cedula">Numero de c&eacute;dula</label>
                <input type="text" class="form-control" id="cedula" name="cedula">
            </div>
            <div class="form-group">
                <label for="correo">correo</label>
                <input type="email" class="form-control" id="correo" name="correo">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="<?php echo base_url() . '/public/js/jquery.min.js"'; ?>> </script>
		<script src=" <?php echo base_url() . '/public/js/bootstrap.min.js"'; ?>> </script>

</body>

</html>