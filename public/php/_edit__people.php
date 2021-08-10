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

    <div class="row">

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
          <h1>Pessoa Selecionada</h1>
        </div>


        <form class="form_update" method="post">
          <div class="btn__two-Main">
            <button type="submit" class="btn btn__two btn-edit">Atualizar
              <i class="fa fa-upload" aria-hidden="true"></i>
            </button>
          </div>
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

            <div class="mb-3">
              <label for="nome__label" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome__label" name="fullName" value="<?= $fullName ?>">
              <input type="text" class="form-control d-none" id="nome__label" name="id" value="<?= $id_bank ?>">
            </div>

            <div class="mb-3">
              <label for="data__label" class="form-label">Data</label>
              <input type="date" class="form-control" id="data__label" name="fullDate" value="<?= $dateBrazil ?>">
            </div>

            <div class="mb-3">
              <label for="rg__label" class="form-label">RG</label>
              <input type="text" class="form-control" id="rg__label" name="fullRG" value="<?= $fullRG ?>">
            </div>

            <div class="mb-3">
              <label for="cpf__label" class="form-label">CPF</label>
              <input type="text" class="form-control" id="cpf__label" name="fullCPF" value="<?= $fullCPF ?>">
            </div>



          <?php } ?>

        </form>







      </div>
    </div>
  </section>


  <!-- Bootstrap Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
  </script>
  <!-- JavaScript Start -->
  <script src="../js/ajax__update.js"></script>

</body>
</html>