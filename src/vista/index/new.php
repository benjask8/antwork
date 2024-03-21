<?php
require 'src/vista/partials/head.php';
require 'src/datos/newsData.php';

if (isset($_GET['id'])) {
    $idNoticia = $_GET['id'];
    $noticiaEncontrada = null;
    
    // Busca la noticia en el array de noticias
    foreach ($noticias as $noticia) {
        if ($noticia['id'] == $idNoticia) {
            $noticiaEncontrada = $noticia;
            break;
        }
    }

    // Si se encuentra la noticia, renderiza su contenido
    if ($noticiaEncontrada) {
?>
        <h2><?php echo $noticiaEncontrada['titulo']; ?></h2>
        <p>Fecha: <?php echo $noticiaEncontrada['fecha']; ?></p>
        <p>Autor: <?php echo $noticiaEncontrada['autor']; ?></p>
        <p><?php echo $noticiaEncontrada['contenido']; ?></p>
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
