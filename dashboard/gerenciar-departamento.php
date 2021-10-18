<?php
include_once '../Conexao/departamentoDAO.php';

$depDao = new DepartamentoDAO();
$depInfo = $depDao->listar();
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Departamentos</title>

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="shortcut icon" href="#">
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

                <a class="nav-link" href="gerenciar-agendamento.php">

                    <i class="fas fa-fw fa-table"></i>

                    <span>Agendamentos</span>

                </a>

            </li>

            <li class="nav-item active">
                <a class="nav-link" href="gerenciar-departamento.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Departamentos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-especialista.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Especialistas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-paciente.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pacientes</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-servico.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Serviços</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-horario.php">
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

                </nav>
                <!-- End of Topbar -->

                <main id="main">

                    <!-- ======= Breadcrumbs Section ======= -->
                    <section class="breadcrumbs">

                        <div class="container ml-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Gerenciamento dos Departamentos</h2>
                            </div>
                            <div id="message_success">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- <p><a class="btn btn-primary" href="cadastroDepartamento.php">Novo Departamento</a></p> -->


                                <div class="modal fade" id="cadDepModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title form-style" id="exampleModalLabel">Novo
                                                    Departamento</h5>
                                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                            </div>
                                            <div class="modal-body">
                                                <form id="cadDepForm">
                                                    <div id="message_result"></div>
                                                    <div class="row mb-3">
                                                        <label for="nome"
                                                            class="col-sm-2 col-form-label form-style">Nome:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="nome" class="form-control"
                                                                id="departamento">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="descricao"
                                                            class="col-sm-2 col-form-label form-style">Descrição:</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" id="descricao"></textarea>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" data-bs-dismiss="modal" id="cadDep"
                                                    class="btn btn-success">Cadastrar</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    </section><!-- End Breadcrumbs Section -->

                    <div class="container">
                        <button type="button" class="btn btn-success ml-4 mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#cadDepModal">
                            Novo Departamento +
                        </button>

                        <div class="form-group input-group ml-4">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                            <input type="text" id="search" placeholder="Pesquisar">
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
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
                                        <?php foreach($depInfo as $dep):?>
                                        <tr>
                                            <th><?php echo $dep['nome']?></th>
                                            <th><?php echo $dep['descricao']?></th>
                                            <th><a href="../Controller/excluiDepartamento.php?id=<?php echo $dep['id_departamento']?>" data-confirm="Tem Certeza de que deseja excluir o item selecionado?" data-id="<?php echo $dep['id_departamento']?>" class="btn btn-danger">Excluir</a> <a href="#" class="btn btn-warning">Alterar</a>
                                            </th>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
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
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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

            <!-- delete modal  -->
            <div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="exampleModalLabel">Excluir Departamento</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Tem Certeza de que deseja excluir esse departamento?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="dataConfirmOK">Excluir</button>
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

            <script>
            var $rows = $('#table tr ');
            $('#search').keyup(function() {
                var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

                $rows.show().filter(function() {
                    var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                    return !~text.indexOf(val);
                }).hide();
            });
            </script>
            <!-- <script src="assets/js/jquery-3.6.0.min.js"></script> -->

            <script src="./assets/js/script.js"></script>

</body>

</html>