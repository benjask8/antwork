<?php
require 'src/vista/partials/head.php';

?>

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


<h3 class="normal-title">Preguntas frecuentes</h3>
    <p class="more-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam saepe numquam laudantium nisi labore debitis minima! Quisquam ut velit obcaecati earum esse et tempore exercitationem consequatur reiciendis! Necessitatibus, vel minima!

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, beatae.

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi itaque quo voluptate exercitationem obcaecati. Cumque quod quos, repellat sed consequuntur dolores optio, dicta quasi possimus est, ex magnam eaque praesentium. Tenetur consequatur molestiae optio laboriosam quas adipisci deleniti, quidem magni unde quod neque perspiciatis natus aliquam dolore eius explicabo. Libero minus dolor amet magni vel soluta ratione illo magnam incidunt consequatur blanditiis dolores voluptatibus sit enim accusantium itaque, quis id iusto ad impedit quisquam quae assumenda ut fuga! Quaerat odit quidem, quod nemo numquam sunt ullam maxime sit dignissimos eos sed atque voluptatem rerum voluptatibus a cum sint? Quidem, vel?

    </p>
<script type="module" src="public/js/frequent_questions.js"></script>

<script>    
    document.title = "Preguntas Frecuentes | AntWork";
</script>    
<?php
require 'src/vista/partials/footer.php';
?>
