<?php
    include_once '../Conexao/servicoDAO.php';
    include_once '../Conexao/departamentoDAO.php';

    $serDao = new ServicoDAO();
    $serInfo = $serDao->Listar();

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

    <title>Serviço</title>

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
                <a class="nav-link" href="index.php">
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

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-especialista.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Especialistas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="gerenciar-paciente.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pacientes</span></a>
            </li>

            <li class="nav-item active">
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
                    <h1 class="h3 mb-2 text-gray-800">Gerenciar os Serviços</h1>
                    <div id="message-success"></div>

                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-success mb-2 mt-2" data-bs-toggle="modal"
                            data-bs-target="#insert-ser-modal">
                            Novo Serviço +
                        </button>
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                        <input class="form-control" type="text" id="search" placeholder="Pesquisar">
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Duração (minutos)</th>
                                            <th>Valor</th>
                                            <th>Departamento</th>
                                            <th>Descrição</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Duração (minutos)</th>
                                            <th>Valor</th>
                                            <th>Departamento</th>
                                            <th>Descrição</th>
                                            <th>Ações</th>
                                        </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($serInfo as $ser):?>
                                        <tr>
                                            <td><?php echo $ser['nome_servico']?></td>
                                            <td><?php echo $ser['duracao']?> minutos</td>
                                            <td>R$<?php echo $ser['valor']?>,00</td>
                                            <td><?php echo $ser['nome']?></td>
                                            <td><?php echo $ser['descricao_servico']?></td>
                                            <td><a data-id="<?php echo $ser['id_servico']?>"
                                                    data-confirm="Tem Certeza de que deseja excluir o item selecionado?"
                                                    class="btn btn-danger">Excluir</a>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#updateModal"
                                                    data-bs-nome="<?php echo $ser['nome_servico']?>"
                                                    data-bs-duracao="<?php echo $ser['duracao']?>"
                                                    data-bs-valor="<?php echo $ser['valor']?>"
                                                    data-bs-descricao="<?php echo $ser['descricao_servico']?>"
                                                    data-bs-departamento="<?php echo $ser['id_departamento']?>"
                                                    data-bs-id="<?php echo $ser['id_servico']?>">Alterar</button>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
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

    <!-- insert modal  -->

    <div class="modal fade" id="insert-ser-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title form-style" id="exampleModalLabel">Cadastrar Serviço</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body form-style">
                    <div id="message-result"></div>
                    <form id="form-cad-servico">
                        <div class="mb-3">
                            <label for="departamento" class="col-form-label">Departamento:</label>
                            <select class="form-control" name="departamento" id="departamento">
                                <option value="0"></option>
                                <?php
                                    foreach($depInfo as $dep) {
                                        echo "<option value='".$dep['id_departamento']."'>".$dep['nome']."</option>";
                                    }
                                    ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="col-form-label">Nome:</label>
                            <input type="text" name="nome" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="duracao" class="col-form-label">Duração:</label>
                            <input type="number" name="duracao" class="form-control" id="duracao">
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="col-form-label">Valor:</label>
                            <input type="number" class="form-control" id="valor">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="col-form-label">Descrição:</label>
                            <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="btn-cad-servico">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- delete modal  -->

    <div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir Serviço</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Tem Certeza de que deseja excluir esse serviço?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        id="dataConfirmOK">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    <!-- update modal  -->

    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning form-style">
                    <h5 class="modal-title" id="exampleModalLabel">Alterar Serviço</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body form-style">
                    <div id="message-result-update"></div>
                    <form id="form-update-servico">
                        <div class="mb-3">
                            <label for="recipient-departamento" class="col-form-label">Departamento:</label>
                            <select class="form-control" id="recipient-departamento">
                                <?php
                                    foreach($depInfo as $dep){
                                        echo "<option value='".$dep['id_departamento']."'>".$dep['nome'].".</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-nome" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" id="recipient-nome">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-nome" class="col-form-label">Duração:</label>
                            <input type="number" class="form-control" id="recipient-duracao">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-nome" class="col-form-label">Valor:</label>
                            <input type="number" class="form-control" id="recipient-valor">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-nome" class="col-form-label">Descrição:</label>
                            <textarea class="form-control" id="recipient-descricao"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-warning" id="update-ser-confirm">Alterar</button>
                </div>
            </div>
        </div>
    </div>

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
    <script src="./assets/js/servico.js"></script>

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

</body>

</html>