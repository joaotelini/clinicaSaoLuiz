<?php
    include_once '..\Conexao\conexao.php';
    $pdo = Conexao::getInstance();
    $sql = $pdo->prepare("SELECT * FROM `departamento`");
    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    // print_r($info);
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
                    <span>Página Inicial</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="agendamentos.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Agendamentos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="departamentos.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Departamentos</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="especialistas.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Especialistas</span></a>
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
        <main id="main">

<!-- ======= Breadcrumbs Section ======= -->
            <section class="breadcrumbs">

            <div class="container mt-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Cadastro de Especialista</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs Section -->

            <div class="container">

                <form method="post" action="../Controller/especialistaCadastrar.php" class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Nome:</label>
                        <input type="text" size="15" name="nome" class="form-control"
                        <?php
                            if (!empty($_SESSION['value_nome'])) {
                                echo "value='".$_SESSION['value_nome']."'";
                                unset($_SESSION['value_nome']);
                            }
                        ?>
                        >
                        <?php
                            if (!empty($_SESSION['vazio_nome'])) {
                                echo "<p style='color: red;'>".$_SESSION['vazio_nome']."</p>";
                                unset($_SESSION['vazio_nome']);
                            }
                        ?>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Conselho Regional</label>
                        <input type="text" name="cr" class="form-control"
                        <?php
                            if (!empty($_SESSION['value_cr'])) {
                                echo "value='".$_SESSION['value_cr']."'";
                                unset($_SESSION['value_cr']);
                            }
                        ?>
                        >
                        <?php
                            if (!empty($_SESSION['vazio_cr'])) {
                                echo "<p style='color: red;'>".$_SESSION['vazio_cr']."</p>";
                                unset($_SESSION['vazio_cr']);
                            }
                        ?>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label class="form-label">CPF:</label>
                        <input type="text" name="cpf" class="form-control"
                        <?php
                            if (!empty($_SESSION['value_cpf'])) {
                                echo "value='".$_SESSION['value_cpf']."'";
                                unset($_SESSION['value_cpf']);
                            }
                        ?>
                        >
                        <?php
                            if (!empty($_SESSION['vazio_cpf'])) {
                                echo "<p style='color: red;'>".$_SESSION['vazio_cpf']."</p>";
                                unset($_SESSION['vazio_cpf']);
                            }
                        ?>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label class="form-label">E-mail:</label>
                        <input type="text" name="email" class="form-control"
                        <?php
                            if (!empty($_SESSION['value_email'])) {
                                echo "value='".$_SESSION['value_email']."'";
                                unset($_SESSION['value_email']);
                            }
                        ?>
                        >
                        <?php
                            if (!empty($_SESSION['vazio_email'])) {
                                echo "<p style='color: red;'>".$_SESSION['vazio_email']."</p>";
                                unset($_SESSION['vazio_email']);
                            }
                        ?>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label class="form-label">Telefone:</label>
                        <input type="text" name="telefone" class="form-control"
                        <?php
                            if (!empty($_SESSION['value_telefone'])) {
                                echo "value='".$_SESSION['value_telefone']."'";
                                unset($_SESSION['value_telefone']);
                            }
                        ?>
                        >
                        <?php
                            if (!empty($_SESSION['vazio_telefone'])) {
                                echo "<p style='color: red;'>".$_SESSION['vazio_telefone']."</p>";
                                unset($_SESSION['vazio_telefone']);
                            }
                        ?>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label class="form-label" for="departamento">Departamento</label>
                        <select class="form-control" name="departamento" id="departamento">
                            <option value="0"></option>
                            <?php
   
                                foreach($info as $departamento){
                                    echo "<option value='".$departamento['id_departamento']."'>".$departamento['nome']."</option>";
                                }
                                
                            ?>
                        </select>
                        <?php
                            if (!empty($_SESSION['vazio_departamento'])) {
                                echo "<p style='color: red;'>".$_SESSION['vazio_departamento']."</p?";
                                unset($_SESSION['vazio_departamento']);
                            }
                        ?>
                    </div>
                    <br><br>

                    <div class="col-12 espaco mt-3">
                        <button type="submit" name="action" class="btn btn-primary">Cadastrar</button>
                    </div>

                </form>

            </div>

        </main><!-- End #main -->
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

</body>

</html>