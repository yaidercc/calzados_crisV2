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
          location.href="iniciar_sesion.php";

          //validar contraseña
          /* var errorClave = "";
          var errorTel = "";
          var contra = document.querySelector("#clave");
          var campoPass = document.querySelector("#clave").value;
          var campoReppass = document.querySelector("#repclave").value;
          if (campoPass.length < 8 && campoReppass.length < 8) {
            errorClave =
              "por su seguridad la clave debe tener: mas de 8 caracteres, al menos una mayuscula y al menos un caracter especial.";
            document.querySelector(".nofuerte").innerText = errorClave;
          } else {
            regex = /^(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ]/;
            if (!regex.test(contra.value)) {
              errorClave =
                "por su seguridad la clave debe tener: mas de 8 caracteres, al menos una mayuscula y al menos un caracter especial.";
              document.querySelector(".nofuerte").innerText = errorClave;
              errorClave="";
            }
          }

          //validar telefono
          telefono = document.querySelector("#tel").value;
          if (telefono.length < 7) {
            errorTel = " telefono invalido";
            numeral.className = "fas fa-circle";
            document.querySelector(".nofuerte").innerText = errorTel;
          } else {
            errorTel = "";
          }*/
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

jQuery(document).on("submit", "#formulario", function (event) {
  event.preventDefault();
  jQuery.ajax({
    url: "Php/iniciar_sesion.php",
    type: "POST",
    succes: function (r) {
      $("#seccion-pre");
    },
  });
});
