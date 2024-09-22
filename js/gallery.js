// Función para abrir el modal
function openModal(imgSrc) {
    const modal = document.getElementById("modal");
    const modalImage = document.getElementById("modalImage");
    const caption = document.getElementById("caption");
    
    modal.style.display = "block";
    modalImage.src = imgSrc;
    caption.innerHTML = imgSrc; // Puedes cambiar esto para mostrar una descripción
}

// Función para cerrar el modal
function closeModal() {
    const modal = document.getElementById("modal");
    modal.style.display = "none";
}

// Agrega un evento a las imágenes
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.card-image').forEach(image => {
        image.addEventListener('click', function() {
            const largeImgSrc = this.getAttribute('data-large');
            openModal(largeImgSrc);
        });
    });
    
    // Cerrar el modal al hacer clic fuera de la imagen
    const modal = document.getElementById("modal");
    modal.addEventListener('click', function(event) {
        if (event.target === modal) { // Verifica si el clic fue en el fondo del modal
            closeModal();
        }
    });
});
