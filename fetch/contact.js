function validarCampos() {
    const nombreInput = document.getElementById('nombre');
    const correoInput = document.getElementById('correo');
    const telefonoInput = document.getElementById('telefono');
    const mensajeInput = document.getElementById('mensaje');
    const msgP = document.getElementById('msgP');

    // Verificar si los campos están vacíos
    if (nombreInput.value.trim() === '' || correoInput.value.trim() === '' || mensajeInput.value.trim() === '') {
        msgP.innerHTML = 'Por favor completa todos los campos.';
        return false;
    }

    // Verificar si todos los campos son válidos
    if (nombreInput.checkValidity() && correoInput.checkValidity() && telefonoInput.checkValidity() && mensajeInput.checkValidity()) {
        return true; // Todos los campos son válidos
    } else {
        // Si algún campo no es válido, muestra un mensaje de error
        msgP.innerHTML = 'Por favor completa todos los campos correctamente.';
        return false;
    }
}


document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe de forma convencional

        // Verificar si todos los campos son válidos
        if (validarCampos()) {
            // Si todos los campos son válidos, continúa con el envío del formulario
            // Muestra el mensaje "Enviando..."
            const msgP = document.getElementById('msgP');
            msgP.innerHTML = '<span class="loading-msg"></span>';

            // Captura los datos del formulario
            const formData = new FormData(contactForm);

            // Realiza la solicitud Fetch para enviar los datos al servidor
            fetch('?c=index&m=contact', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la solicitud.');
                }
                return response.text();
            })
            .then(data => {
                msgP.innerHTML = "¡El correo electrónico se envió correctamente!";
            })
            .catch(error => {
                console.error('Error:', error);
                msgP.innerHTML = "Error al enviar el correo electrónico.";
            });
        }
    });
});
