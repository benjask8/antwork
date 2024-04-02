      // Obtener todos los elementos de servicio
      const serviceItems = document.querySelectorAll('.service-item');

      // Iterar sobre cada elemento de servicio y agregar un evento de clic
  serviceItems.forEach((serviceItem, index) => {
    serviceItem.addEventListener('click', () => {
      const modal = document.getElementById('myModal');
      const modalTitle = document.getElementById('modal-title');
      const modalInfo = document.getElementById('modal-info');
  
      // Mostrar la ventana modal
      modal.style.display = 'flex';
  
      // Obtener el título e información del servicio seleccionado
      const title = serviceItem.dataset.title;
      const info = serviceItem.dataset.info;
  
      // Asignar el título e información al contenido de la ventana modal
      modalTitle.textContent = title;
      modalInfo.innerHTML = info;
  
      // Mostrar la información adicional oculta si existe
      const hiddenInfo = serviceItem.querySelector('.hidden-info');
      if (hiddenInfo) {
          hiddenInfo.style.display = 'flex';
      }
      });
      });
  
  
      
  // Obtener el elemento para cerrar la ventana modal
  const closeModal = document.querySelector('.close');
  
  // Agregar un evento de clic para cerrar la ventana modal
  closeModal.addEventListener('click', () => {
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
  });
  
  // También puedes cerrar la ventana modal haciendo clic fuera de ella
  window.addEventListener('click', (event) => {
    const modal = document.getElementById('myModal');
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  });
  
     