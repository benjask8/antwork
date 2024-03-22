<?php
require 'src/vista/partials/head.php';
require 'src/datos/newsData.php';

// Número de noticias por página en la sección de noticias del index
$noticias_por_pagina_index = 5;

// Obtener todas las noticias disponibles
// Suponiendo que $noticias es tu array de noticias proveniente de newsData.php
$noticias_todas = $noticias; 

// Obtener las últimas 5 noticias para mostrar en la página de inicio
$noticias_pagina_index = array_slice($noticias_todas, 0, $noticias_por_pagina_index);

?>
<div class="swiper hero-swiper">
  <div class="swiper-wrapper">
    <?php
    foreach ($heroSlidesData as $index => $slide) :
    ?>
      <div class="swiper-slide hero-swiper-slide hero-swiper-slide-<?php echo $index + 1; ?>">
        <div class="hero-swiper-slide-content">
          <div class="hero-swiper-slide-bg" style="background-image: url('<?php echo $slide['bgUrl']; ?>')"></div>
          <h2 class="hero-swiper-slide-title"><?php echo $slide['title']; ?></h2>
          <p class="hero-swiper-slide-info"><?php echo $slide['info']; ?></p>
          <a href="<?php echo $slide['linkUrl']; ?>" class="hero-swiper-slide-a"><?php echo $slide['buttonText']; ?></a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>



<div class="home-qualities">
        <div class="home-qualities-qualitie">
            <div class="home-qualities-qualitie-img">
                <span class="material-symbols-outlined">
                    savings
                </span>
            </div>
            <div class="home-qualities-qualitie-text">
                <p class="home-qualities-qualitie-text-title">Bajo Costo</p>
                <p class="home-qualities-qualitie-text-info">Una informacion bastante detallada explicando la cualidad de la empresa en este apartado Lorem, ipsum dolor.</p>
            </div>  
        </div>
        <div class="home-qualities-qualitie">
            <div class="home-qualities-qualitie-img">
                <span class="material-symbols-outlined">
                    local_shipping
                </span>
            </div>
            <div class="home-qualities-qualitie-text">
                <p class="home-qualities-qualitie-text-title">Carga y Descarga</p>
                <p class="home-qualities-qualitie-text-info">Una informacion bastante detallada explicando la cualidad de la empresa en este apartado Lorem, ipsum dolor.</p>
            </div>  
        </div>
        <div class="home-qualities-qualitie">
            <div class="home-qualities-qualitie-img">
                <span class="material-symbols-outlined">
                    schedule
                </span>
            </div>
            <div class="home-qualities-qualitie-text">
                <p class="home-qualities-qualitie-text-title">Trabajo Eficiente</p>
                <p class="home-qualities-qualitie-text-info">Una informacion bastante detallada explicando la cualidad de la empresa en este apartado Lorem, ipsum dolor.</p>
            </div>  
        </div>

    </div>

<div class="frequent_questions-box">
    <div class="frequent_questions-img">
        <img src="https://www.shutterstock.com/image-photo/young-bearded-adult-business-man-600nw-1005607636.jpg" alt="">
    </div>
    <div class="frequent_questions-text">
        <h2 class="frequent_questions-text-title">
            Preguntas Frecuentes sobre Antwork
        </h2>
        <p class="frequent_questions-text-info">
            Encuentra respuestas a las preguntas más comunes sobre Antwork, tu empresa de personal temporal especializada en carga y descarga.
        </p>
        <ul class="frequent_questions-text-ul">
            <?php foreach ($preguntasRespuestas as $index => $preguntaRespuesta) { ?>
                <li class="frequent_questions-text-ul-li">
                    <p id="question-title-<?php echo $index + 1; ?>" class="frequent_questions-text-ul-li-title">
                        <span id="icon-<?php echo $index + 1; ?>" class="material-symbols-outlined frequent_questions-icon">add</span> <?php echo $preguntaRespuesta['pregunta']; ?>
                    </p>
                    <p id="question-info-<?php echo $index + 1; ?>" class="frequent_questions-text-ul-li-info frequent_questions-text-ul-li-info-<?php echo $index + 1; ?>">
                        <?php echo $preguntaRespuesta['respuesta']; ?>
                    </p>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- Agregar noticias aquí -->
<div class="news-section">
    <h2 class="normal-title">Últimas Noticias</h2>
    <div class="news-container">
        <?php
        // Obtener las últimas 5 noticias
        $ultimas_noticias = array_slice($noticias_todas, 0, 5);
        
        foreach ($ultimas_noticias as $noticia) : ?>
            <a href="?c=index&m=new&id=<?php echo $noticia['id']; ?>" class="news-item">
                <img src="<?php echo $noticia['img']; ?>" alt="" class="news-img">
                <h3 class="news-title">
                    <?php echo strlen($noticia['titulo']) > 100 ? substr($noticia['titulo'], 0, 100) . "..." : $noticia['titulo']; ?>
                </h3>
                <p class="news-content">
                    <?php echo strlen($noticia['contenido']) > 50 ? substr($noticia['contenido'], 0, 50) . "..." : $noticia['contenido']; ?>
                </p>
                <p class="news-info"><?php echo date('d/m/Y', strtotime($noticia['fecha'])); ?></p>
            </a>
        <?php endforeach; ?>
    </div>
    <a href="?c=index&m=news" class="view-more-news">Ver Todas las Noticias</a>
</div>


<script type="module" src="public/js/frequent_questions.js"></script>


<script type="module" src="public/js/swiper.js"></script>

<?php
require 'src/vista/partials/footer.php';
?>
