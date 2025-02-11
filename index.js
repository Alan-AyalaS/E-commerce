$(document).ready(function(){
    var funxion;
    verificar_sesion();

    function verificar_sesion(){
        funcion='verificar_sesion';
        $.post('./Controllers/UsuarioController.php',{funcion},(response)=>{
            console.log(response);
            if(response !=''){
                let sesion=JSON.parse(response);
                $('#nav_login').hide();
                $('#nav_register').hide();
                $('#usuario_nav').text(sesion.user + ' #'+sesion.id + " ");
                $('#avatar_nav').attr('src', 'Util/imgs/' + sesion.avatar);
                $('#avatar_menu').attr('src', './Util/imgs/' + sesion.avatar);
                $('#usuario_menu').text(sesion.user);
            }
            else {
                $('#nav_usuario').hide();
            }
        })
    }

})



