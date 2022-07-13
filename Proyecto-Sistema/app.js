document.getElementById('formulario').addEventListener('submit', function(e) {

    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'))

    fetch('registrar.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('txt_idusuario').value = '';
            document.getElementById('txt_contraseña').value = '';
            document.getElementById('txt_rol').value = '';
            document.getElementById('txt_dni').value = '';
            document.getElementById('txt_nombre').value = '';
            document.getElementById('txt_tel').value = '';
            document.getElementById('txt_marca_s').value = '';
            alert('El usuario se ha registrado');
        } else {
            console.log(data);
        }

    });
});