<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cadastro - Clinica São Luiz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbHlXMnJLa1lPVEMyZVV4SW9kRGkwOXBwUlVQQXxBQ3Jtc0tubnFCUEE4dE4xaUp3UzN0ZFZ6UXlBREtGNFg1NmpGVzVUQVA5TFdmRTJ0MVhaSHh0UkZpcTgwTmFPeVdiX2hDbzNfUktWajBkSVNvZUhvODdrcmE5RGlwdHFYa1QtdjJ1T3YzNGFXLXY4cXBNMFNmaw&q=https%3A%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DRoboto" rel="stylesheet">

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

  <!-- Busca CEP
  <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            // document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            // document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                // document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script> -->

    <!-- /*!
      *	Gerador e Validador de CPF v1.0.0
      *	https://github.com/tiagoporto/gerador-validador-cpf
      *	Copyright (c) 2014-2015 Tiago Porto (http://www.tiagoporto.com)
      *	Released under the MIT license
    */
  //   function CPF(){"user_strict";function r(r){for(var t=null,n=0;9>n;++n)t+=r.toString().charAt(n)*(10-n);var i=t%11;return i=2>i?0:11-i}function t(r){for(var t=null,n=0;10>n;++n)t+=r.toString().charAt(n)*(11-n);var i=t%11;return i=2>i?0:11-i}var n="CPF Inválido",i="CPF Válido";this.gera=function(){for(var n="",i=0;9>i;++i)n+=Math.floor(9*Math.random())+"";var o=r(n),a=n+"-"+o+t(n+""+o);return a},this.valida=function(o){for(var a=o.replace(/\D/g,""),u=a.substring(0,9),f=a.substring(9,11),v=0;10>v;v++)if(""+u+f==""+v+v+v+v+v+v+v+v+v+v+v)return n;var c=r(u),e=t(u+""+c);return f.toString()===c.toString()+e.toString()?i:n}}



  //   var CPF = new CPF();
  //   document.write(CPF.valida("123.456.789-00"));

  //   document.write("<br> Utilizando o proprio gerador da lib<br><br><br>");
  //   for(var i =0;i<40;i++) {
  //     var temp_cpf = CPF.gera();
  //     document.write(temp_cpf+" = "+CPF.valida(temp_cpf)+"<br>");
  //   }

  //   $("#input").keypress(function(){
  //   $("#resposta").html(CPF.valida($(this).val()));
  //   });

  //   $("#input").blur(function(){
  //     $("#resposta").html(CPF.valida($(this).val()));
  //   }); -->

  <!-- =======================================================
  * Template Name: Medilab - v4.1.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li><a class="nav-link scrollto" href="#departments">Departamentos</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Funcionários</a></li>  
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          <li><a class="nav-link scrollto" href="cadastro.html">Agendamento</a></li>
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
          <h2>Cadastro</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="container">
    <form method="GET" action="." class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nome Completo:</label>
        <input type="text" class="form-control" id="inputEmail4">
      </div><div class="col-md-6">
        <label for="inputEmail4" class="form-label">CPF:</label>
        <input type="text" data-id="NrCpf" class="form-control" id="NrCpf" maxlength="14">
        <!-- <input type="text" id="input" /><span id="resposta"></span> -->
      </div><div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email:</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div><div class="col-md-6">
        <label for="inputEmail4" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="inputEmail4">
      </div><div class="col-md-6">
        <label for="inputEmail4" class="form-label">Telefone/Celular:</label>
        <input type="number" class="form-control" id="inputEmail4">
      </div>
      
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">RG:</label>
        <input type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Data de Nascimento:</label>
        <input type="date" class="form-control" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputAddress" class="form-label">CEP:</label>
        <input type="number" class="form-control" id="cep" name="cep">
      </div>
      <div class="col-6">
        <label for="inputAddress2" class="form-label">Logradouro</label>
        <input type="text" class="form-control" name="lograduro">
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Número</label>
        <input type="number" class="form-control" name="numero">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <p class="pCadastro">Já tem uma conta? Clique <a href="login.html">aqui</a> para fazer o Login.</p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
  </body>
  </html>