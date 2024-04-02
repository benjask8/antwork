    <?php
    require 'src/vista/partials/head.php';
    ?>
   

    <!-- servicios -->
    <div class="services-container">
        <h2 class="services-title">Nuestros Servicios</h2>
        <div class="services">
        <div class="service-item">
                <span class="service-item-icon material-symbols-outlined">groups</span>
                <h4 class="service-item-title">un titulo acerca de</h4>
                <p class="service-item-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur .</p>
            </div>
            <div class="service-item">
                <span class="service-item-icon material-symbols-outlined">local_shipping</span>
                <h4 class="service-item-title">un titulo acerca de</h4>
                <p class="service-item-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur .</p>
            </div>
            <div class="service-item">
                <span class="service-item-icon material-symbols-outlined">engineering</span>
                <h4 class="service-item-title">un titulo acerca de</h4>
                <p class="service-item-info">L1rem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur .</p>
            </div>
            <div class="service-item" data-title="Título del servicio 4" data-info="Aquí va la información detallada y extensa del servicio 4">
                <span class="service-item-icon material-symbols-outlined">groups</span>
                <h4 class="service-item-title">un titulo acerca de</h4>
                <p class="service-item-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequuntur .</p>
            </div>

        </div>
    </div>
    
    
    <!-- Modal -->
    <div id="myModal" class="services-modal">
        <div class="services-modal-content">
            <span class="close">&times;</span>
            <h4 id="modal-title" class="services-modal-title"></h4>
            <p id="modal-info" class="services-modal-info"></p>
        </div>
    </div>
    
    <!-- servicios end -->

    <?php 
    require 'src/vista/partials/footer.php'; 
    ?>


    <script src="public/js/services.js"></script>