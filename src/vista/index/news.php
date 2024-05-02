<?php
require 'src/vista/partials/head.php';
require 'src/datos/newsData.php';

// Número de noticias por página
$noticias_por_pagina = 10;

// Función de comparación para ordenar las noticias por fecha
function compararFechas($a, $b) {
    return strtotime($b['fecha']) - strtotime($a['fecha']); // Invertir el orden para mostrar los más recientes primero
}

// Ordena el array de noticias utilizando la función de comparación
usort($noticias, 'compararFechas');

// Obtener la categoría de la URL, si está definida
$categoria_seleccionada = isset($_GET['categoria']) ? strtolower($_GET['categoria']) : null;

// Obtener todas las categorías disponibles
$categorias_disponibles = array_unique(array_column($noticias, 'categoria'));

// Filtrar las noticias por categoría, si se ha seleccionado una
if ($categoria_seleccionada) {
    $noticias = array_filter($noticias, function($noticia) use ($categoria_seleccionada) {
        return strtolower($noticia['categoria']) === $categoria_seleccionada;
    });
}

// Obtener el término de búsqueda si está presente
$termino_busqueda = isset($_GET['q']) ? $_GET['q'] : '';

// Filtrar las noticias por término de búsqueda, si se ha ingresado uno
if (!empty($termino_busqueda)) {
    $noticias = array_filter($noticias, function($noticia) use ($termino_busqueda) {
        $titulo = strtolower($noticia['titulo']);
        $contenido = strtolower($noticia['contenido']);
        // Buscar tanto en el título como en el contenido
        $en_titulo = strpos($titulo, strtolower($termino_busqueda)) !== false;
        $en_contenido = strpos($contenido, strtolower($termino_busqueda)) !== false;
        // Devolver true si se encuentra el término de búsqueda en el título o en el contenido
        return $en_titulo || $en_contenido;
    });
}


// Obtener el número total de noticias
$total_noticias = count($noticias);

// Calcular el número total de páginas
$total_paginas = ceil($total_noticias / $noticias_por_pagina);

// Obtener el número de página actual, si está definido
$pagina_actual = isset($_GET['page']) ? max(1, min($_GET['page'], $total_paginas)) : 1;

// Calcular el índice de inicio y fin para las noticias en la página actual
$indice_inicio = ($pagina_actual - 1) * $noticias_por_pagina;
$indice_fin = min($indice_inicio + $noticias_por_pagina, $total_noticias);

// Obtener las noticias para la página actual
$noticias_pagina = array_slice($noticias, $indice_inicio, $noticias_por_pagina);
?>
<br>
        
<div class="location-msg">
    <a href="?c=index&m=index"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
    <?php
    if(isset($_GET['categoria'])) {
        echo ' <strong>></strong> <a href="?c=index&m=news">Noticias</a> <strong>></strong><b>' . htmlspecialchars($_GET['categoria']) . '</b>';
    } else {
        echo ' <strong>></strong> <b>Noticias</b>';
    }
    ?>
</div>

<div class="news-header">
    <h2 class="normal-title">Noticias<?php echo $categoria_seleccionada ? ' de ' . ucwords($categoria_seleccionada) : ''; ?> | AntWork</h2>
    <form method="get" action="?c=index&m=news" class="news-search-container">
        <input type="hidden" name="c" value="index">
        <input type="hidden" name="m" value="news">
        <input placeholder="Buscar noticias..." name="q" type="search" class="search-input" id="searchInput">   
        <button class="search-btn" id="searchBtn" type="submit">
            <span class="material-symbols-outlined">search</span>
        </button>
    </form>
</div>


<div class="filter-container">
    <button class="filter-button" id="filterBtn"><span class="material-symbols-outlined">tune</span> Filtrar</button>
    <div class="filters" id="filters">
        <a href="?c=index&m=news">Sin Filtros</a>
        <p class="filters-title">Categoria</p>
        <?php foreach ($categorias_disponibles as $categoria) : ?>
            <a href="?c=index&m=news&categoria=<?php echo urlencode($categoria); ?>"><?php echo ucwords($categoria); ?></a>
        <?php endforeach; ?>
    </div>
</div>
<?php
if (!empty($termino_busqueda)) {
    if(count($noticias_pagina) == 0){
?>
    <p class="search-results-p">No hay Resultados de "<strong><?php echo $termino_busqueda; ?></strong>"</p>
<?php
    }
    else{
?>
    <p class="search-results-p">Se ecnontro <?php echo count($noticias_pagina); ?> Resultados de "<strong><?php echo $termino_busqueda; ?></strong>"</p>
<?php
    }
}
?>

<div class="news-container">
    <?php foreach ($noticias_pagina as $noticia) : ?>
        <a href="?c=index&m=new&id=<?php echo $noticia['id']; ?>" class="news-item">
            <img src="<?php echo $noticia['img']; ?>" alt="" class="news-img">
            <h3 class="news-title">
                <?php 
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
<div class="pagination">
    <?php if ($total_paginas > 1) : ?>
        <ul>
            <?php if ($pagina_actual > 1) : ?>
                <?php if (!empty($termino_busqueda)) : ?>
                    <li class="pagination-arrow"><a href="?q=<?php echo urlencode($termino_busqueda); ?>&page=<?php echo $pagina_actual - 1; ?>"><span class="material-symbols-outlined">chevron_left</span></a></li>
                <?php else: ?>
                    <li class="pagination-arrow"><a href="?c=index&m=news&categoria=<?php echo $categoria_seleccionada ? urlencode($categoria_seleccionada) : ''; ?>&page=<?php echo $pagina_actual - 1; ?>"><span class="material-symbols-outlined">chevron_left</span></a></li>
                <?php endif; ?>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                <?php if (!empty($termino_busqueda)) : ?>
                    <li <?php echo $i == $pagina_actual ? 'class="active"' : ''; ?>><a href="?c=index&m=news&q=<?php echo urlencode($termino_busqueda); ?>&page=<?php echo $i; ?>" class="pagination-num"><?php echo $i; ?></a></li>
                <?php else: ?>
                    <li <?php echo $i == $pagina_actual ? 'class="active"' : ''; ?>><a href="?c=index&m=news&categoria=<?php echo $categoria_seleccionada ? urlencode($categoria_seleccionada) : ''; ?>&page=<?php echo $i; ?>" class="pagination-num"><?php echo $i; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if ($pagina_actual < $total_paginas) : ?>
                <?php if (!empty($termino_busqueda)) : ?>
                    <li class="pagination-arrow"><a  href="?q=<?php echo urlencode($termino_busqueda); ?>&page=<?php echo $pagina_actual + 1; ?>"><span class="material-symbols-outlined">chevron_right</span></a></li>
                <?php else: ?>
                    <li class="pagination-arrow"><a  href="?c=index&m=news&categoria=<?php echo $categoria_seleccionada ? urlencode($categoria_seleccionada) : ''; ?>&page=<?php echo $pagina_actual + 1; ?>"><span class="material-symbols-outlined">chevron_right</span></a></li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div>

<script src="public/js/news.js"></script>


<?php
if (!empty($termino_busqueda)) {
?>
    <script>
        document.title = "<?php echo $termino_busqueda; ?> | AntWork";
    </script>
<?php
}
else{
?>
<script>
    document.title = "Noticias <?php echo $categoria_seleccionada ? ' de ' . ucwords($categoria_seleccionada) : ''; ?> | AntWork";
</script>
<?php  
}
?>


<?php require 'src/vista/partials/footer.php'; ?>
