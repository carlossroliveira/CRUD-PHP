/* $(document).ready(function () {
  $(".deletebtn").submit(function () {
    $.ajax({
      url: "_delete__people.php",
      type: "POST",
      data: $(".deletebtn").serialize(),

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
          title: "Deletando Dados!",
        });
        setTimeout(function () {
          $(".deletebtn")[0].reset();
        }, 2000);
      },
    });

    return false;
  });
}); */
