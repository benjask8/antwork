<?php
require 'src/vista/partials/head.php';
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

<script type="module" src="public/js/frequent_questions.js"></script>


<script type="module" src="public/js/swiper.js"></script>

<?php
require 'src/vista/partials/footer.php';
?>
