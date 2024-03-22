<?php
require 'src/vista/partials/head.php';
require 'src/datos/newsData.php';

// Verifica si hay una URL de referencia
$url_referencia = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php'; // Si no hay URL de referencia, se redirige a 'index.php'

if (isset($_GET['id'])) {
    $idNoticia = $_GET['id'];
    $noticiaEncontrada = null;
    
    // Busca la noticia en el array de noticias
    foreach ($noticias as &$noticia) {
        if ($noticia['id'] == $idNoticia) {
            $noticiaEncontrada = $noticia;
            
            // Incrementa el contador de vistas
            if (isset($noticia['vistas'])) {
                $noticia['vistas']++;
            } else {
                $noticia['vistas'] = 1;
            }
            
            // Guarda la información actualizada en el archivo de datos
            file_put_contents('src/datos/newsData.php', '<?php $noticias = ' . var_export($noticias, true) . ';');
            
            break;
        }
    }

    // Si se encuentra la noticia, renderiza su contenido
    if ($noticiaEncontrada) {
        ?>
        <div class="new-container">
            <div class="new-item">
                <h3 class="new-title"><?php echo $noticia['titulo']; ?></h3>
                <img src="<?php echo $noticia['img']; ?>" alt="" class="new-img">
                <p class="new-info"><?php echo date('d/m/Y', strtotime($noticia['fecha'])); ?> - <?php echo $noticia['autor']; ?></p>
                <p class="new-content"><?php echo $noticia['contenido']; ?></p>
                <p class="new-category">Categoría: <?php echo $noticia['categoria']; ?></p>
                <p class="new-views"><span class="material-symbols-outlined">visibility</span>
                <?php echo $noticia['vistas']; ?></p>
            </div>
            <div class="more-news">
                <p class="more-news-title">Noticias Relacionadas</p>
                <div class="more-news-container">
                    <?php
                    // Obtener la categoría de la noticia actual
                    $categoriaNoticiaActual = $noticia['categoria'];

                    // Mostrar las siguientes 10 noticias después de la noticia actual con la misma categoría
                    $contador = 0;
                    foreach ($noticias as $otraNoticia) {
                        // Evitar mostrar la misma noticia actual
                        if ($otraNoticia['id'] != $idNoticia) {
                            // Verificar si la noticia tiene la misma categoría que la noticia actual
                            if ($otraNoticia['categoria'] == $categoriaNoticiaActual) {
                                ?>
                                <div class="more-news-item">
                                    <h4 class="more-news-item-title">
                                        <a href="?c=index&m=new&id=<?php echo $otraNoticia['id']; ?>"><?php echo $otraNoticia['titulo']; ?></a>
                                    </h4>
                                    <p class="more-news-item-info"><?php echo date('d/m/Y', strtotime($otraNoticia['fecha'])); ?> - <?php echo $otraNoticia['autor']; ?></p>
                                </div>
                                <?php
                                $contador++;
                            }

                            // Detener el bucle una vez que se han mostrado 10 noticias relacionadas
                            if ($contador >= 10) {
                                break;
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <p><a href="<?php echo $url_referencia; ?>">Volver</a></p> <!-- Enlace para volver a la página anterior -->
        </div>
        <?php
        // JavaScript para agregar metadatos
        ?>
        <script>
            // Obtenemos el encabezado HTML
            var head = document.querySelector('head');

            // Creamos elementos meta
            var descriptionMeta = document.createElement('meta');
            descriptionMeta.name = 'description';
            descriptionMeta.content = '<?php echo substr($noticia['contenido'], 0, 160); ?>';
            head.appendChild(descriptionMeta);

            var authorMeta = document.createElement('meta');
            authorMeta.name = 'author';
            authorMeta.content = '<?php echo $noticia['autor']; ?>';
            head.appendChild(authorMeta);
        </script>
        <?php
    } else {
        // Si no se encuentra la noticia, muestra un mensaje de que la noticia no existe
        ?>
        <p>La noticia no existe.</p>
        <?php
    }
} else {
    // Si no hay ID de noticia en la URL, muestra un mensaje de error
    ?>
    <p>No se proporcionó un ID de noticia.</p>
    <?php
}
?>

<?php
require 'src/vista/partials/footer.php';
?>
