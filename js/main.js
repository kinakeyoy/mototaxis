// $(document).ready(function () {
//   console.log("ready");
//   $("#btnLogin").click(function () {
//     var username = $("#usernamelg").val()
//     var password = $("#passwordlg").val()
//     var form = $("#formlg");
//     consultarLogin(username);
//   })
// })

// function consultarLogin(username) {
//   $.ajax({
//     url: 'login.php',
//     type: 'POST',
//     data: {
//       username
//     },
//     success: function (data) {
//       var resultado = '';
//       console.log(data);
//       data = JSON.parse(data);
//       if (data[0] == 'no encontrado') {
//         resultado = '<center><h1 class="btn btn-danger" class="w100 text-center">Error login, Verificar Datos</h1></center>';
//       } else {
//         resultado = '<center><h1 class="btn btn-danger" class="w100 text-center">Error login, Verificar Datos</h1></center>';
//       }
//       $('#resultado').html(resultado);
//     }
//   });
// }






// $(document).ready(function () {
//   $("#btnLogin").click(function () {
//     let formularioLogin = $("#formlg").serialize();
//     $.ajax({
//       url: 'login.php',
//       type: 'POST',
//       data: formularioLogin
//     }).done(function (datosLogin) {
//       console.log(datosLogin);
//     })
//   })
// });





$(document).ready(function () {
  $("#btnLogin").click(function () {
    let formulario = $("#formlg").serialize();
    $.ajax({
      url: 'login.php',
      type: 'POST',
      data: formulario
    }).done(function (datos) {
      let data = JSON.parse(datos)[0];
      // console.log('Datos del uusario', data);
      let formData = formulario.split("=");
      let formData2 = formData[1].split("&")

      let pass = formData[2];
      let usuario = formData2[0]
      let valor = false;
      // console.log('user', usuario);
      // console.log('pass', formData);
      // console.log(datos.length)
      for (let i = 0; i < JSON.parse(datos).length; i++) {
        if (usuario == JSON.parse(datos)[i].nom_usuario && pass == JSON.parse(datos)[i].Pass) {
          valor = true;
          break;
        } else {
          valor = false;
        }
      }

      if (valor) {
        window.location.href = "sadmin.html";
        console.log(valor);
      } else {
        // alert('Usuario inválido');
        swal("ERROR !!", "Usuario/Password inválido(s)", "error");
      }
    })
    // $("#nombre").val("");
    // $("#edad").val("");
  });
});