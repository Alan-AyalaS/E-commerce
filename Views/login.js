$(document).ready(function(){
    var funxion;
    verificar_sesion();

    function verificar_sesion(){
        funcion='verificar_sesion';
        $.post('../Controllers/UsuarioController.php',{funcion},(response)=>{
            if(response !=''){
                location.href='../index.php';
            }
        })
    }

    $('#form-login').submit(e=>{
        funcion = 'login';
        let user = $('#user').val();
        let pass = $('#pass').val();
        $.post('../Controllers/UsuarioController.php',{user,pass,funcion},(response)=>{
            if(response == "Logueado"){
                toastr.success("Se inició sesión correctamente");
                location.href='../index.php';
            }
            else {
                toastr.error("Usuario o contraseña incorrecta");
            }
        })
        e.preventDefault();
    })
})



