
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
