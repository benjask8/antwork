<?php
require 'src/vista/partials/head.php';
?>    
<br>
<div class="location-msg">
    <a href="?c=index&m=index"><i class="fa-solid fa-house-chimney"></i> Inicio</a> <strong>></strong> <b>Servicios</b>
</div>
<!-- servicios -->
<div class="services-container">
    <h2 class="services-title centred">Sobre Nuestros <span class="span-big-b-border">Servicios</span></h2>
    <div class="services">
        <?php foreach ($services as $index => $service): ?>
            <div class="service-item" onclick="openModal(<?= $index ?>)" data-title="<?= $service['title'] ?>" data-info="<?= $service['info'] ?>">
                <span class="service-item-icon material-symbols-outlined"><?= $service['icon'] ?></span>
                <h4 class="service-item-title"><?= $service['pre-title'] ?></h4>
                <p class="service-item-info"><?= $service['pre-info'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div id="myModal" class="services-modal">
    <div class="services-modal-content">
        <button class="close" aria-label="Cerrar modal de services">
            <span class="material-symbols-outlined">close</span>
        </button>
        <h4 id="modal-title" class="services-modal-title centred"></h4>
        <p id="modal-info" class="services-modal-info"></p>
    </div>
</div>

<script>    
    document.title = "Services | AntWork";
    function openModal(index) {
        const modal = document.getElementById('myModal');
        const modalTitle = document.getElementById('modal-title');
        const modalInfo = document.getElementById('modal-info');
        const service = <?= json_encode($services) ?>[index];

        modalTitle.textContent = service['title'];
        modalInfo.textContent = service['info'];
        modal.classList.add('services-modal-open');
    }

    document.querySelector('.close').addEventListener('click', function() {
        const modal = document.getElementById('myModal');
        modal.classList.remove('services-modal-open');
    });

    window.addEventListener('click', (event) => {
        const modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.classList.remove('services-modal-open'); 
        }
    });
</script>

<?php require 'src/vista/partials/footer.php'; ?>
