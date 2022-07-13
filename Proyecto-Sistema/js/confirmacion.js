function confirmacion(e) {
    if (confirm("¿Eliminamos el registro?")){
        return true;
    } else {
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".tabla-item-link");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}