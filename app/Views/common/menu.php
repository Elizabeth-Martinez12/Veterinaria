<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Elsie', sans-serif;
            background-color: #f8f9fa; /* Cambia el color de fondo según tus preferencias */
        }

        .navbar {
            background-color: #17a2b8; /* Cambia el color de fondo de la barra de navegación según tus preferencias */
        }

        .navbar-brand img {
            margin-right: 10px;
        }

        .navbar-brand,
        .navbar-nav a {
            color: #fff; /* Cambia el color del texto del menú según tus preferencias */
        }

        .navbar-toggler-icon {
            background-color: #fff; /* Cambia el color del ícono del botón de menú según tus preferencias */
        }

        .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            background-color: #17a2b8; /* Cambia el color de fondo del menú desplegable según tus preferencias */
        }

        .dropdown-item {
            color: #fff; /* Cambia el color del texto del menú desplegable según tus preferencias */
        }

        .btn-danger {
            margin-left: 10px;
        }
    </style>
    <title>Menú</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://cdn.pixabay.com/photo/2021/01/16/11/13/dogs-5921796_1280.png" width="70" height="70" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consultas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/consultas/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/consultas/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/consultas/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Medicamentos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/medicamentos/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/medicamentos/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/medicamentos/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Veterinarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/veterinarios/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/veterinarios/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/veterinarios/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Accesorios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/accesorios/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/accesorios/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/accesorios/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ventas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/ventas/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/ventas/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/ventas/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Historial Medico
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/historialMedico/mostrar1');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/historialMedico/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/historialMedico/buscar');?>">Buscar</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
  
  
</nav>