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


<!-- -----hero start------ -->
<div class="hero-container">
    <div class="hero-text">
        <h1 class="hero-title">Servicio de Personal <span>Temporal</span></h1>
        <h2 class="hero-sub-title">Personal Temporal de Calidad</h2>
        <p class="hero-info">En nuestra empresa, nos dedicamos a proporcionar servicios de personal temporal . Contamos con un equipo capacitado y comprometido para satisfacer las necesidades laborales de nuestros clientes de manera efectiva</p>
        <a href="" class="hero-link">Descubre más</a>
    </div>
    <div class="hero-img">
        <img src="public/images/logo/antwork bolsa marron.png" alt="">
    </div>
</div>
<!-- -----hero end------ -->


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
        <h3 class="about-title">Acerca de <span>Antwork</span> & Como trabajamos</h3>
        <h4 class="about-sub-title">Personal Temporal de Calidad</h3>
        <p class="about-info">Bienvenidos a antwork. Somos un equipo apasionado que conecta talento con oportunidades laborales. Nuestra misión es simple pero poderosa : ayudar a las personas a encontrar trabajos temporales que se adapten a sus habilidades y necesidades.</p>
        <a href="?c=index&m=about" class="about-link">Descubre más</a>
    </div>
</div>
<!-- about end -->

<!-- servicios -->
<div class="services-container">
    <div class="services-text">
        <h3 class="services-title">Sobre nuestros <span>Servicios</span></h3>
        <div class="services">
        <?php foreach ($services as $index => $service): ?>
            <div class="service">
                <div class="service-icon">
                    <span class="service-item-icon material-symbols-outlined"><?= $service['icon'] ?></span>
                </div>
                <div class="service-text">
                    <h4 class="service-title"><?= $service['pre-title'] ?></h4>
                    <p class="service-info"><?= $service['pre-info'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

    <div class="services-img">
        <img src="public/images/logo/antwork caja 2.png" alt="">
    </div>
</div>
<!-- servicios end -->


<!-- texto insentivo -->
<div class="info-text-2">
        <h3 class="centred">¿Buscas personal temporal <strong>inmediato</strong> para tu proyecto?</h3>
        <h2 class="centred">Nosotros tenemos la solución. <br> <span class="span-big-b-border">Comencemos a trabajar juntos</span></h2>
        <a  href="?c=index&m=contact" class="centred" id="contact-modal-btn">¡Contáctanos ahora!</a>
</div>
<!-- texto insentivo end -->

<!-- cualidads -->
<div class="qualities-container">
    <div class="container-text">
        <h2 class="title">Sobre nuestras <span>Cualidades</span></h2>

        <div class="qualities">
        <div class="qualitie">
                <div class="icon">
                    <span class="material-symbols-outlined">compare_arrows </span>
                </div>
                <div class="text">
                    <span class="title">Flexibilidad</span>
                    <p class="info">Capacidad para adaptarse a las necesidades cambiantes de los clientes y del mercado laboral.</p>
                </div>
            </div>
            <div class="qualitie">
                <div class="icon">
                    <span class="material-symbols-outlined">error </span>
                </div>
                <div class="text">
                    <span class="title">Resolución de Problemas</span>
                    <p class="info">Capacidad para abordar desafíos y encontrar soluciones efectivas en situaciones diversas.</p>
                </div>
            </div>
            <div class="qualitie">
                <div class="icon">
                    <span class="material-symbols-outlined">groups </span>
                </div>
                <div class="text">
                    <span class="title">Selección cuidadosa del Personal</span>
                    <p class="info">Proceso de reclutamiento y selección que garantice la idoneidad y el compromiso de los empleados temporales.</p>
                </div>
            </div>
            <div class="qualitie">
                <div class="icon">
                    <span class="material-symbols-outlined">school </span>
                </div>
                <div class="text">
                    <span class="title">Capacitación y desarrollo</span>
                    <p class="info"> Ofrecimiento de oportunidades de capacitación y desarrollo profesional para mejorar las habilidades y competencias del personal temporal.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-imgs">
            <img src="public/images/logo/antwork bolsa marron.png" alt="">
            <img src="public/images/logo/hormiga rollo2.png" alt="">
    </div>
</div>
<!-- cualidads end -->

<!-- contact modal -->
<div class="contact" role="dialog" aria-labelledby="heading" aria-describedby="description">
    <div class="content">
        <div class="flex">
            <div class="text">
                <h2 id="heading">Contáctanos para calcular su presupuesto</h2>
                <img src="public/images/logo/ant_contact.png" alt="">
                <p id="description">—Estamos aquí para <strong>brindarte toda la ayuda que necesites</strong> en cualquier momento del día.</p>
                <p id="description-2">Por favor, no dudes en proporcionar tus datos de contacto y te aseguramos que nos pondremos en contacto contigo lo antes posible para resolver cualquier consulta o pregunta que tengas.</p>
            </div>
            <form id="contactForm" class="form" method="post">
                <h3>Datos de contacto</h3>
                <label class="label" for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" required>

                <label class="label" for="correo">Correo electrónico</label>
                <input type="email" id="correo" name="correo" required>

                <label class="label" for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono">

                <label class="label" for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                <button type="submit">Enviar</button>
                <p class="msg-p" id="msgP"></p>
            </form>
        </div>
    </div>
</div>
<!-- contact modal end -->



<!-- texto insentivo -->
<div class="info-text-3">
        <h3 class="centred">¿Estás en búsqueda de trabajo?</h3>
        <h2 class="centred">¡Envíanos tu currículum y <br> <span>únete a nuestro equipo!</span></h2>
        <a  href="?c=index&m=work_with_us" class="centred" id="contact-modal-btn">¡Envía tu currículum ahora!</a>
</div>
<!-- texto insentivo end -->



<!-- about -->
<div class="news-ads">
    <div class="img">
        <img src="public/images/logo/antmegafono.png" alt="">
    </div>
    <div class="text">
        <h3 class="title">¿Buscas Noticias sobre <span>Antwork</span>?</h3>
        <h4 class="sub-title">Encuentra aqui las ultimas noticias</h3>
        <p class="info">Aquí encontrarás las noticias más recientes sobre sus actividades, ofertas de trabajo, innovaciones en el sector, y cómo están impactando la industria logística y laboral. Mantente informado con la información más actualizada y relevante sobre Antwork.</p>
        <a href="?c=index&m=news" class="link">Ver Noticias</a>
    </div>
</div>
<!-- about end -->



<!-- frequen questions -->
<div class="frequent_questions-box">
    <div class="text">
        <div class="fq-header">
            <div class="img">
                    <img src="public/images/logo/ant_tink.png" alt="">
                </div>
            <div class="desc">
                <h2 class="title">Preguntas Frecuentes</h2>
                <p class="info">
                    Encuentra respuestas a las preguntas más comunes sobre Antwork, tu empresa de personal temporal especializada en carga y descarga.
                </p>
            </div>
        </div>
        <ul class="ul">
            <?php foreach ($preguntasRespuestas as $index => $preguntaRespuesta) { ?>
                <li class="li">
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
