<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id'); // 1 para Admin, 2 para Cliente, null/otros para no logueado

// Obtener el carrito desde la sesión (si existe)
$carrito = $session->get('carrito');
$cantidadCarrito = is_array($carrito) ? count($carrito) : 0;
?>

<nav class="navbar navbar-expand-lg navbar-perfume px-4">
    <div class="container-fluid">
        <div class="row w-100 align-items-center">

            <div class="col-12 col-md-4 d-flex align-items-center">
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand d-none d-lg-block" href="<?php echo base_url() ?>">
                    <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo" height="180">
                </a>

                </div>

            <div class="col-12 col-md-5 d-flex flex-column justify-content-center align-items-center mb-3 mb-lg-0 mt-1">
                <div class="d-flex align-items-center w-100 mb-2">
                    <form action="/search" method="get" class="d-flex align-items-center w-100">
                        <input type="text" placeholder="¿Qué estás buscando?" name="query" class="form-control me-2">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
                </div>

                <div class="collapse navbar-collapse justify-content-center mt-2" id="navbarContent">
                    <ul class="navbar-nav">
                        <?php if ($perfil == 1): // Menú para Administrador ?>
                            <li class="nav-item"><a href="<?php echo base_url('crudUsuarios'); ?>" class="nav-link">CRUD Usuario</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('crudProductos'); ?>" class="nav-link">CRUD Productos</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('muestra-ventas'); ?>" class="nav-link">Muestra ventas</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('consultas'); ?>" class="nav-link">Consultas</a></li>

                        <?php elseif ($perfil == 2): // Menú para Cliente/Usuario Normal ?>
                            <li class="nav-item"><a href="<?php echo base_url('productos'); ?>" class="nav-link">Productos</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('quienesSomos'); ?>" class="nav-link">Quiénes Somos</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('legal'); ?>" class="nav-link">Política</a></li>
                            <?php else: // Menú para Invitados (No logueados) ?>
                            <li class="nav-item"><a href="<?php echo base_url('productos'); ?>" class="nav-link">Productos</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('quienesSomos'); ?>" class="nav-link">Quiénes Somos</a></li>
                            <li class="nav-item"><a href="<?php echo base_url('legal'); ?>" class="nav-link">Política</a></li>
                            <?php endif; ?>
                    </ul>

                    <div class="d-lg-none d-flex justify-content-center mt-3">
                        <?php if ($nombre): ?>
                            <?php if ($perfil == 2): // Solo clientes tienen carrito ?>
                                <a href="<?php echo base_url('carrito'); ?>" class="btn btn-outline-primary me-2">
                                    <i class="bi bi-cart-fill"></i> Carrito
                                    <?php if ($cantidadCarrito > 0): ?>
                                        <span class="badge bg-danger"><?= $cantidadCarrito ?></span>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                            <a href="<?php echo base_url('logout'); ?>" class="btn btn-outline-success">
                                <i class="bi bi-person-fill"></i> Cerrar Sesión (<?= htmlspecialchars($nombre) ?>)
                            </a>
                        <?php else: ?>
                            <a href="<?php echo base_url('login'); ?>" class="btn btn-outline-success">
                                <i class="bi bi-person-fill"></i> Iniciar Sesión
                            </a>
                            <a href="<?php echo base_url('registro'); ?>" class="btn btn-outline-info ms-2">
                                <i class="bi bi-person-plus-fill"></i> Registrarse
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 d-none d-lg-flex justify-content-end align-items-center">
                <?php if ($nombre): ?>
                    <span class="navbar-text me-2">
                        Hola, <?= htmlspecialchars($nombre) ?>
                    </span>
                    <?php if ($perfil == 2): // Solo clientes tienen carrito ?>
                        <a href="<?php echo base_url('carrito'); ?>" class="btn btn-outline-primary me-2">
                            <i class="bi bi-cart-fill"></i> Carrito
                            <?php if ($cantidadCarrito > 0): ?>
                                <span class="badge bg-danger"><?= $cantidadCarrito ?></span>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo base_url('logout'); ?>" class="btn btn-outline-success">
                        <i class="bi bi-person-fill"></i> Cerrar Sesión
                    </a>
                <?php else: ?>
                    <a href="<?php echo base_url('login'); ?>" class="btn btn-outline-success me-2">
                        <i class="bi bi-person-fill"></i> Iniciar Sesión
                    </a>
                    <a href="<?php echo base_url('registro'); ?>" class="btn btn-outline-info">
                        <i class="bi bi-person-plus-fill"></i> Registrarse
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>