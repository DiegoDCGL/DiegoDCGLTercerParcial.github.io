// Obtener el elemento donde se mostrará el año
var yearElement = document.getElementById('year');

// Obtener el año actual
var year = new Date().getFullYear();

// Mostrar el año actual en el elemento
yearElement.textContent = year;
