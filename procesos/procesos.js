function iniciar_sesion() {
  $.ajax({  
    type: "POST",
    url: "Php/iniciar_sesion.php",
    data: $('#formularioini').serialize(),
    success:function(r) {
      console.log(r);
      if (r>0) {
        $('#formularioini')[0].reset();
      } else {
        swal("¡Error al ingresar!", "identificacion y/o contraseña, incorrectos", "error");
      }
    }
    
  });
  return false;
}
