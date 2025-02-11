$(document).ready(function (){
        var funcion;
        $.validator.setDefaults({
          submitHandler: function () {
                let username = $('#username').val();
                let pass = $('#pass').val();
                let nombres = $('#nombres').val();
                let apellidos = $('#apellidos').val();
                let email = $('#email').val();
                let telefono = $('#telefono').val();

                funcion = "registrar_usuario";
                $.post('../Controllers/UsuarioController.php',{username,pass,nombres,apellidos,email,telefono,funcion},(response)=>{
                    response = response.trim();
                    if(response == "success"){
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "La cuenta se ha registrado correctamente",
                            showConfirmButton: false,
                            timer: 2500
                          }).then(function(){
                            $('#form-register').trigger('reset');
                            location.href = '../Views/login.php';
                          })
                    }
                    else{
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Hubo conflicto al registrarse",
                            footer: '<a href="#">Why do I have this issue?</a>'
                          });
                    }
                });
            }   
        });
        jQuery.validator.addMethod("usuario_existente", 
            function(value,element){
                let funcion = "verificar_usuario";
                let bandera;
               $.ajax({
                    type: "POST",
                    url: "../Controllers/UsuarioController.php",
                    data: 'funcion='+funcion+'&&value='+value,
                    async:false,
                    success: function(response){
                        if(response == "success"){
                            bandera = false;
                        }else{
                            bandera = true;
                        }
                    }
               })
                return bandera;
            },"*Este usuario ya está en uso");

        jQuery.validator.addMethod("letras", 
                function(value,element){
                    return /^[A-Za-z]+$/.test(value);
                }
            ,"*Este campo solo permite letras");

        $('#form-register').validate({
          rules: {
              nombres:{
                  required:true,
                  letras: true
              },
              apellidos:{
                  required:true,
                  letras: true
              },
              username:{
                  required: true,
                  minlength: 4,
                  maxlength: 20,
                  usuario_existente: true
              },
              pass:{
                  required: true,
                  minlength: 8,
                  maxlength: 20,
              },
              pass_repeat: {
                  required: true,
                  equalTo: "#pass"            
              },
            email: {
              required: true,
              email: true,
            },
            telefono:{
              required: true,
              digits: true,
              minlength: 8,
              maxlength: 8
            },
            password: {
              required: true,
              minlength: 5
            },
            terms: {
              required: true
            },
          },
      
          messages: {
              nombres:{
                  required:"*Este campo es obligatorio"
              },
              apellidos:{
                  required:"*Este campo es obligatorio"
              },
              username: {
                  required: "*Este campo es obligatorio",
                  minlength: "*El usuario debe ser de mínimo 4 caracteres",
                  maxlength: "*El usuario debe ser de máximo 20 caracteres"
              },
              pass: {
                  required: "*Este campo es obligatorio",
                  minlength: "*La contraseña debe ser de mínimo 8 caracteres",
                  maxlength: "*La contraseña debe ser de máximo 20 caracteres"
              },
              pass_repeat: {
                  required: "Este campo es obligatorio",
                  equalTo: "La contraseña no coincide con la primera"            
              },
            email: {
              required: "Este campo es obligatorio",
              email: "Ingrese un correo válido"
            },
            telefono:{
              required: "Este campo es obligatorio",
              digits: "El teléfono solo está compuesto de numeros",
              maxlength: "*El teléfono debe ser de solo 8 numeros",
              minlength: "*El teléfono debe ser de solo 8 numeros",
            },
            password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 5 characters long"
            },
            terms: "Por favor, acepte la condiciones"
          },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
            $(element).removeClass('is-valid');
      
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
            $(element).addClass('is-valid');
      
          }
    });
});