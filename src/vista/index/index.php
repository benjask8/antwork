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
  <div class="swiper-pagination"></div>

</div>

<!-- texto informativo start-->
<div class="info-text">
    <h2 class="big-title centred">Personal Temporal Capacitado para Tu Área</h2>
    <p class="more-info centred">¿Necesitas apoyo puntual para tu proyecto? En nuestro equipo, entendemos la importancia de contar con colaboradores flexibles. Desde <b>tareas específicas hasta proyectos completos,</b> estamos listos para contribuir al éxito de tu empresa. ¡Hablemos!</p>
</div>
<!-- texto informativo end -->

<!-- <h2 class="big-title">Cualidades</h2> -->

<h2 class="qualities-title centred">Sobre Nuetros  <span class="span-big-b-border">Servicios</span> </h2>

<div class="home-qualities">
    <div class="home-qualities-qualitie">
        <div class="home-qualities-qualitie-img">
            <span class="material-symbols-outlined">
                savings
            </span>
        </div>
        <div class="home-qualities-qualitie-text">
            <p class="home-qualities-qualitie-text-title">Bajo Costo</p>
            <p class="home-qualities-qualitie-text-info">Ofrecemos soluciones asequibles para tus necesidades. Nuestro enfoque en la eficiencia nos permite mantener costos bajos sin comprometer la calidad. ¡Ahorra mientras obtienes resultados excepcionales!</p>
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
            <p class="home-qualities-qualitie-text-info">Nuestro equipo está capacitado para manejar todo, desde la carga hasta la descarga. Con experiencia en logística y seguridad, garantizamos un proceso fluido y sin complicaciones. Confía en nosotros para tus necesidades de transporte.</p>
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
            <p class="home-qualities-qualitie-text-info">La eficiencia es nuestra prioridad. Desde la planificación hasta la ejecución, optimizamos cada paso para maximizar la productividad. Obtén resultados rápidos y precisos con nuestro equipo altamente capacitado.</p>
        </div>  
    </div>
</div>


<div class="border-separator">
    <div class="border-separator-border"></div>
</div>

<!-- about -->
<div class="about-container">
    <div class="about-img">
        <img src="public/images/logo/ant_speak2.png" alt="">
    </div>
    <div class="about-text">
        <h3 class="about-title">Acerca de antwork & <span class="span-big-b-border">Como trabajamos</span></h3>
        <p class="about-info">Bienvenidos a <b>antwork</b>. Somos un equipo apasionado que conecta talento con <b> oportunidades laborales</b>. Nuestra misión es simple pero <b>poderosa</b> : ayudar a las personas a encontrar trabajos temporales que se adapten a sus habilidades y necesidades.</p>
        <a href="?c=index&m=about" class="about-link">leer mas</a>
    </div>
</div>
<!-- about end -->




<!-- servicios -->
<!-- servicios -->
<div class="services-container">
    <h2 class="services-title">Nuestros Servicios</h2>
    <div class="services">
        <div class="service-item" data-title="Carga y descarga jasjdajsdjas" data-info="info">
            <span class="service-item-icon material-symbols-outlined">groups</span>
            <h4 class="service-item-title">un titulo acerca de</h4>
            <p class="service-item-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur .</p>
        </div>
        <div class="service-item" data-title="Envío local" data-info="Información sobre el envío local">
            <span class="service-item-icon material-symbols-outlined">local_shipping</span>
            <h4 class="service-item-title">Servicio de Envío Local</h4>
            <p class="service-item-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur .</p>
        </div>
        <div class="service-item" data-title="Ingeniería especializada" data-info="Detalles de ingeniería especializada">
            <span class="service-item-icon material-symbols-outlined">engineering</span>
            <h4 class="service-item-title">Servicio de Ingeniería Especializada</h4>
            <p class="service-item-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur .</p>
        </div>
        <div class="service-item" data-title="Seguridad encriptada" data-info="Detalles sobre seguridad encriptada">
            <span class="service-item-icon material-symbols-outlined">encrypted</span>
            <h4 class="service-item-title">Servicio de Seguridad Encriptada</h4>
            <p class="service-item-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur .</p>
        </div>
    </div>
</div>


 
    <!-- Modal -->
    <div id="myModal" class="services-modal">
        <div class="services-modal-content">
            <span class="close">&times;</span>
            <h4 id="modal-title" class="services-modal-title"></h4>
            <p id="modal-info" class="services-modal-info"></p>
        </div>
    </div>
    
<!-- servicios end -->


<!-- texto insentivo -->

<div class="info-text-2">
        <h3 class="centred">¿Buscas personal temporal para tu proyecto?</h3>
        <h2 class="centred">Nosotros tenemos la solución. <br> <span class="span-big-b-border">Comencemos a trabajar juntos</span></h2>
        <a href="https://tu-sitio-web.com/contacto" class="centred">Contáctanos ahora</a>
    </div>

<!-- texto insentivo end -->


<!-- contact -->

<div class="contact-form-container">
    <div class="contact-form-img">
        <img src="public/images/logo/ant_contact.png" alt="">
    </div>
    <form id="contactForm" class="contact-form">
    <h1 class="contact-form-title">Contacta Con Nosotros</h1>
    <p class="contact-form-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, cupiditate?</p>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
    <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required>
    <input type="tel" id="telefono" name="telefono" placeholder="Teléfono">
    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Mensaje" required></textarea>
    <button type="submit">Enviar</button>
    <p class="msg-p" id="msgP"></p>
</form>
</div>
<!-- contact  end-->




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





<!-- frequen questions -->

<div class="frequent_questions-box">
    <div class="frequent_questions-img">
        <img src="public/images/logo/ant_tink.png" alt="">
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

<!-- frequen questions end-->



<script type="module" src="public/js/frequent_questions.js"></script>
<script src="public/js/services.js"></script>

<script type="module" src="public/js/swiper.js"></script>

<script src="fetch/contact.js">
</script>

<?php
require 'src/vista/partials/footer.php';
?>
