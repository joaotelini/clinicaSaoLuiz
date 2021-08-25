<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                <div class="sidebar-brand-text mx-3">Clinica São Luiz</div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">

                <a class="nav-link" href="index.html">

                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <span>Página Inicial</span>

                </a>

            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">

                <a class="nav-link" href="agendamentos.html">

                    <i class="fas fa-fw fa-table"></i>

                    <span>Agendamentos</span>

                </a>

            </li>

            <li class="nav-item active">
                <a class="nav-link" href="departamentos.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Departamentos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="especialistas.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Especialistas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pacientes.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pacientes</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="servicos.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Serviços</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="horario.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Horários</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador(a)</span>
                                <img class="assets/img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                        </a>
                        
                    <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                            </a>
                        </div>
                    </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <main id="main">

                <!-- ======= Breadcrumbs Section ======= -->
                <section class="breadcrumbs">
                
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Gerenciamento dos Departamentos</h2>
                    </div>
                </div>
                </section><!-- End Breadcrumbs Section -->

                <div class="container">

                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome do Departamento</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>                                           
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nome do Departamento</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>    
                                </tr>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Cardiologia</td>
                                    <td>A cardiologia em si é definida como um ramo da medicina responsável por estudar, cuidar e tratar o coração e os vasos sanguíneos. Ou seja, é uma das especialidades da medicina que cuida do coração e do sistema circulatório. A cardiologia é principalmente dividida em duas grandes áreas, assim como toda a medicina: a preventiva e a curativa. </td>
                                    <td>Editar, Apagar</td>
                                </tr>
                                <tr>
                                    <td>Odontologia</td>
                                    <td>O profissional formado em Odontologia é responsável pela saúde bucal das pessoas. Ele atua na prevenção, diagnóstico e tratamento de problemas relacionados à mordida, gengiva e dentes. O dentista realiza tratamentos estéticos e também intervenções relacionada à saúde bucal. Ele está apto a identificar doenças através de exames clínicos, radiográficos e laboratoriais e, a partir do diagnóstico, propor o tratamento mais adequado e receitar medicamentos.</td> 
                                    <td>Editar, Apagar</td>
                                </tr>
                                <tr>
                                    <td>Ortopedia</td>
                                    <td>A ortopedia ou traumato-ortopedia é a especialidade médica encarregada de tratar lesões, traumas e algumas deformidades que refletem no aparelho locomotor de um indivíduo, como tendões, ossos, ligamentos e articulações. Esta área também está relacionada à traumatologia, que trata contusões causadas por pancadas, como as fraturas ósseas.</td>
                                    <td>Editar, Apagar</td>                                            
                                </tr>
                                <tr>
                                    <td>Nutricionista</td>
                                    <td>De forma resumida, o nutricionista elabora planos alimentares para indivíduos ou grupos de indivíduos a partir de um diagnóstico nutricional. </td>
                                    <td>Editar, Apagar</td>
                                </tr>
                                <tr>
                                  <td>Otorrinolaringologia</td>
                                  <td>A otorrinolaringologia é a especialidade médica responsável pelos cuidados dedicados ao nariz, ouvidos, seios da face e garganta de um indivíduo. Como as três áreas são relativamente próximas uma das outras e interligadas por dutos e canais, é possível que certas condições médicas afetem uma ou mais cavidades e é de responsabilidade do médico com esse tipo de especialização realizar avaliações, diagnósticos e tratamentos para devolver ou aprimorar a qualidade de vida de um paciente.</td>
                                  <td>Editar, Apagar</td>
                                </tr>
                                <tr>
                                  <td>Dermatologista</td>
                                  <td>A Dermatologia é uma especialidade médica cuja área de conhecimento se concentra no diagnóstico, prevenção e tratamento de doenças e afecções relacionadas à pele, pelos, mucosas, cabelo e unhas. É também especialidade indicada para atuação em procedimentos médicos estéticos, cirúrgicos, oncológicos.</td>
                                  <td>Editar, Apagar</td>
                                </tr>
                                <tr>
                                  <td>Gerontologia</td>
                                  <td>A palavra Gerontologia deriva da língua grega e significa estudo do envelhecimento. O aluno do curso de Gerontologia estuda as mudanças ocorridas no processo de envelhecimento do ser humano e procura adaptar essas mudanças para que o idoso tenha uma vida mais tranquila nos aspectos físicos, psicológicos e biológicos.</td>
                                  <td>Editar, Apagar</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

                </div>

                </main><!-- End #main -->
            
                <div id="preloader"></div>
                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-up-short"></i>
                    </a>

                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Clique em "Sair" para encerrar a sesssão.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="login.html">Sair</a>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Bootstrap core JavaScript-->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="assets/js/demo/datatables-demo.js"></script>
                    
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