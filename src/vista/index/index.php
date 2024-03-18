<?php
require 'src/vista/partials/head.php';
?>

<div class="swiper hero-swiper">
  <div class="swiper-wrapper">

    <div class="swiper-slide hero-swiper-slide hero-swiper-slide-1">
        <div class="hero-swiper-slide-content">
            <div class="hero-swiper-slide-bg hero-swiper-slide-bg-1"></div>

            <h2 class="hero-swiper-slide-title">
                Especialistas en Personal Temporal
           </h2>
           <p class="hero-swiper-slide-info">
               Somos una empresa dedicada a ofrecer servicios especializados en personal temporal, con énfasis en carga y descarga. ¡Confía en nosotros para tus necesidades laborales!
           </p>
           <a href="#" class="hero-swiper-slide-a">
               Ver más
           </a>
        </div>
    </div>

    <div class="swiper-slide hero-swiper-slide hero-swiper-slide-2">
        <div class="hero-swiper-slide-bg hero-swiper-slide-bg-2"></div>
        <div class="hero-swiper-slide-content">
            
            <h2 class="hero-swiper-slide-title">
                ¿Por qué elegir Antwork?
            </h2>
            <p class="hero-swiper-slide-info">
                En Antwork, nos destacamos por nuestra experiencia y compromiso con la excelencia en el servicio. Nuestro equipo altamente calificado está listo para satisfacer tus necesidades laborales de manera eficiente y confiable.
            </p>
            <a href="#" class="hero-swiper-slide-a">
                Conócenos
            </a>
        </div>
    </div>

    <div class="swiper-slide hero-swiper-slide hero-swiper-slide-3">
        <div class="hero-swiper-slide-content">
        <div class="hero-swiper-slide-bg hero-swiper-slide-bg-3"></div>
            
            <h2 class="hero-swiper-slide-title">
                    Únete a Antwork hoy mismo
                </h2>
                <p class="hero-swiper-slide-info smaller">
                    ¿Estás buscando nuevas oportunidades laborales? ¡Antwork es el lugar adecuado para ti! Envía tu currículum ahora y únete a nuestro equipo de profesionales.
                </p>
                <a href="#" class="hero-swiper-slide-a">
                    Enviar Currículum
                </a>
        </div>
    </div>

    <div class="swiper-slide hero-swiper-slide hero-swiper-slide-4">
        <div class="hero-swiper-slide-content">
        <div class="hero-swiper-slide-bg hero-swiper-slide-bg-4"></div>
            
            <h2 class="hero-swiper-slide-title">
                Contacta con nosotros
            </h2>
            <p class="hero-swiper-slide-info smaller">
                ¿Tienes preguntas o necesitas más información? ¡No dudes en ponerte en contacto con nuestro equipo! Estamos aquí para ayudarte.
            </p>
            <a href="#" class="hero-swiper-slide-a">
                Contáctanos
            </a>
        </div>
    </div>
  </div>

  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
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
            <li class="frequent_questions-text-ul-li">
                <p id="question-title-1" class="frequent_questions-text-ul-li-title">
                <span id="icon-1" class="material-symbols-outlined">add</span> ¿Cuáles son los servicios que ofrece Antwork?
                </p>
                <p id="question-info-1" class="frequent_questions-text-ul-li-info frequent_questions-text-ul-li-info-1">
                    Antwork ofrece servicios especializados en personal temporal para cargas y descargas. Contamos con personal capacitado y experimentado para cubrir las necesidades de tu empresa en este aspecto.
                </p>
            </li>

            <li class="frequent_questions-text-ul-li">
                <p id="question-title-2" class="frequent_questions-text-ul-li-title">
                <span id="icon-2" class="material-symbols-outlined">add</span>¿Cómo puedo enviar mi currículum a Antwork?
                </p>
                <p id="question-info-2" class="frequent_questions-text-ul-li-info frequent_questions-text-ul-li-info-2">
                    Puedes enviar tu currículum a Antwork a través de nuestro formulario en línea. Una vez recibido, nuestro equipo revisará tu perfil y te contactará si tu experiencia y habilidades coinciden con nuestras necesidades actuales.
                </p>
            </li>

            <li class="frequent_questions-text-ul-li">
                <p id="question-title-3" class="frequent_questions-text-ul-li-title">
                <span id="icon-3" class="material-symbols-outlined">add</span> ¿Cómo puedo contactar a Antwork para solicitar sus servicios?
                </p>
                <p id="question-info-3" class="frequent_questions-text-ul-li-info frequent_questions-text-ul-li-info-3">
                    Puedes contactar a Antwork a través de nuestra página web o llamando a nuestro número de teléfono. Estamos disponibles para atender tus consultas y solicitudes de servicio de forma rápida y eficiente.
                </p>
            </li>

            <li class="frequent_questions-text-ul-li">
                <p id="question-title-4" class="frequent_questions-text-ul-li-title">
                <span id="icon-4" class="material-symbols-outlined">add</span> ¿Antwork ofrece servicios personalizados para empresas?
                </p>
                <p id="question-info-4" class="frequent_questions-text-ul-li-info frequent_questions-text-ul-li-info-4">
                    Sí, Antwork ofrece servicios personalizados para empresas que buscan soluciones específicas en cuanto a personal temporal para cargas y descargas. Contáctanos para conocer más sobre cómo podemos adaptarnos a las necesidades de tu empresa.
                </p>
            </li>
        </ul>
    </div>
</div>
<script type="module" src="public/js/frequent_questions.js"></script>


<script type="module" src="public/js/swiper.js"></script>

<?php
require 'src/vista/partials/footer.php';
?>