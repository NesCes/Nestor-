<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once dirname(__FILE__, 3) . '/php/config/header.php';
    ?>
    <title>Creando registro</title>
    <style>
        /* Estilo para el fondo del contenedor */
        .container-md {
            background-color: #f0f0f0; /* Cambia el color a tu preferencia */
            padding: 20px;
            border-radius: 5px;
        }

        /* Estilo para los encabezados h2 */
        h2 {
            color: #007BFF; /* Cambia el color a tu preferencia */
        }

        /* Estilo para las etiquetas de formulario */
        .form-label {
            color: #333; /* Cambia el color a tu preferencia */
        }

        /* Estilo para los botones */
        .btn-primary {
            background-color: #007BFF; /* Cambia el color a tu preferencia */
            border: none;
        }

        /* Estilo para el texto en los campos de entrada */
        .form-control {
            color: #333; /* Cambia el color a tu preferencia */
        }
    </style>
</head>
<body>
    <?php
    require_once dirname(__FILE__, 3) . '/php/config/menu.php';
    ?>
    <div class="container-md">
        <h2>Creando registro</h2>
        <form action="create.php" method="post" id="formCreate">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre" required autofocus>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese Apellido" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese Teléfono" required autofocus>
            </div>
            <div class="mb-3">
                <label for="cedula" class="form-label">Cédula</label>
                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Ingrese Cédula" required autofocus>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Guardar">
            </div>
        </form>
    </div>
</body>
<?php
require_once dirname(__FILE__, 3) . '/php/config/footer.php';
?>
</html>
