$(document).ready(function () {
  $(".form").submit(function () {
    $.ajax({
      url: "php/_create__people.php",
      type: "POST",
      data: $(".form").serialize(),

      success: function () {
        const Toast = Swal.mixin({
          toast: true,
          position: "bottom-start",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
        });
        Toast.fire({
          icon: "success",
          title: "Cadastro Enviado!",
        });
        setTimeout(function () {
          $(".form")[0].reset();
        }, 2000);
      },
    });

    return false;
  });
});
