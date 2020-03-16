function verificaUsuario() {
    $.ajax({
        url: 'http://localhost/servidor/consultaUser.php',
        dataType: 'json',
        data: {
            usuario: $("#usuario").val(),
            senha: $("#senha").val()
        },
        success: function (r) {

        },
        error: function (e) {

        }
    })
}