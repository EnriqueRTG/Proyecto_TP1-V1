// Obtener la URL de la página actual
var url = window.location.href;

// Obtener todos los enlaces de la navbar
var links = document.querySelectorAll('.nav-link');

// Recorrer todos los enlaces de la navbar
for (var i = 0; i < links.length; i++) {
  // Verificar si el enlace actual es la página activa
  if (links[i].href === url) {
    // Agregar la clase "active" al elemento de la lista del menú correspondiente
    links[i].parentNode.classList.add('active');
  }
}
