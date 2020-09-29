
jQuery(document).on('submit','#formulario',function(event){
  event.preventDefault();
  jQuery.ajax({
      url:'Php/iniciar_sesion.php',
      type:'POST',
      dataType:'json',
      data:$(this).serialize(),
      beforeSend:function(){
       $('.ing').val('Validando...');
      }
    })
    .done(function(respuesta){
      console.log(respuesta);
      if(!respuesta.error){
        if(respuesta.tipo==1){
          location.href="administrador.php";
        }else if(respuesta.tipo==2){
          location.href="cliente.php";
        }

      }else{
        swal("hubo un error al ingresar","usuario y/o clave incorrectos", "error");
        $('.ing').val('Ingresar');
      }
    })
    .fail(function(resp){
      console.log(resp.responseText);
    })
    .always(function(){
      console.log("complete");
  });
});


jQuery(document).on('submit','#formregistro',function(event){
  event.preventDefault();
  jQuery.ajax({
      url:'Php/registrarse.php',
      type:'POST',
      dataType:'json',
      data:$(this).serialize(),
      beforeSend:function(){
       $('.reg').val('Validando...');
      }
    })
    .done(function(respuesta){
      console.log(respuesta);
      if(!respuesta.error){
        if(respuesta.validar==1){
          console.log("1");
          $('.reg').val('Registrarse');
          //location.href="iniciar_sesion.php";
        }
      }else{
        if(respuesta.validar==404){
          console.log("2");
          swal("hubo un error al registrarse","las claves no coinciden", "error");
          $('.reg').val('Registrarse');
        }else{
          console.log("3");
          swal("hubo un error al registrarse","revisa tus datos e intentalo de nuevo", "error");
          $('.reg').val('Registrarse');
      }
        }
        
    })
    .fail(function(resp){
      console.log(resp.responseText);
    })
    .always(function(){
      console.log("complete");
  });
});
