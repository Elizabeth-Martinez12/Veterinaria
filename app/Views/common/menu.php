<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
  <img src="https://cdn.pixabay.com/photo/2021/01/16/11/13/dogs-5921796_1280.png" width="70" height="70" />
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
  <a href="<?php echo base_url('index.php/home'); ?>" class="btn btn-danger">Cerrar Sesión</a>
</nav>