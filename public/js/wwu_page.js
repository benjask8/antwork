const cvInput = document.getElementById('cv');
const fileNameSpan = document.getElementById('fileName');

cvInput.addEventListener('change', function() {
    if (cvInput.files.length > 0) {
        fileNameSpan.textContent = cvInput.files[0].name;
    } else {
        fileNameSpan.textContent = 'Seleccionar archivo';
    }
});