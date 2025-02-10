$(document).ready(function(){
    var funxion;

    $('#form-login').submit(e=>{
        funcion = 'login';
        let user = $('#user').val();
        let pass = $('#pass').val();
        $.post('../Controllers/UsuarioController.php',{user,pass,funcion},(response)=>{
            if(response == "Logueado"){
                toastr.success("Se inició sesión correctamente");
            }
            else {
                toastr.error("Usuario o contraseña incorrecta");
            }
        })
        e.preventDefault();
    })
})



