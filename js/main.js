$(document).ready(function () {
  console.log("ready");
  $("#formlg").submit(function () {
    event.preventDefault();

    $.ajax({
        url: 'login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function () {

        }
      })
      .done(function (respuesta) {
        console.log(respuesta);
      })
      .fail(function (resp) {
        console.log("fail" + resp.responseText);
      })
      .always(function () {
        console.log("complete");
      });
  })
});