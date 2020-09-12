function insertarDatos() {
  $.ajax({
    type: "POST",
    url: "../php/registrarse.php",
    data: $("#formulario").serialize(),
    success: function (r) {
      if (r == 1) {
        $("#formulario")[0].reset();
        swal("exito", ":D", "success");
      } else {
        swal("error", ":D", "error");
      }
    },
  })