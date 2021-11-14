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
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#insert-esp-modal">Novo Especialista +
                        </button>
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                        <input class="form-control"type="text" id="search" placeholder="Pesquisar">
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
                                            <th><?php echo $esp['nome_especialista']?></th>
                                            <th><?php echo $esp['nome']?></th>
                                            <th><?php echo $esp['email']?></th>
                                            <th><?php echo $esp['telefone']?></th>
                                            <th><?php echo $esp['cpf']?></th>
                                            <th><?php echo $esp['conselho_regional']?></th>
                                            <th><a data-confirm="Tem Certeza de que deseja excluir o item selecionado?"
                                                    data-id="<?php echo $esp['id_especialista']?>"
                                                    class="btn btn-danger">Excluir</a>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"
                                                    data-bs-nome="<?php echo $esp['nome_especialista']?>"
                                                    data-bs-crm="<?php echo $esp['conselho_regional']?>"
                                                    data-bs-cpf="<?php echo $esp['cpf']?>"
                                                    data-bs-email="<?php echo $esp['email']?>"
                                                    data-bs-telefone="<?php echo $esp['telefone']?>"
                                                    data-bs-departamento="<?php echo $esp['id_departamento']?>"
                                                    data-bs-id="<?php echo $esp['id_especialista']?>">Alterar</button>
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
                <div class="modal-header bg-success">
                    <h5 class="modal-title form-style" id="exampleModalLabel">Novo Especialista</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
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
                                <input type="number" name="telefone-especialista" class="form-control"
                                    id="telefone-especialista">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="departamento-especialista"
                                class="col-sm-2 col-form-label form-style">Departamento:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="departamento-especialista"
                                    id="departamento-especialista">
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

    <!-- delete modal  -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir Especialista</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body form-style">
                    Tem Certeza de que deseja excluir esse Especialista?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        id="dataConfirmOK">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal update  -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning form-style">
                    <h5 class="modal-title" id="exampleModalLabel">Alterar Especialista</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body form-style">
                    <div id="message-result-update"></div>
                    <form id="form-update-especialista">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-crm" class="col-form-label">CRM:</label>
                            <input type="number" class="form-control" id="recipient-crm">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-cpf" class="col-form-label">CPF:</label>
                            <input type="text" class="form-control" id="recipient-cpf">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-email" class="col-form-label">E-mail:</label>
                            <input type="email" class="form-control" id="recipient-email">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-telefone" class="col-form-label">Telefone:</label>
                            <input type="number" class="form-control" id="recipient-telefone">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-departamento" class="col-form-label">Departamento:</label>
                            <select class="form-control" id="recipient-departamento">
                                <?php
                                    foreach($depInfo as $dep){
                                        echo "<option value='".$dep['id_departamento']."'>".$dep['nome']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" id="btn-update-esp" class="btn btn-warning">Alterar</button>
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
    <script>
    let exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget
        // Extract info from data-bs-* attributes
        let recipientNome = button.getAttribute('data-bs-nome');
        let recipientCrm = button.getAttribute('data-bs-crm');
        let recipientCpf = button.getAttribute('data-bs-cpf');
        let recipientEmail = button.getAttribute('data-bs-email');
        let recipientTelefone = button.getAttribute('data-bs-telefone');
        let recipientDepartamento = button.getAttribute('data-bs-departamento');
        let id = button.getAttribute('data-bs-id');

        let update = $(this);
        update.find('#recipient-name').val(recipientNome);
        update.find('#recipient-crm').val(recipientCrm);
        update.find('#recipient-cpf').val(recipientCpf);
        update.find('#recipient-email').val(recipientEmail);
        update.find('#recipient-telefone').val(recipientTelefone);
        update.find('#recipient-departamento').val(recipientDepartamento);


        $('#btn-update-esp').click(function() {
            let nome = $('#recipient-name').val();
            let crm = $('#recipient-crm').val();
            let cpf = $('#recipient-cpf').val();
            let email = $('#recipient-email').val();
            let telefone = $('#recipient-telefone').val();
            let departamento = $('#recipient-departamento').val();
            let res = verificaCampos(id, nome, crm, cpf, email, telefone, departamento);

            if (res) {
                $.ajax({
                    url: '../Controller/alterar-especialista.php',
                    method: 'POST',
                    data: {
                        id: id,
                        nome: nome,
                        crm: crm,
                        cpf: cpf,
                        email: email,
                        telefone: telefone,
                        departamento: departamento
                    },
                    dataType: 'json'
                }).done(function(result) {
                    if (result == "CPF Inválido!") {
                        $('#message-result-update').empty();
                        $('#message-result-update').prepend(
                            '<div class="alert alert-danger" role="alert">CPF Inválido</div>'
                        );
                    } else if (result == "Erro! Verifique os campos") {
                        $('#message-result-update').empty();
                        $('#message-result-update').prepend(
                            '<div class="alert alert-danger" role="alert">' + result +
                            '</div>');
                    } else {
                        $("#form-update-especialista").trigger("reset");
                        $("#exampleModal").modal('hide');
                        $("#message_success").prepend(
                            "<div class='alert alert-success' role='alert'>" + result +
                            "</div>");
                        setTimeout(() => {
                            $("#message_success").fadeOut("Slow");
                        }, 1500);
                        setTimeout(() => {
                            location.reload();
                        }, 1500);
                    }
                });
            }
        });
    });

    function verificaCampos(id, nome, crm, cpf, email, telefone, departamento) {
        if (id == "" || nome == "" || crm == "" || cpf == "" || email == "" || telefone == "" || departamento == "") {
            $('#message-result-update').empty();
            $('#message-result-update').prepend(
                '<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>');
            return false;
        } else {
            $('#message_result').empty();
            return true;
        }
    }
    </script>


</body>

</html>