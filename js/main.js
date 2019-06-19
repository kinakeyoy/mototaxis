$(document).ready(function () {
  $("#btnLogin").click(function () {
    let formulario = $("#formlg").serialize();
    $.ajax({
      url: "login.php",
      type: "POST",
      data: formulario
    }).done(function (datos) {
      let data = JSON.parse(datos)[0];
      // console.log('Datos del uusario', data);
      let formData = formulario.split("=");
      let formData2 = formData[1].split("&");
      let pass = formData[2];
      let usuario = formData2[0];
      let valor = false;
      let perfil = 0;
      console.log("user", usuario);
      console.log("pass", formData);
      console.log(datos.length);
      for (let i = 0; i < JSON.parse(datos).length; i++) {
        if (
          usuario == JSON.parse(datos)[i].nom_usuario &&
          pass == JSON.parse(datos)[i].Pass
        ) {
          perfil = JSON.parse(datos)[i].id_perfil;
          localStorage.setItem("perfil", perfil);
          console.log("perfil ", perfil);
          valor = true;
          break;
        } else {
          valor = false;
        }
      }

      if (valor == true && perfil == 1) {
        window.location.href = "sadmin.php";
        console.log("Valor: ", valor);
        console.log("perfil ", perfil);
      } else if (valor == true && perfil == 2) {
        window.location.href = "admin3.php";
        console.log("Valor: ", valor);
        console.log("perfil ", perfil);
      } else if (valor == true && perfil == 3) {
        window.location.href = "encuestador1.php";
        console.log("Valor: ", valor);
        console.log("perfil ", perfil);
      } else {
        // alert('Usuario inválido');
        swal("ERROR !!", "Usuario/Password inválido(s)", "error");
        console.log("Valor: ", valor);
        console.log("perfil ", perfil);
      }
    });
    // $("#nombre").val("");
    // $("#edad").val("");
  });
});