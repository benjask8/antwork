<?php
require 'src/vista/partials/head.php';
?>
<br>
<div class="location-msg">
    <a href="?c=index&m=index"><i class="fa-solid fa-house-chimney"></i> Inicio</a> <strong>></strong> <b>Preguntas Frecuentes</b>
</div>
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
<script type="module" src="public/js/frequent_questions.js"></script>

<script>    
    document.title = "Preguntas Frecuentes | AntWork";
</script>    
<?php
require 'src/vista/partials/footer.php';
?>
