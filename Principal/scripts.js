document.addEventListener('DOMContentLoaded', function() {
    const createForm = document.getElementById('createForm');
    const updateForm = document.getElementById('updateForm');

    if (createForm) {
        createForm.addEventListener('submit', function(event) {
            if (!validateForm(createForm)) {
                event.preventDefault();
            }
        });
    }

    if (updateForm) {
        updateForm.addEventListener('submit', function(event) {
            if (!validateForm(updateForm)) {
                event.preventDefault();
            }
        });
    }

    function validateForm(form) {
        let valid = true;
        const nombreEm = form.nombreEm.value.trim();
        const desc = form.desc.value.trim();
        const direccion = form.direccion.value.trim();
        const telefono = form.telefono.value.trim();
        const email = form.email.value.trim();

        if (nombreEm === '') {
            alert('El nombre es obligatorio');
            valid = false;
        }
        if (desc === '') {
            alert('La descripción es obligatoria');
            valid = false;
        }
        if (direccion === '') {
            alert('La dirección es obligatoria');
            valid = false;
        }
        if (telefono === '' || !/^\d{10,13}$/.test(telefono)) {
            alert('El teléfono debe tener entre 10 y 13 dígitos y no contener letras');
            valid = false;
        }
        if (email === '' || !/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
            alert('El email no es válido');
            valid = false;
        }

        return valid;
    }
});
