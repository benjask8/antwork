<?php
require 'src/vista/partials/head.php';
require 'src/datos/newsData.php';

$noticias_por_pagina_index = 5;
$noticias_todas = $noticias; 
$noticias_pagina_index = array_slice($noticias_todas, 0, $noticias_por_pagina_index);
?>

<style>
        
    .container-fluid{
        padding-top:0px;
    }

</style>

<div class="swiper hero-swiper">
    <div class="swiper-wrapper">
        <?php foreach ($heroSlidesData as $index => $slide) : ?>
        <div class="swiper-slide hero-swiper-slide hero-swiper-slide-<?php echo $index + 1; ?>">
            <div class="hero-swiper-slide-content">
            <div class="hero-swiper-slide-bg" style="background-image: url('<?php echo $slide['bgUrl']; ?>')"></div>
            <h2 class="hero-swiper-slide-title"><?php echo $slide['title']; ?></h2>
            <h3 class="hero-swiper-slide-sub-title"><?php echo $slide['sub-title']; ?></h3>
            <p class="hero-swiper-slide-info"><?php echo $slide['info']; ?></p>
            <a href="<?php echo $slide['linkUrl']; ?>" class="hero-swiper-slide-a"><?php echo $slide['buttonText']; ?></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<!-- texto informativo start-->
<div class="info-text">
    <h2 class="big-title centred">Personal Temporal Capacitado para Tu Área</h2>
    <p class="more-info centred">¿Necesitas apoyo puntual para tu proyecto? En nuestro equipo, entendemos la importancia de contar con colaboradores flexibles. Desde <b>tareas específicas hasta proyectos completos,</b> estamos listos para contribuir al éxito de tu empresa. ¡Hablemos!</p>
