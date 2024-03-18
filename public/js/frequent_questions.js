// Selecciona todos los elementos de los títulos de las preguntas y los íconos
const questionTitles = document.querySelectorAll(".frequent_questions-text-ul-li-title");
const icons = document.querySelectorAll(".material-symbols-outlined");
const questionInfos = document.querySelectorAll(".frequent_questions-text-ul-li-info");

// Define la función para abrir la información
const openInfo = (numeroPregunta) => {
    // Verifica si el elemento de información de la pregunta seleccionada ya está abierto
    const isOpen = questionInfos[numeroPregunta - 1].classList.contains("frequent_questions-text-ul-li-info-open");

    // Cierra todos los elementos de información y establece todos los íconos a "+"
    questionInfos.forEach(info => {
        info.classList.remove("frequent_questions-text-ul-li-info-open");
    });
    icons.forEach(icon => {
        icon.textContent = "add";
    });

    // Si la pregunta seleccionada no estaba abierta, la abre y cambia su ícono a "-"
    if (!isOpen) {
        questionInfos[numeroPregunta - 1].classList.add("frequent_questions-text-ul-li-info-open");
        icons[numeroPregunta].textContent = "remove";
    }
}

// Asigna el evento de clic a cada título de pregunta para abrir la información correspondiente
questionTitles.forEach((title, index) => {
    title.addEventListener("click", () => openInfo(index + 1));
});
