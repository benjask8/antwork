<?php require 'src/datos/data.php';?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AntWork</title>
  <link rel="icon" href="public/images/logo/mini-logo.png" type="image/x-icon">

  <!-- para zoom de inputs -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


  <!-- Estilos css -->
  <link rel="stylesheet" href="public/css/styles.css">

  <!-- responsive  -->
  <link rel="stylesheet" href="public/css/responsive/tv.css">
  <link rel="stylesheet" href="public/css/responsive/pc.css">
  <link rel="stylesheet" href="public/css/responsive/laptop.css">
  <link rel="stylesheet" href="public/css/responsive/tablet.css">
  <link rel="stylesheet" href="public/css/responsive/mobile.css">
  <!-- responsive end -->
  <!-- Estilos css end -->

  <script src="https://kit.fontawesome.com/d1b7ca4fc4.js" crossorigin="anonymous"></script>

  <!-- recursos -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script type="module" src="public/js/head.js"></script>

<body>
  

  <header class="header" id="header">
    <div class="header-logo">
      <a class="header-logo-a" href="?c=index&m=index"><img class="header-logo-img" src="public/images/logo/logo.png" alt=""></a>
    </div>
    <nav class="header-links">
      <a href="?c=index&m=index" class="header-links-a">Inicio</a>
      <a href="?c=index&m=contact" class="header-links-a">Contacto</a>
      <a href="?c=index&m=news" class="header-links-a">Noticias</a>
      <a href="?c=index&m=work_with_us" class="header-links-a">Trabaja Con Nosotros</a>
    </nav>

    <div class="header-btns">
      <button id="header-btns-bars" class="header-btns-bars">
        <span class="material-symbols-outlined">menu</span>
      </button>

      <button id="header-btns-close" class="header-btns-close header-btns-hiden">
        <span  class="material-symbols-outlined">close</span>
      </button>
    </div>

    <div class="header-actions">
      <a href="?c=index&m=contact">
      <i class="fa-solid fa-people-carry-box"></i> Personal a un Click
      </a>
    </div>
  </header>


  <div class="wsp-btn-box">
    <a href="https://wa.me/59898033994"><i class="fa-brands fa-whatsapp"></i> Charlemos</a>
  </div>

  

<script>

document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const scrollThreshold = 200; // Píxeles de desplazamiento antes de activar el encabezado

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > scrollThreshold) {
            header.classList.add('active');
        } else {
            header.classList.remove('active');
        }
    });
});

</script>
  <section class="container-fluid">