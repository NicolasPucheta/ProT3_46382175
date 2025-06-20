<main class="Regristro text-light">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 100%; max-width: 400px;">
            <div class="card-header text-center">
                <h3>Regístrate</h3>
            </div>
            <div class="card-body">
                <?php $validation = \Config\Services::validation(); ?>
                <form id="registroForm" action="<?= base_url('/enviar-form') ?>" method="POST">
                    <?= csrf_field() ?>
                
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="..." required>
                    </div>

                    <!-- Apellido -->
                    <div class="mb-3">
                        <label for="Apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="..." required>
                    </div>

                    <!-- Usuario -->
                    <div class="mb-3">
                        <label for="Usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="..." required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="usuario@correo.com" required>
                    </div>

                    <!-- Contraseña con mostrar/ocultar -->
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="••••••••" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                👁️
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mb-2">Guardar</button>
                 </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</main>