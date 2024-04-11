document.getElementById('contact-modal-btn').addEventListener('click', function() {
    document.querySelector('.contact-modal').classList.toggle('open');
});

document.getElementById('close-contact-modal').addEventListener('click', function() {
    document.querySelector('.contact-modal').classList.toggle('open');
});

const labels = document.querySelectorAll('.contact-modal-flex-form label');

labels.forEach(label => {
    const inputId = label.getAttribute('for');
    const input = document.getElementById(inputId);

    input.addEventListener('focus', () => {
        label.style.transform = 'translateY(0)';
        label.style.fontSize = '.9em';
        label.textContent = label.textContent.replace('*', ''); // Eliminar el asterisco del contenido del label
        label.classList.remove('error'); // Eliminar la clase de error si está presente
    });

    input.addEventListener('blur', () => {
        if (!input.value) {
            label.style.transform = 'translateY(40px)';
            label.style.fontSize = '';
            label.textContent = label.textContent.replace('*', ''); // Asegurar que no haya asterisco en el contenido del label
        }
    });
});
    