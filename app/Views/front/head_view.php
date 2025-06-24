<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap desde CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos locales con base_url -->
  <link rel="stylesheet" href="<?= base_url('assets/css/miestilo.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/inicio_sesion.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/productos.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/politica.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/quienesSomos.css') ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">

  <!-- Título dinámico -->
  <title><?= esc($Titulo) ?></title>
</head>
