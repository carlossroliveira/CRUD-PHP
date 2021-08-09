<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta author="author" content="Carlos Olivira">
  <!-- Title Start -->
  <title>System Crud</title>
  <!-- Style Bootstrap Start -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- Style Start -->
  <link rel="stylesheet" href="style/main.css">
  <!-- Favicon Start -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <!-- Icone -->
  <script src="https://kit.fontawesome.com/ebc6f6cdfd.js" crossorigin="anonymous"></script>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css2?family=Marko+One&display=swap" rel="stylesheet">
</head>

<body>


  <section class="container">

    <div class="row">

      <div class="col-3 background__One">
        <section class="container__one-main">
          <div class="container__one">
            <a class="container__one__child" href="index.html">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
              Cadastrar</a>
          </div>

          <div>
            <a class="container__two__child" href="_listar_pessoas.html">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
              Listar</a>
          </div>
        </section>
      </div>

      <div class="col-9 background__two">

        <div class="title__main">
          <h1>Cadastrar Pessoas</h1>
        </div>

        <form>

          <div class="mb-3">
            <label for="nome__label" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome__label" aria-describedby="nome"
              placeholder="Nome Completo">
          </div>

          <div class="mb-3">
            <label for="data__label" class="form-label">Data</label>
            <input type="date" class="form-control" id="data__label">
          </div>

          <div class="mb-3">
            <label for="rg__label" class="form-label">RG</label>
            <input type="number" class="form-control" id="rg__label" placeholder="Informe seu RG">
          </div>

          <div class="mb-3">
            <label for="cpf__label" class="form-label">CPF</label>
            <input type="number" class="form-control" id="cpf__label" placeholder="Informe seu CPF">
          </div>

          <div class="btn__two-Main">
            <button type="submit" class="btn btn__two">Enviar</button>
          </div>
        </form>

      </div>
    </div>
  </section>




  <!-- Bootstrap Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
  </script>
  <!-- JavaScript Start -->
  <script src="js/index.js"></script>
</body>
</html>