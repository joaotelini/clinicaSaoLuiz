<?php
  include_once '../Conexao/pacienteDAO.php';
  include_once '../Conexao/departamentoDAO.php';

  $pac = new PacienteDAO();
  $pacienteInfo = $pac->Listar();

  $dep = new DepartamentoDAO();
  $depInfo = $dep->Listar();

  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agendamento - Clinica São Luiz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- <link href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbHlXMnJLa1lPVEMyZVV4SW9kRGkwOXBwUlVQQXxBQ3Jtc0tubnFCUEE4dE4xaUp3UzN0ZFZ6UXlBREtGNFg1NmpGVzVUQVA5TFdmRTJ0MVhaSHh0UkZpcTgwTmFPeVdiX2hDbzNfUktWajBkSVNvZUhvODdrcmE5RGlwdHFYa1QtdjJ1T3YzNGFXLXY4cXBNMFNmaw&q=https%3A%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DRoboto" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Clinica São Luiz</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Serviços</a></li> -->
          <li><a class="nav-link scrollto" href="#departments">Departamentos</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Funcionários</a></li>  
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          <li><a class="nav-link scrollto" href="cadastro.php">Cadastre-se</a></li>
          <li><a class="nav-link scrollto" href="agendamento.php">Realizar Agendamento</a></li>
           <!--Deixei sem destaque pq nao ficava responsivo-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Agendamento</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="container">
    <form method="post" action="../Controller/realizaAgendamento.php" class="row g-3">

      <div class="col-md-6">
        <label for="paciente" class="form-label">Nome Completo:</label>
        <select name="paciente" class="form-control" id="">
          <option value="0"></option>
          <?php
            foreach ($pacienteInfo as $paciente) {
              echo "<option value='".$paciente['id_paciente']."'>".$paciente['nome_completo']."</option>";
            }
          ?>
        </select>
      </div>

      <div class="col-md-6">
        <label for="departamento" class="form-label">Departamento:</label>
        <select name="departamento" onchange="verDepartamento(this.value), verServico(this.value)" class="form-control" id="departamento">
          <option value="0"></option>
          <?php
            foreach ($depInfo as $depart) {
              echo "<option value='".$depart['id_departamento']."'>".$depart['nome']."</option>";
            }
          ?>
        </select>
      </div>

      <div class="col-md-6" id="especialista">
      <label for="especialista" class="form-label">Especialista:</label>
        <select name="especialista" class="form-control" id="selectEspecialista">
          <option value="0"></option>
        </select>
      </div>

      <div class="col-md-6" id="servico">
      <label for="servico" class="form-label">Serviço:</label>
        <select name="servico"  class="form-control" id="selectServico">
          <option value="0"></option>
        </select>
      </div>

      <div class="col-md-6" id="data">
      <label for="data" class="form-label">Data:</label>
        <input class="form-control" onchange="verData(this.value)" type="date" name="data" id="inputData">
        <div id="message_date"></div>
      </div>

      <div class="col-md-6" id="horario">
      <label for="horario" class="form-label">Horario:</label>
        <select name="horario" class="form-control" id="selectHorario">
          <option value="0"></option>
        </select>
      </div>

      <div class="col-12">
        <button type="submit" name="action" class="btn btn-success">Realizar Agendamento</button>
      </div>
    </form>
  </div>

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-6 col-md-6 footer-contact">
              <h3>Clinica São Luiz</h3>
              <p>
                Rua Rui Barbosa<br>
                Itapira, SP<br>
                Brasil <br><br>
                <strong>Celular:</strong> +55 (19) 99526-9560<br>
                <strong>Email:</strong> contato@clinicasaoluiz.com<br>
              </p>
            </div>
  
            <div class="col-lg-6 col-md-6 footer-links">
              <h4>Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre</a></li>
                <!-- <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li> -->
                <li><i class="bx bx-chevron-right"></i> <a href="#departments">Departamento</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contato</a></li>
              </ul>
            </div>
    </footer><!-- End Footer -->
  
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./javascript/jQuery/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
      function verData(d) {

          let esp = document.getElementById('selectEspecialista');

          $.ajax({
            url: '../Controller/verData.php',
            method: 'POST',
            data: {data: d, especialista: esp.value},
            dataType: 'json'
          }).done(function (result) {
            if (result.length > 0) {
              $('#message_date').prepend("<div class='alert alert-success mt-1' role='alert'>Data Disponivel</div>");
            } else {
              $('#message_date').prepend("<div class='alert alert-danger mt-1' role='alert'>Data Indisponivel</div>");
            }
          })
        //   $.post("../Controller/verData.php", {value: d, especialista: esp.value}, function(result){
        //   $("#data_message").html(result);
        //   console.log(result)
        // });

      }

    </script>
    <!-- Template Main JS File -->
    
    <?php
      if (!empty($_SESSION['cadastro_sucesso'])) {
        echo "<script>alert('".$_SESSION['cadastro_sucesso']."');
          location.reload();
        </script>";
        unset($_SESSION['cadastro_sucesso']);
      }
    ?>
    
  </body>
  </html>