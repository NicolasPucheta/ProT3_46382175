<body>
  <main> 
      <!-- Carousel de imágenes -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/carrusel principal/publi1.jpg" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/carrusel principal/publi2.png" class="d-block w-100 img-fluid" alt="...">
      </div>
    </div>
    </div>
    <section class="info-section">
      <div class="info-container">
        <div class="info-card" tabindex="-1">
          <img src="assets\img\iconos\camion.png" alt="camion">
          <h2>Envios a todo el Pais</h2>
        </div>
        <div class="info-card" tabindex="-1">
          <img src="assets\img\iconos\pagos.png" alt="pagos">
          <h2>Todos los medios de pagos</h2>
        </div>
        <div class="info-card" tabindex="-1">
          <img src="assets\img\iconos\paquete2.png" alt="camion">
          <h2>%100 Confiables</h2>
        </div>
    </section>
    
  <section class="featured-section">
    <div class="featured-image">
      <img src="assets/img/imagenPrincipal.png" alt="Imagen Destacada">
    </div>

    <div class="carousel-container">
      <div class="product-carousel no-js-scroll" id="productCarousel">
        <div class="product-item">
          <img src="assets/img/productos/perfume1.jpg" alt="Producto 1">
          <h3>Bleu Night De Lbel 100ml</h3>
          <p>$110.000</p>
        </div>
        <div class="product-item">
          <img src="assets/img/productos/perfume2.jpg" alt="Producto 2">
          <h3>Bleu intense 100 ml lbel</h3>
          <p>$100.000</p>
        </div>
        <div class="product-item">
          <img src="assets/img/productos/perfume3.jpg" alt="Producto 3">
          <h3>Bleu Glacial Lbel 100ml</h3>
          <p>$90.000</p>
        </div>

        <div class="product-item">
          <img src="assets/img/productos/perfume4.jpg" alt="Producto 1">
          <h3>GIVENCHY Gentleman Society Ambrée 100 ml </h3>
          <p>$149.000</p>
        </div>
        <div class="product-item">
          <img src="assets/img/productos/perfume5.jpg" alt="Producto 2">
          <h3>GIVENCHY Gentleman Society Extreme 100 ml</h3>
          <p>$119.000</p>
        </div>
        <div class="product-item">
          <img src="assets/img/productos/perfume6.jpg" alt="Producto 3">
          <h3>GIVENCHY Gentleman Society 60ml</h3>
          <p>$129.000</p>
        </div>

      </div>

    </div>
  </section>
    <?php if (session()->get('logged_in') && session()->get('perfil_id') == 2): ?>
        <a href="<?= base_url('/usuarioData') ?>" class="boton-flotante">
            🧑 Mi Perfil
        </a>
    <?php endif; ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

</main>
