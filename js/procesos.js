//funcion iniciar sesion
jQuery(document).on("submit", "#formulario", function (event) {
  event.preventDefault();
  jQuery
    .ajax({
      url: "Php/iniciar_sesion.php",
      type: "POST",
      dataType: "json",
      data: $(this).serialize(),
      beforeSend: function () {
        $(".ing").val("Validando...");
      },
    })
    .done(function (respuesta) {
      console.log(respuesta);
      if (!respuesta.error) {
        if (respuesta.tipo == 1) {
          location.href = "administrador.php";
        } else if (respuesta.tipo == 2) {
          location.href = "cliente.php";
        }
      } else {
        swal(
          "hubo un error al ingresar",
          "usuario y/o clave incorrectos",
          "error"
        );
        $(".ing").val("Ingresar");
      }
    })
    .fail(function (resp) {
      console.log(resp.responseText);
    })
    .always(function () {
      console.log("complete");
    });
});

//funcion de registrarse
jQuery(document).on("submit", "#formregistro", function (event) {
  event.preventDefault();
  jQuery
    .ajax({
      url: "Php/registrarse.php",
      type: "POST",
      dataType: "json",
      data: $(this).serialize(),
      beforeSend: function () {
        $(".reg").val("Validando...");
      },
    })
    .done(function (respuesta) {
      console.log(respuesta);
      if (!respuesta.error) {
        if (respuesta.validar == "unico") {
          $(".reg").val("Registrarse");
          location.href = "iniciar_sesion.php";
        } else if (respuesta.validar == "repetido") {
          $(".reg").val("Registrarse");
          swal(
            "hubo un error al registrarse",
            "el nombre de usuario ya existe",
            "error"
          );
        }
      } else {
        var error = "";
        if (respuesta.validar == "usuario corto") {
          error =
            "por su seguridad el nombre de usuario debe tener al menos 5 caracteres.";
          document.querySelector(".nofuerte").innerText = error;
          console.log("ususario corto");
        }
        error = "";
        if (respuesta.validar == "nocoinciden") {
          swal(
            "hubo un error al registrarse",
            "las claves no coinciden",
            "error"
          );
          $(".reg").val("Registrarse");
        } else if (respuesta.validar == "muy corta") {
          $(".reg").val("Registrarse");
          console.log("menos de 8");
          error =
            "por su seguridad la clave debe tener al menos mas de 8 caracteres.";
          document.querySelector(".nofuerte").innerText = error;
        }
        error = "";
        if (respuesta.validar == "telefono invalido") {
          $(".reg").val("Registrarse");
          console.log("telefono invalido");
          error = "Digite un telefono valido.";
          document.querySelector(".nofuerte").innerText = error;
        }
      }
    })
    .fail(function (resp) {
      console.log(resp.responseText);
    })
    .always(function () {});
});

//funcion insertar productos
jQuery(document).on("submit", "#form_insertar", function (event) {
  event.preventDefault();
  // se instacia la funcion que sirve para subir img
  var postData = new FormData(this);
  jQuery
    .ajax({
      url: "agregar_producto.php",
      type: "POST",
      dataType: "json",
      // propiedades requeridas para usar la funcion, form-data
      data: postData,
      processData: false,
      contentType: false,
      success: function (data, textStatus, jqXHR) {
        $("#pro_pix img").last().show();
        $("#pro_pix img").first().hide();
        $("#pro_pix h6").text(data);
      },
      beforeSend: function () {
        $(".agg").val("Validando...");
      },
    })
    .done(function (respuesta) {
      console.log(respuesta);
      if (!respuesta.error) {
        $(".agg").val("agregar producto");
        if (respuesta.validar == "insertado") {
          swal("producto agregado con exito", ":)", "success");
        }
      } else {
         if(respuesta.validar=="repetido"){
          swal("hubo un error al agregar el producto", "este producto ya existe", "error");
        }
        $(".agg").val("agregar producto");
      }
    })
    .fail(function (resp) {
      console.log(resp.responseText);
    })
    .always(function () {
      console.log("complete");
    });

  $("#imagen1").change(function () {
    var file = this.files[0];
    var imagefile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (
      !(imagefile == match[0] || imagefile == match[1] || imagefile == match[2])
    ) {
      alert("Please select a valid image file (JPEG/JPG/PNG).");
      $("#file").val("");
      return false;
    }
  });
  $("#imagen2").change(function () {
    var file = this.files[0];
    var imagefile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (
      !(imagefile == match[0] || imagefile == match[1] || imagefile == match[2])
    ) {
      alert("Please select a valid image file (JPEG/JPG/PNG).");
      $("#file").val("");
      return false;
    }
  });
  $("#imagen3").change(function () {
    var file = this.files[0];
    var imagefile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (
      !(imagefile == match[0] || imagefile == match[1] || imagefile == match[2])
    ) {
      alert("Please select a valid image file (JPEG/JPG/PNG).");
      $("#file").val("");
      return false;
    }
  });
});

//funcion de filtrado de productos
$(document).ready(function () {
  $("#mujer").click(function (e) {
    e.preventDefault();
    var sistema = getUrl();
    location.href = sistema + "filtrar_productos.php?generos=mujer";
  });

  //funcion  para filtrar productos de hombre
  $("#hombre").click(function (e) {
    e.preventDefault();
    var sistema = getUrl();
    location.href = sistema + "filtrar_productos.php?generos=hombre";
  });
  // funcion para filtrar productos mas comprados
  $("#mas_comprados").click(function (e) {
    e.preventDefault();
    var sistema = getUrl();
    location.href = sistema + "filtrar_productos.php?economicos=mas_comprados";
  });
  $("#mas_baratos").click(function (e) {
    e.preventDefault();
    var sistema = getUrl();
    location.href = sistema + "filtrar_productos.php?economicos=mas_baratos";
  });
});

function getUrl() {
  var loc = window.location;
  var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf("/") + 1);
  return loc.href.substring(
    0,
    loc.href.length -
      ((loc.pathname + loc.search + loc.hash).length - pathName.length)
  );
}
