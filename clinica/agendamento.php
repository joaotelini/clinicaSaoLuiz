<?php

  include_once '../Conexao/departamentoDAO.php';

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
      <div id="message_erro"></div>
    <form method="post" class="row g-3" id="insertAgend">

      <div class="col-md-6">
        <label for="cpf_paciente" class="form-label">CPF:</label>
        <input type="text" class="form-control" name="cpf" id="cpf_paciente">
        <div id="message_cpf"></div>
      </div>

      <div class="col-md-6">
        <label for="departamento" class="form-label">Departamento:</label>
        <select name="departamento" onchange="listarDepartamento(this.value), listarServico(this.value)" class="form-control" id="departamento">
          <option value="0"></option>
          <?php
            foreach ($depInfo as $depart) {
              echo "<option value='".$depart['id_departamento']."'>".$depart['nome']."</option>";
            }
          ?>
        </select>
        <div id="message_departamento"></div>
      </div>

      <div class="col-md-6" id="especialista">
      <label for="especialista" class="form-label">Especialista:</label>
        <select name="especialista" class="form-control" id="selectEspecialista">
          <option value="0"></option>
        </select>
        <div id="message_especialista"></div>
      </div>

      <div class="col-md-6" id="servico">
      <label for="servico" class="form-label">Serviço:</label>
        <select name="servico" onchange="verData()"  class="form-control" id="selectServico">
          <option value="0"></option>
        </select>
        <div id="message_servico"></div>
      </div>

      <div class="col-md-6" id="data">
      <label for="data" class="form-label">Data:</label>
        <input class="form-control" onchange="verData()" type="date" name="data" id="inputData">
        <div id="message_date"></div>
      </div>

      <div class="col-md-6" id="horario">
      <label for="horario" class="form-label">Horario:</label>
        <select name="horario" onchange="verHorario(this.value)" class="form-control" id="selectHorario">
          <option value="0"></option>
        </select>
        <div id="message_horario"></div>
      </div>

      <div class="col-12">
        <button type="button" name="realAgend" class="btn btn-success" id="cadAgend">Agendar</button>
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
      function verData() {
          let d = document.getElementById('inputData');
          let esp = document.getElementById('selectEspecialista');
          let servico = document.getElementById('selectServico');

          $.ajax({
            url: '../Controller/verData.php',
            method: 'POST',
            data: {data: d.value, especialista: esp.value},
            dataType: 'json'
          }).done(function (result) {
            if (result.length > 0) {
              // return true;
              $('#message_date').empty();
              $('#message_date').prepend("<div class='alert alert-success mt-3' role='alert'>Data Disponível</div>");
            } else {
              $('#message_date').empty();
              $('#message_date').prepend("<div class='alert alert-danger mt-3' role='alert'>Data Indisponível</div>");
              $('#selectHorario').empty();
              $('#selectHorario').prepend("<option value='0'></option>");
              // return false;
            }
          });

          listHorario(d.value, esp.value, servico.value);

      }

      function listHorario(data, especialista, servico){
            $.ajax({
              url: '../Controller/verHorario.php',
              method: 'POST',
              data: {data: data, especialista: especialista, servico: servico},
              dataType: 'json'
            }).done(function (result){
                // console.log(result);
                $('#selectHorario').empty();
                $('#selectHorario').prepend("<option value='0'></option>");
                for (let i = 0; i < result.length; i++) {
                  $('#selectHorario').prepend("<option value='"+ result[i] +"'>"+ result[i] +"</option>");
                }
            });
          }

          function verCpf(cpf){
              let valor;
              $.ajax({
                url: '../Controller/verCPF.php',
                method: 'POST',
                data: {cpf: cpf},
                dataType: 'json'
              }).done(function (result){
                if (result == "CPF não cadastrado!") {
                  $('#message_cpf').empty();
                  $('#message_cpf').prepend("<div class='alert alert-danger mt-3'>"+ result +"</div>");
                  valor = false;
  
                } else {
                  $('#message_cpf').empty();
                  valor = true;
                }
              });
              return valor;
            } 

          function verHorario(horario) {
              let data = document.getElementById('inputData');
              let servico = document.getElementById('selectServico');
              let esp = document.getElementById('selectEspecialista');
              $.ajax({
                url: '../Controller/verificaHorario.php',
                method: 'POST',
                data: {horario: horario, data: data.value, servico: servico.value, especialista: esp.value},
                dataType: 'json'
              }).done(function (result){
                if (result == "Horário Indispovível") {
                  $('#message_horario').empty();
                  $('#message_horario').prepend("<div class='alert alert-danger mt-3' role='alert'>"+ result +"</div>");
                } else if (result == "Horário Disponível"){
                  $('#message_horario').empty();
                  $('#message_horario').prepend("<div class='alert alert-success mt-3' role='alert'>"+ result +"</div>");
                }
              });
          }
          

          function validaCampos(cpf, dep, esp, ser, data, hora) {
            if ((cpf == "") || (dep == "") || (esp == "") || (ser == "") || (data == "") || (hora == "0") || (hora == "")) {

              $('#message_erro').empty();
              $('#message_erro').prepend("<div class='alert alert-danger mt-3'>Preencha todos os campos</div>");

              return false;

          } else {
            $('#message_erro').empty();
            return true;
          }
        }

         $('#cadAgend').click(function (){
            let cpf = $('#cpf_paciente').val();       
            let dep = $('#departamento').val();       
            let esp = $('#selectEspecialista').val();       
            let ser = $('#selectServico').val();       
            let data = $('#inputData').val();       
            let hora = $('#selectHorario').val();    

            let verificaCampos = validaCampos(cpf, dep, esp, ser, data, hora);
            let verificaCpf = verCpf(cpf);

            if (verificaCampos){
              $.ajax({
                url: '../Controller/realizaAgendamento.php',
                method: 'POST',
                data: {cpf: cpf, departamento: dep, especialista: esp, servico: ser, data: data, horario: hora},
                dataType: 'json'
              }).done(function (result) {
                // console.log(result);
                if (result == "Horário Indispovível"){
                  $('#message_horario').empty();
                  $('#message_horario').prepend("<div class='alert alert-danger mt-3' role='alert'>"+ result +"</div>");
                } else if (result == "Erro! Verifique se os dados foram digitados corretamente") {
                  $('#message_erro').empty();
                  $('#message_erro').prepend("<div class='alert alert-danger mt-3' role='alert'>"+ result +"</div>");
                } else if (result = "Consulta agendada com sucesso!"){
                  $('#message_erro').empty();
                  $('#message_horario').empty();
                  $('#message_date').empty();
                  $('#insertAgend').trigger("reset");
                  $('#message_erro').prepend("<div class='alert alert-success mt-3' role='alert'>"+ result +"</div>");
                  setTimeout(() => {
                    $('#message_erro').fadeOut('Slow');
                  }, 2000);
                  setTimeout(() => {
                    location.reload();
                  }, 2000);
                }
              });
            } else {
              console.log("não funcionando");
            }           
         })
    </script>
    <!-- Template Main JS File -->
  </body>
  </html>