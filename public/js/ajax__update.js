$(document).ready(function () {
  $(".form_update").submit(function () {
    $.ajax({
      url: "php/_update__people.php",
      type: "POST",
      data: $(".form_update").serialize(),

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
          title: "Dados Alterados",
        });
        setTimeout(function () {
          $(".form_update")[0].reset();
        }, 2000);
      },
    });

    return false;
  });
});