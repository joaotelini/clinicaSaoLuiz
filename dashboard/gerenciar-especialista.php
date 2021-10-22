<?php
    include_once '../Conexao/especialistaDAO.php';
    include_once '../Conexao/departamentoDAO.php';

    $espDao = new EspecialistaDAO();
    $espInfo = $espDao->Listar();
    
    $depDao = new DepartamentoDAO();
    $depInfo = $depDao->Listar();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Especialistas</title>

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                    <span>Página Inicial</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="gerenciar-agendamento.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Agendamentos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-departamento.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Departamentos</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="gerenciar-especialista.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Especialistas</span></a>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Gerenciar os Especialistas</h1>
                    <div id="message_success"></div>

                    <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insert-esp-modal">Novo Especialista +
                        </button>
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                        <input type="text" id="search" placeholder="Pesquisar">
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Departamento</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>CPF</th>
                                            <th>Conselho Regional</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Departamento</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>CPF</th>
                                            <th>Conselho Regional</th>
                                            <th>Ações</th>
                                        </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($espInfo as $esp):?>
                                        <tr>
                                            <th><?php echo $esp['nome_completo']?></th>
                                            <th><?php echo $esp['nome']?></th>
                                            <th><?php echo $esp['email']?></th>
                                            <th><?php echo $esp['telefone']?></th>
                                            <th><?php echo $esp['cpf']?></th>
                                            <th><?php echo $esp['conselho_regional']?></th>
                                            <th><a href="../Controller/excluiEspecialista.php?id=<?php echo $esp['id_especialista']?>"
                                                    data-confirm="Tem Certeza de que deseja excluir o item selecionado?"
                                                    data-id="<?php echo $esp['id_especialista']?>"
                                                    class="btn btn-danger">Excluir</a> <button type="button"
                                                    class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#updateModal"
                                                    data-bs-id="<?php echo $esp['id_especialista']?>"
                                                    data-bs-nome="<?php echo $esp['nome_completo']?>"
                                                    data-bs-descricao="<?php echo $esp['conselho_regional']?>"
                                                    data-bs-nome="<?php echo $esp['email']?>"
                                                    data-bs-nome="<?php echo $esp['telefone']?>"
                                                    data-bs-nome="<?php echo $esp['cpf']?>">Alterar</button>
                                            </th>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
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

    <!-- insertModal  -->

    <div class="modal fade" id="insert-esp-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title form-style" id="exampleModalLabel">Novo Especialista</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-cad-especialista">
                        <div id="message_result"></div>
                        <div class="row mb-3">
                            <label for="nome" class="col-sm-2 col-form-label form-style">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" name="nome" class="form-control" id="nome-especialista">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="conselho-regional" class="col-sm-2 col-form-label form-style">CRM:</label>
                            <div class="col-sm-10">
                                <input type="number" name="conselho-regional" class="form-control"
                                    id="conselho-regional">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cpf" class="col-sm-2 col-form-label form-style">CPF:</label>
                            <div class="col-sm-10">
                                <input type="text" name="cpf" class="form-control" id="cpf-especialista">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label form-style">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="email-especialista">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telefone-especialista"
                                class="col-sm-2 col-form-label form-style">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="number" name="telefone-especialista" class="form-control" id="telefone-especialista">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="departamento-especialista" class="col-sm-2 col-form-label form-style">Departamento:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="departamento-especialista" id="departamento-especialista">
                                    <option value="0"></option>
                                    <?php
                                        foreach($depInfo as $dep) {
                                            echo "<option value='".$dep['id_departamento']."'>".$dep['nome']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" id="insert-especialista" class="btn btn-success">Cadastrar</button>
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
    <script src="./assets/js/especialista.js"></script>

</body>

</html>