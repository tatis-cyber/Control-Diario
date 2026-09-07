const actividadInput = document.getElementById("actividad");
const prioridadSelect = document.getElementById("prioridad");
const btnAgregar = document.getElementById("btnAgregar");
const listaActividades = document.getElementById("listaActividades");

btnAgregar.addEventListener("click", function () {
    const actividad = actividadInput.value.trim();
    const prioridad = prioridadSelect.value;

    if (actividad === "") {
        alert("Por favor, escribe una actividad.");
        return;
    }

    if (listaActividades.querySelector("p")) {
        listaActividades.innerHTML = "";
    }

    const nuevaActividad = document.createElement("div");

    nuevaActividad.innerHTML = `
        <p><strong>${actividad}</strong></p>
        <p>Prioridad: ${prioridad}</p>
        <hr>
    `;

    listaActividades.appendChild(nuevaActividad);

    actividadInput.value = "";
});
