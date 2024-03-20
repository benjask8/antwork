<?php
require 'src/vista/partials/head.php';

// Función de comparación para ordenar las noticias por el título
function compararTitulos($a, $b) {
    return strcmp($a['titulo'], $b['titulo']);
}

// Ordena el array de noticias utilizando la función de comparación
usort($noticias, 'compararTitulos');
?>

<h2 class="normal-title">Noticias de AntWork</h2>

<div class="news-container">
    <?php foreach ($noticias as $noticia) : ?>
        <div class="news-item">
            <h3 class="news-title"><?php echo $noticia['titulo']; ?></h3>
            <p class="news-info">Publicado el <?php echo date('d/m/Y', strtotime($noticia['fecha'])); ?> por <?php echo $noticia['autor']; ?></p>
            <p class="news-content">
                <?php
                // Limita el contenido a 50 caracteres y agrega "..." al final
                echo strlen($noticia['contenido']) > 50 ? substr($noticia['contenido'], 0, 50) . "..." : $noticia['contenido'];
                ?>
            </p>
            <a href="?c=index&m=new&id=<?php echo $noticia['id']; ?>" class="read-more">Leer más</a>
        </div>
    <?php endforeach; ?>
</div>

<script>
    document.title = "Noticias | AntWork";
</script>
<?php require 'src/vista/partials/footer.php'; ?>
