

document.getElementById('loginForm').addEventListener('submit', function(event) {

    const formData = new FormData(this);
    document.getElementById('loginForm').reset();
    event.preventDefault();
    // Enviar el formulario a través de AJAX
    fetch('login', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Mostrar mensaje de éxito
        document.getElementById('mensaje').textContent = data;
        // Limpiar formulario
        this.reset();
    });
});