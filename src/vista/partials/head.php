<?php
require 'src/datos/data.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AntWork</title>
  <link rel="icon" href="public/images/mini-logo.png" type="image/x-icon">


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
  <header class="header">
    <div class="header-logo">
      <a class="header-logo-a" href="?c=index&m=index"><img class="header-logo-img" src="public/images/logo.png" alt=""></a>
    </div>
    <div class="header-links">
      <a href="/" class="header-links-a">Inicio</a>
      <a href="/" class="header-links-a">Servicios</a>
      <a href="/" class="header-links-a">Contacto</a>
      <a href="/" class="header-links-a">Personal</a>
      <a href="?c=index&m=frequent_questions" class="header-links-a">Preguntas Frecuentes</a>
      <a href="/" class="header-links-a">Trabaja Con Nosotros</a>
    </div>

    <div class="header-btns">
      <button id="header-btns-bars" class="header-btns-bars">
        <span class="material-symbols-outlined">menu</span>
      </button>

      <button id="header-btns-close" class="header-btns-close header-btns-hiden">
        <span  class="material-symbols-outlined">close</span>
      </button>
    </div>
  </header>

  <section class="container-fluid">