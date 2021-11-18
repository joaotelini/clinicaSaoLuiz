<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - Clinica São Luiz</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link
        href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbHlXMnJLa1lPVEMyZVV4SW9kRGkwOXBwUlVQQXxBQ3Jtc0tubnFCUEE4dE4xaUp3UzN0ZFZ6UXlBREtGNFg1NmpGVzVUQVA5TFdmRTJ0MVhaSHh0UkZpcTgwTmFPeVdiX2hDbzNfUktWajBkSVNvZUhvODdrcmE5RGlwdHFYa1QtdjJ1T3YzNGFXLXY4cXBNMFNmaw&q=https%3A%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DRoboto"
        rel="stylesheet">

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
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- =======================================================
  * Template Name: Medilab - v4.1.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">Clinica São Luiz</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <!-- Tirei pq nao ficava responsivo -->

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
                    <li><a class="nav-link scrollto" href="./login.php">Login</a></li>
                    <!--Deixei sem destaque pq nao ficava responsivo-->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>

    <main>

        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                    <form method="POST" action="../Controller/login.php" class="form-container">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Login</button>
                            <a href="./index.php" class="btn btn-danger" type="button">Voltar</a>
                        </div>
                    </form>
                </section>
            </section>
        </section>

    </main>
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
    </footer>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>