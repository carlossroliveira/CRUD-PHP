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

      <div class="col-12 background__One">
        <section class="container__one-main page__listarOne">
          <div class="container__one">
            <a class="container__one__child" href="index.php">
              <i class="fa fa-plus-square" aria-hidden="true"></i>
              Cadastrar</a>
          </div>

          <div>
            <a class="container__two__child" href="_list_people.php">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
              Listar</a>
          </div>
        </section>
      </div>

      <div class="col-12 background__two page__listarTwo">

        <div class="title__main">
          <h1>Listar de Pessoas</h1>
        </div>

        <table class="table table-dark table__main">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">Data-Nascimento</th>
              <th scope="col">RG</th>
              <th scope="col">CPF</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Carlos Oliveira</td>
              <td>03-05-0000</td>
              <td>13.000.000-13</td>
              <td>111.222.333-45</td>
              <td>
                <div>
                  Editar<i class="fa fa-pencil-square" aria-hidden="true"></i>
                </div>

                <div>
                  Deleta<i class="fa fa-trash" aria-hidden="true"></i>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

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