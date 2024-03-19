<?php
require 'src/vista/partials/head.php';

// Define un array con la información de las preguntas y respuestas
$preguntasRespuestas = array(
    array(
        'pregunta' => '¿Cuáles son los servicios que ofrece Antwork?',
        'respuesta' => 'Antwork ofrece servicios especializados en personal temporal para cargas y descargas. Contamos con personal capacitado y experimentado para cubrir las necesidades de tu empresa en este aspecto.'
    ),
    array(
        'pregunta' => '¿Cómo puedo enviar mi currículum a Antwork?',
        'respuesta' => 'Puedes enviar tu currículum a Antwork a través de nuestro formulario en línea. Una vez recibido, nuestro equipo revisará tu perfil y te contactará si tu experiencia y habilidades coinciden con nuestras necesidades actuales.'
    ),
    array(
        'pregunta' => '¿Cómo puedo contactar a Antwork para solicitar sus servicios?',
        'respuesta' => 'Puedes contactar a Antwork a través de nuestra página web o llamando a nuestro número de teléfono. Estamos disponibles para atender tus consultas y solicitudes de servicio de forma rápida y eficiente.'
    ),
    array(
        'pregunta' => '¿Antwork ofrece servicios personalizados para empresas?',
        'respuesta' => 'Sí, Antwork ofrece servicios personalizados para empresas que buscan soluciones específicas en cuanto a personal temporal para cargas y descargas. Contáctanos para conocer más sobre cómo podemos adaptarnos a las necesidades de tu empresa.'
    )
);
?>

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

<?php
require 'src/vista/partials/footer.php';
?>
