document.addEventListener('DOMContentLoaded', function() {
    const qualities = document.querySelectorAll('.home-qualities-qualitie');
    const contactForm = document.getElementById('contactForm');
    const aboutContainer = document.querySelector('.about-container');
    const aboutImg = document.querySelector('.about-img');
    const serviceItems = document.querySelectorAll('.service-item');

    // Función para agregar la clase 'show' a los elementos
    function addShowClass(elements) {
        elements.forEach((element) => {
            element.classList.add('show');
        });
    }

    // Agregar la clase 'show' a todos los elementos al cargar la página
    addShowClass(qualities);
    if (contactForm) {
        contactForm.classList.add('show');
    }
    if (aboutContainer) {
        aboutContainer.classList.add('show');
    }
    if (aboutImg) {
        aboutImg.classList.add('show');
    }
    addShowClass(serviceItems);

    // Función para verificar la visibilidad al hacer scroll
    function checkVisibility() {
        // Agregar la clase 'show' a todos los elementos al hacer scroll
        addShowClass(qualities);
        if (contactForm) {
            contactForm.classList.add('show');
        }
        if (aboutContainer) {
            aboutContainer.classList.add('show');
        }
        if (aboutImg) {
            aboutImg.classList.add('show');
        }
        addShowClass(serviceItems);
    }

    // Verificar la visibilidad al hacer scroll
    window.addEventListener('scroll', checkVisibility);
});
