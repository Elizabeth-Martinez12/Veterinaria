
<nav class="navbar navbar-expand-lg bg-success">
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
            <li><a class="dropdown-item" href="<?=base_url('index.php/cliente/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/cliente/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/cliente/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Medicamentos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/medicamentosUsuario/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/medicamentosUsuario/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Accesorios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/accesoriosUsuario/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/accesoriosUsuario/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ventas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/ventasUsuario/mostrar');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/ventasUsuario/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/ventasUsuario/buscar');?>">Buscar</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Historial Medico
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/historialMedicoUsuario/mostrar1');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/historialMedicoUsuario/agregar')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/historialMedicoUsuario/buscar');?>">Buscar</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
  <a href="<?php echo base_url('index.php/home'); ?>" class="btn btn-danger">Cerrar Sesión</a>
</nav>