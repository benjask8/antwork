<?php
require 'src/vista/partials/head.php';
require 'src/datos/newsData.php';

// Función de comparación para ordenar las noticias por fecha
function compararFechas($a, $b) {
    return strtotime($b['fecha']) - strtotime($a['fecha']); // Invertir el orden para mostrar los más recientes primero
}

// Ordena el array de noticias utilizando la función de comparación
usort($noticias, 'compararFechas');
?>

<h2 class="normal-title">Noticias de AntWork</h2>

<div class="news-container">
    <?php foreach ($noticias as $noticia) : ?>
        <a href="?c=index&m=new&id=<?php echo $noticia['id']; ?>" class="news-item">
            <img src="<?php echo $noticia['img']; ?>" alt="" class="news-img">
            <h3 class="news-title">
                <?php 
                // Limita el título a 100 caracteres
                echo strlen($noticia['titulo']) > 100 ? substr($noticia['titulo'], 0, 100) . "..." : $noticia['titulo']; 
                ?>
            </h3>
            <p class="news-content">
                <?php
                echo strlen($noticia['contenido']) > 50 ? substr($noticia['contenido'], 0, 50) . "..." : $noticia['contenido'];
                ?>
            </p>
            <p class="news-info"><?php echo date('d/m/Y', strtotime($noticia['fecha'])); ?></p>
        </a>
    <?php endforeach; ?>
</div>

<script>
    document.title = "Noticias | AntWork";
</script>
<?php require 'src/vista/partials/footer.php'; ?>
