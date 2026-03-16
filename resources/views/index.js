function validarFormulario() {
    // Obtener los valores de los campos
    const nombre = document.getElementById('nombre');
    const correo = document.getElementById('correo');
    const telefono = document.getElementById('telefono');
    const comentarios = document.getElementById('comentarios');
    const pais = document.getElementById('pais');
    const intereses = document.querySelectorAll('input[name="interes"]:checked');
    
    // Validación para el nombre
    if (nombre.value.trim() === "") {
        nombre.classList.add("campo-invalido");
        document.getElementById('etiqueta-nombre').classList.add("etiqueta-invalida");
    } else {
        nombre.classList.remove("campo-invalido");
        nombre.classList.add("campo-valido");
        document.getElementById('etiqueta-nombre').classList.remove("etiqueta-invalida");
        document.getElementById('etiqueta-nombre').classList.add("etiqueta-valida");
    }

    // Validación para el correo
    const correoRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!correoRegex.test(correo.value.trim())) {
        correo.classList.add("campo-invalido");
        document.getElementById('etiqueta-correo').classList.add("etiqueta-invalida");
    } else {
        correo.classList.remove("campo-invalido");
        correo.classList.add("campo-valido");
        document.getElementById('etiqueta-correo').classList.remove("etiqueta-invalida");
        document.getElementById('etiqueta-correo').classList.add("etiqueta-valida");
    }

    // Validación para el teléfono
    const telefonoRegex = /^\d{10}$/;
    if (!telefonoRegex.test(telefono.value.trim())) {
        telefono.classList.add("campo-invalido");
        document.getElementById('etiqueta-telefono').classList.add("etiqueta-invalida");
    } else {
        telefono.classList.remove("campo-invalido");
        telefono.classList.add("campo-valido");
        document.getElementById('etiqueta-telefono').classList.remove("etiqueta-invalida");
        document.getElementById('etiqueta-telefono').classList.add("etiqueta-valida");
    }

    // Validación para los comentarios
    if (comentarios.value.trim() === "") {
        comentarios.classList.add("campo-invalido");
        document.getElementById('etiqueta-comentarios').classList.add("etiqueta-invalida");
    } else {
        comentarios.classList.remove("campo-invalido");
        comentarios.classList.add("campo-valido");
        document.getElementById('etiqueta-comentarios').classList.remove("etiqueta-invalida");
        document.getElementById('etiqueta-comentarios').classList.add("etiqueta-valida");
    }

    // Validación para el país
    if (pais.value === "") {
        pais.classList.add("campo-invalido");
    } else {
        pais.classList.remove("campo-invalido");
        pais.classList.add("campo-valido");
    }

    // Validación para los intereses (al menos uno seleccionado)
    if (intereses.length === 0) {
        alert("Debes seleccionar al menos un interés.");
        return false; // Detener el envío del formulario
    }

    // Si todos los campos son válidos, devolver true (el formulario se enviaría)
    return true;
}