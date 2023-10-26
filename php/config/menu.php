<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Agregamos los estilos CSS personalizados aquí -->
  <style>
    /* Estilo para el fondo de la barra de navegación */
    .navbar {
      background-color: #333; /* Puedes cambiar este color a tu preferencia */
    }

    /* Estilo para los enlaces en la barra de navegación */
    .navbar-nav .nav-link {
      color: #fff; /* Color del texto de los enlaces */
    }

    /* Estilo para el enlace activo */
    .navbar-nav .nav-link.active {
      background-color: #007BFF; /* Color de fondo del enlace activo */
    }

    /* Estilo para el menú desplegable */
    .dropdown-menu {
      background-color: #333; /* Color de fondo del menú desplegable */
    }

    /* Estilo para los enlaces dentro del menú desplegable */
    .dropdown-menu .dropdown-item {
      color: #fff; /* Color del texto de los enlaces en el menú desplegable */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Taller04</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tallerphp04/php/create">Crear</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tallerphp04/php/recover">Recuperar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Agrega aquí el contenido de tu página web -->
</body>
</html>
