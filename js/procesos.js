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

$(document).ready(function () {
  $("#mujer").click(function (e) {
    e.preventDefault();
    var sistema = getUrl();
    location.href=sistema+'filtrar_productos.php?generos=2';
  });
});
$(document).ready(function () {
  $("#hombre").click(function (e) {
    e.preventDefault();
    var sistema = getUrl();
    location.href=sistema+'filtrar_productos.php?generos=1';
  });
});

function getUrl() {
  var loc = window.location;
  var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf("/") + 1);
  return loc.href.substring(
    0,
    loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length)
  );
}