</div>
<!-- texto informativo end -->


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
<div class="services-container">
    <h2 class="services-title centred">Sobre Nuestros <span class="span-big-b-border">Servicios</span></h2>
    <div class="services">
        <?php foreach ($services as $index => $service): ?>
            <div class="service-item" onclick="openModal(<?= $index ?>)" data-title="<?= $service['title'] ?>" data-info="<?= $service['info'] ?>">
                <span class="service-item-icon material-symbols-outlined"><?= $service['icon'] ?></span>
                <h4 class="service-item-title"><?= $service['pre-title'] ?></h4>
                <p class="service-item-info"><?= $service['pre-info'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div id="myModal" class="services-modal">
    <div class="services-modal-content">
        <button class="close" aria-label="Cerrar modal de services">
            <span class="material-symbols-outlined">close</span>
        </button>
        <h4 id="modal-title" class="services-modal-title centred"></h4>
        <p id="modal-info" class="services-modal-info"></p>
    </div>
</div>
<!-- servicios end -->


<!-- texto insentivo -->
<div class="info-text-2">
        <h3 class="centred">¿Buscas personal temporal <strong>inmediato</strong> para tu proyecto?</h3>
        <h2 class="centred">Nosotros tenemos la solución. <br> <span class="span-big-b-border">Comencemos a trabajar juntos</span></h2>
        <a  href="?c=index&m=contact" class="centred" id="contact-modal-btn">Contáctanos ahora</a>
</div>
<!-- texto insentivo end -->


<!-- Cualidades-->
<h2 class="qualities-title centred">Sobre Nuetras  <span class="span-big-b-border">Cualidades</span> </h2>

<div class="home-qualities">
    <div class="home-qualities-qualitie">
        <div class="home-qualities-qualitie-img">
            <span class="material-symbols-outlined">
                compare_arrows 
            </span>
        </div>
        <div class="home-qualities-qualitie-text">
            <p class="home-qualities-qualitie-text-title">Flexiblidad</p>
            <p class="home-qualities-qualitie-text-info">Capacidad para adaptarse a las necesidades cambiantes de los clientes y del mercado laboral.</p>
        </div>  
    </div>
    <div class="home-qualities-qualitie">
        <div class="home-qualities-qualitie-img">
            <span class="material-symbols-outlined">
                error
            </span>
        </div>
        <div class="home-qualities-qualitie-text">
            <p class="home-qualities-qualitie-text-title">Resolución de problemas</p>
            <p class="home-qualities-qualitie-text-info">Capacidad para abordar desafíos y encontrar soluciones efectivas en situaciones diversas.</p>
        </div>  
    </div>
    <div class="home-qualities-qualitie">
        <div class="home-qualities-qualitie-img">
            <span class="material-symbols-outlined">
                groups
            </span>
        </div>
        <div class="home-qualities-qualitie-text">
            <p class="home-qualities-qualitie-text-title">Selección cuidadosa del personal</p>
            <p class="home-qualities-qualitie-text-info">Proceso de reclutamiento y selección que garantice la idoneidad y el compromiso de los empleados temporales.</p>
        </div>  
    </div>
    <div class="home-qualities-qualitie">
        <div class="home-qualities-qualitie-img">
            <span class="material-symbols-outlined">
                school
            </span>
        </div>
        <div class="home-qualities-qualitie-text">
            <p class="home-qualities-qualitie-text-title">Capacitación y desarrollo</p>
            <p class="home-qualities-qualitie-text-info"> Ofrecimiento de oportunidades de capacitación y desarrollo profesional para mejorar las habilidades y competencias del personal temporal.</p>
        </div>  
    </div>
</div>
<!-- Cualidades end-->


<!-- contact modal -->
<div class="contact-modal-2 open" role="dialog" aria-labelledby="contact-modal-heading" aria-describedby="contact-modal-description">
    <div class="contact-modal-content">
        <div class="contact-modal-flex">
            <div class="contact-modal-flex-text">
                <h2 id="contact-modal-heading">Contáctanos para calcular su presupuesto</h2>
                <img src="public/images/logo/ant_contact.png" alt="">
                <p id="contact-modal-description">—Estamos aquí para <strong>brindarte toda la ayuda que necesites</strong> en cualquier momento del día.</p>
                <p id="contact-modal-description-2">Por favor, no dudes en proporcionar tus datos de contacto y te aseguramos que nos pondremos en contacto contigo lo antes posible para resolver cualquier consulta o pregunta que tengas.</p>
            </div>
            <form id="contactForm" class="contact-modal-flex-form" method="post">
                <h3>Datos de contacto</h3>
                <label class="contact-modal-label" for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" required>

                <label class="contact-modal-label" for="correo">Correo electrónico</label>
                <input type="email" id="correo" name="correo" required>

                <label class="contact-modal-label" for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono">

                <label class="contact-modal-label" for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                <button type="submit">Enviar</button>
                <p class="msg-p" id="msgP"></p>
            </form>
        </div>
    </div>
</div>
<!-- contact modal end -->


<!-- frequen questions -->
<div class="frequent_questions-box">
    <div class="frequent_questions-img">
        <img src="public/images/logo/ant_tink.png" alt="">
    </div>
    <div class="frequent_questions-text">
        <h2 class="frequent_questions-text-title">
            Preguntas Frecuentes sobre <span class="span-big-b-border">Antwork</span>
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



<!-- Noticias -->
<div class="news-section">
    <h2 class="normal-title">Últimas Noticias</h2>
    <div class="news-container">
        <?php
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
<!-- Noticias  end-->


<script>    
    document.title = "Inicio | AntWork";
    
    function openModal(index) {
        const modal = document.getElementById('myModal');
        const modalTitle = document.getElementById('modal-title');
        const modalInfo = document.getElementById('modal-info');
        const service = <?= json_encode($services) ?>[index];

        modalTitle.textContent = service['title'];
        modalInfo.textContent = service['info'];
        modal.classList.add('services-modal-open');
    }

    document.querySelector('.close').addEventListener('click', function() {
        const modal = document.getElementById('myModal');
        modal.classList.remove('services-modal-open');
    });

    window.addEventListener('click', (event) => {
        const modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.classList.remove('services-modal-open'); 
        }
    });
</script>

<script src="public/js/contact_modal.js"></script>
<script type="module" src="public/js/frequent_questions.js"></script>
<script type="module" src="public/js/swiper.js"></script>
<script src="fetch/contact.js"></script>

<?php
require 'src/vista/partials/footer.php';
?>
