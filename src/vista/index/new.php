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
        


        <script>    
            document.title = "<?php echo $noticia['titulo']; ?>";
        </script>    

        <br>    
        <div class="location-msg">
                <a href="?c=index&m=index"><i class="fa-solid fa-house-chimney"></i> Inicio</a> <strong>></strong> <a href="?c=index&m=news">Noticias</a> <strong>></strong> <a href="?c=index&m=news&categoria=<?php echo $noticia['categoria']; ?>"><?php echo $noticia['categoria']; ?></a> <strong>></strong> <b><?php echo $noticia['titulo']; ?></b>
        </div>

        <div class="news-header">
            <h2 class="normal-title"><?php echo $noticia['categoria']; ?></h2>
            <form method="get" action="?c=index&m=news" class="news-search-container">
                <input type="hidden" name="c" value="index">
                <input type="hidden" name="m" value="news">
                <input placeholder="Buscar noticias..." name="q" type="search" class="search-input" id="searchInput">   
                <button class="search-btn" id="searchBtn" type="submit">
                    <span class="material-symbols-outlined">search</span>
                </button>
            </form>
        </div>


        <div class="new-container">
            <div class="new-item">
                <h3 class="new-title"><?php echo $noticia['titulo']; ?></h3>
                <img src="<?php echo $noticia['img']; ?>" alt="" class="new-img">
                <p class="new-info"><?php echo date('d/m/Y', strtotime($noticia['fecha'])); ?> - <?php echo $noticia['autor']; ?></p>
                <div class="new-content"><?php echo $noticia['contenido']; ?></div>
                <p class="new-category">Categoría: <?php echo $noticia['categoria']; ?></p>
                <p class="new-views"><span class="material-symbols-outlined">visibility</span>
                <?php echo $noticia['vistas']; ?></p>
            </div>
            <div class="more-news">
            <?php
            // Obtener la categoría de la noticia actual
            $categoriaNoticiaActual = $noticia['categoria'];

            // Mostrar las siguientes 10 noticias después de la noticia actual con la misma categoría
            $contador = 0;
            $mostrarNoticiasRelacionadas = false;
            foreach ($noticias as $otraNoticia) {
                // Evitar mostrar la misma noticia actual
                if ($otraNoticia['id'] != $idNoticia) {
                    // Verificar si la noticia tiene la misma categoría que la noticia actual
                    if ($otraNoticia['categoria'] == $categoriaNoticiaActual) {
                        if (!$mostrarNoticiasRelacionadas) {
                            $mostrarNoticiasRelacionadas = true;
                            echo '<p class="more-news-title">Noticias Relacionadas</p>';
                            echo '<div class="more-news-container">';
                        }
                        ?>
                        <a href="?c=index&m=new&id=<?php echo $otraNoticia['id']; ?>" class="more-news-item more-news-item-r">
                            <h4 class="more-news-item-title">
                                <p><?php echo $otraNoticia['titulo']; ?></p>
                            </h4>
                            <p class="more-news-item-info"><?php echo date('d/m/Y', strtotime($otraNoticia['fecha'])); ?> - <?php echo $otraNoticia['autor']; ?></p>
                        </a>
                        <?php
                        $contador++;
                    }

                    // Detener el bucle una vez que se han mostrado 10 noticias relacionadas
                    if ($contador >= 10) {
                        break;
                    }
                }
            }

            if ($mostrarNoticiasRelacionadas) {
                echo '</div>';
            }

            // Mostrar las siguientes 10 noticias después de la noticia actual con diferente categoría
            $contador = 0;
            $mostrarMasNoticias = false;
            foreach ($noticias as $otraNoticia) {
                // Evitar mostrar la misma noticia actual
                if ($otraNoticia['id'] != $idNoticia) {
                    // Verificar si la noticia no tiene la misma categoría que la noticia actual
                    if ($otraNoticia['categoria'] != $categoriaNoticiaActual) {
                        if (!$mostrarMasNoticias) {
                            $mostrarMasNoticias = true;
                            echo '<p class="more-news-title">Más Noticias</p>';
                            echo '<div class="more-news-container">';
                        }
                        ?>
                        <a href="?c=index&m=new&id=<?php echo $otraNoticia['id']; ?>" style="background-image: url(<?php echo $otraNoticia['img']; ?>);" class="more-news-item more-news-item-2">
                            <h4 class="more-news-item-title">
                                <p><?php echo $otraNoticia['titulo']; ?></p>
                            </h4>
                            <p class="more-news-item-info"><?php echo date('d/m/Y', strtotime($otraNoticia['fecha'])); ?> - <?php echo $otraNoticia['autor']; ?></p>
                        </a>
                        <?php
                        $contador++;
                    }

                    // Detener el bucle una vez que se han mostrado 10 noticias relacionadas
                    if ($contador >= 10) {
                        break;
                    }
                }
            }

            if ($mostrarMasNoticias) {
                echo '</div>';
            }
            ?>
        </div>

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
        <p class="xl-title">La noticia no existe <i class="fa-solid fa-ban"></i></p>
        <?php
    }
} else {
    // Si no hay ID de noticia en la URL, muestra un mensaje de error
    ?>
    <p class="xl-title">No se proporcionó un ID de noticia <i class="fa-solid fa-ban"></i></p>
    <?php
}
?>

<?php
require 'src/vista/partials/footer.php';
?>
