$(document).ready(function () {
  $(".form_update").submit(function () {
    $.ajax({
      url: "_update__people.php",
      type: "POST",
      data: $(".form_update").serialize(),

      success: function () {
        const Toast = Swal.mixin({
          toast: true,
          position: "top-start",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
        });
        Toast.fire({
          icon: "success",
          title: "Dados Atualizados!",
        });
      },
    });

    return false;
  });
});
