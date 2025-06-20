<main class="inicioSesion">
    <div class="container d-flex justify-content-center align-items-center" style="height: 60vh;">
        <div class="card" style="width: 100%; max-width: 800px;">
            <div class="card-header text-center">
                <h3>Iniciar Sesión</h3>
            </div>
            <div class="card-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="usuario@correo.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="pass" class="form-control" id="pass" name="pass" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </form>
            </div>
            <div style="text-align: center; ">
                <span style="color: #f0ad4e;">¿No tienes cuenta?</span> <a href="<?= base_url('registrate') ?>" style="color: #f0ad4e;">Regístrate aquí</a>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</main>
