document.addEventListener('DOMContentLoaded', function() {
    const qualities = document.querySelectorAll('.home-qualities-qualitie');
    const contactForm = document.getElementById('contactForm');
    const aboutContainer = document.querySelector('.about-container');
    const aboutImg = document.querySelector('.about-img');
    const serviceItems = document.querySelectorAll('.service-item');

    function checkVisibility() {
        qualities.forEach((qualitie, index) => {
            const rect = qualitie.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            // Si el elemento está más de 100 píxeles por debajo de la parte superior y
            // menos de 100 píxeles por encima de la parte inferior de la ventana,
            // lo marcamos como visible
            if (rect.top <= windowHeight - 100 && rect.bottom >= 100) {
                setTimeout(() => {
                    qualitie.classList.add('show');
                }, index * 500); // Agregar un retraso a cada elemento
            }
        });

        // Verificar si el formulario de contacto está visible unos píxeles después de hacer scroll hacia arriba
        if (contactForm) {
            const formRect = contactForm.getBoundingClientRect();
            if (formRect.top <= window.innerHeight - 100 && formRect.bottom >= 100) {
                contactForm.classList.add('show');
            }
        }

        // Verificar si la sección "Acerca de" está visible unos píxeles después de hacer scroll hacia arriba
        if (aboutContainer) {
            const aboutRect = aboutContainer.getBoundingClientRect();
            if (aboutRect.top <= window.innerHeight - 100 && aboutRect.bottom >= 100) {
                aboutContainer.classList.add('show');
            }
        }

        // Verificar si la imagen de la sección "Acerca de" está visible unos píxeles después de hacer scroll hacia arriba
        if (aboutImg) {
            const imgRect = aboutImg.getBoundingClientRect();
            if (imgRect.top <= window.innerHeight - 100 && imgRect.bottom >= 100) {
                aboutImg.classList.add('show');
            }
        }

        // Verificar la visibilidad de los elementos del servicio unos píxeles después de hacer scroll hacia arriba
        serviceItems.forEach((serviceItem, index) => {
            const rect = serviceItem.getBoundingClientRect();
            if (rect.top <= window.innerHeight - 100 && rect.bottom >= 100) {
                setTimeout(() => {
                    serviceItem.classList.add('show');
                }, index * 500); // Agregar un retraso a cada elemento
            }
        });
    }

    // Verificar la visibilidad al cargar la página y al hacer scroll
    checkVisibility();
    window.addEventListener('scroll', checkVisibility);
});
