<nav class="navbar navbar-expand-lg navbar-perfume px-4">
   <a class="navbar-brand d-none d-lg-block" href="<?php echo base_url() ?>">
        <img src="assets/img/logo.png" alt="Logo" height="180">
    </a>

  <!-- Botón colapsable en pantallas pequeñas -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarContent">

    <!-- Links -->
   <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item"><a href="<?php echo base_url('productos'); ?>" class="nav-link">Productos</a></li>
        <li class="nav-item"><a href="<?php echo base_url('quienesSomos'); ?>" class="nav-link">Quiénes Somos</a></li>
        <li class="nav-item"><a href="<?php echo base_url('legal'); ?>" class="nav-link">Politica</a></li>
        <li class="nav-item"><a href="<?php echo base_url('login'); ?>" class="nav-link">Iniciar Sesión</a></li>
    </ul>

    <!-- Buscador -->
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="¿Qué estás buscando?" aria-label="Buscar">
      <button class="btn btn-primary" type="submit">Buscar</button>
    </form>

  </div>
</nav>
