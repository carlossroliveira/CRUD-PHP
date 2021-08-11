const elementSend = document.querySelector("[data-send");
const elementName = document.querySelector("[data-nome");
const elementDate = document.querySelector("[data-date");
const elementRg = document.querySelector("[data-rg");
const elementCpf = document.querySelector("[data-cpf");

function validar(e) {
  const date = elementDate.value;
  if (date === "") {
    e.preventDefault();
    const Toast = Swal.mixin({
      toast: true,
      position: "top-start",
      showConfirmButton: false,
      timer: 2000,
      timerProgressBar: true,
    });
    Toast.fire({
      icon: "error",
      title: "Preencha data!",
    });
  }

  const nome = elementName.value;

  if (nome === "") {
    e.preventDefault();
    const Toast = Swal.mixin({
      toast: true,
      position: "top-start",
      showConfirmButton: false,
      timer: 2000,
      timerProgressBar: true,
    });
    Toast.fire({
      icon: "error",
      title: "Preencha seu nome!",
    });
  }
}

function mascaraRG() {
  if (elementRg.value.length == 2 || elementRg.value.length == 6) {
    elementRg.value += ".";
  } else if (elementRg.value.length == 10) {
    elementRg.value += "-";
  }
}

function mascaraCPF() {
  if (elementCpf.value.length == 3 || elementCpf.value.length == 7) {
    elementCpf.value += ".";
  } else if (elementCpf.value.length == 11) {
    elementCpf.value += "-";
  }
}

elementSend.addEventListener("click", validar);
elementCpf.addEventListener("keyup", mascaraCPF);
elementRg.addEventListener("keyup", mascaraRG);
