// Mejor validación visual moderna
function validateForm() {
    let nombre = document.getElementById("nombre");

    if (!nombre || nombre.value.trim() === "") {
        Swal.fire({
            icon: "warning",
            title: "Campo vacío",
            text: "El nombre no puede estar vacío.",
            background: "rgba(15, 23, 42, 0.9)",
            color: "#fff"
        });
        return false;
    }

    return true;
}
