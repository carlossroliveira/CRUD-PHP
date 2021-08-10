<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta author="author" content="Carlos Olivira">
  <!-- Title Start -->
  <title>System Crud</title>
  <!-- Style Bootstrap Start -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- Style Start -->
  <link rel="stylesheet" href="../style/main.css">
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
    <div class="row height">
      <div class="col-12 background__One _edit__one _idit--main">
        <section class="container__one-main page__listarOne _idit-main">
          <div>
            <a class="container__two__child btn-edit" href="../_list_people.php">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              Volta</a>
          </div>
        </section>
      </div>
      <div class="col-12 background__two page__listarTwo _edit__two">
        <div class="title__main">
          <h1>Cadastro Deletado</h1>
        </div>
        <table class="table table-dark table__main">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">Data-Nascimento</th>
              <th scope="col">RG</th>
              <th scope="col">CPF</th>

            </tr>
          </thead>

          <!-- PHP -->
          <?php

          include './connection.php';

          $id = $_GET['id'];

          $search = mysqli_query($con, "SELECT * FROM `table_people` WHERE id_bank = $id");

          while ($array = mysqli_fetch_array($search)) {

            $id_bank = $array['id_bank'];
            $fullName = $array['name_bank'];
            $fullDate = $array['date_back'];
            $fullRG =   $array['rg_bank'];
            $fullCPF =  $array['cpf_bank'];

            $dateFull = strtotime($fullDate);
            $dateBrazil = date('d-m-Y', $dateFull);

          ?>

            <tr>
              <th scope="row"><?= $id_bank ?></th>
              <td><?= $fullName ?></td>
              <td><?= $dateBrazil  ?></td>
              <td><?= $fullRG ?></td>
              <td><?= $fullCPF ?></td>

            <?php } ?>

            </tr>
        </table>

      </div>
    </div>
  </section>

<!-- PHP -->
  <?php
  mysqli_query($con, "DELETE FROM `table_people` WHERE id_bank = $id");
  ?>

  <!-- sweetalert2 Start -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Bootstrap Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
  </script>
  <script src="../js/mesage.js"></script>

</body>
</html>