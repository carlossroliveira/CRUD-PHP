setTimeout(function () {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-start",
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
  });
  Toast.fire({
    icon: "success",
    title: "Deletando Pessoa!",
  });
});
