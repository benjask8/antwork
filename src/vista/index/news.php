<?php
require 'src/vista/partials/head.php';
require 'src/datos/newsData.php';

// Número de noticias por página
$noticias_por_pagina = 5;

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

// Si hay una categoría seleccionada, filtrar las noticias por esa categoría
if ($categoria_seleccionada) {
    $noticias = array_filter($noticias, function($noticia) use ($categoria_seleccionada) {
        return strtolower($noticia['categoria']) === $categoria_seleccionada;
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

<h2 class="normal-title">Noticias<?php echo $categoria_seleccionada ? ' de ' . ucwords($categoria_seleccionada) : ''; ?> | AntWork</h2>

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

<div class="news-container">
    <?php foreach ($noticias_pagina as $noticia) : ?>
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
<div class="pagination">
    <?php if ($total_paginas > 1) : ?>
        <ul>
            <?php if ($pagina_actual > 1) : ?>
                <li class="pagination-arrow"><a href="?c=index&m=news&categoria=<?php echo $categoria_seleccionada ? urlencode($categoria_seleccionada) : ''; ?>&page=<?php echo $pagina_actual - 1; ?>"><span class="material-symbols-outlined">chevron_left</span></a></li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                <li <?php echo $i == $pagina_actual ? 'class="active"' : ''; ?>><a href="?c=index&m=news&categoria=<?php echo $categoria_seleccionada ? urlencode($categoria_seleccionada) : ''; ?>&page=<?php echo $i; ?>" class="pagination-num"><?php echo $i; ?></a></li>
            <?php endfor; ?>
            <?php if ($pagina_actual < $total_paginas) : ?>
                <li class="pagination-arrow"><a  href="?c=index&m=news&categoria=<?php echo $categoria_seleccionada ? urlencode($categoria_seleccionada) : ''; ?>&page=<?php echo $pagina_actual + 1; ?>"><span class="material-symbols-outlined">chevron_right</span></a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div>


<script>
document.title = "Noticias<?php echo $categoria_seleccionada ? ' de ' . ucwords($categoria_seleccionada) : ''; ?> | AntWork";
var filters = document.getElementById("filters");

// Script para mostrar/ocultar el menú desplegable al hacer clic en el botón de filtro
document.getElementById("filterBtn").addEventListener("click", function() {
filters.classList.toggle("filters-open");
});

// Cerrar el menú desplegable si el usuario hace clic fuera de él
window.onclick = function(event) {
if (!event.target.matches('.filter-button')) {
var dropdowns = document.getElementsByClassName("filters");
for (var i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('filters-open')) {
        openDropdown.classList.remove('filters-open');
    }
}
}
}
</script>

<?php require 'src/vista/partials/footer.php'; ?>
