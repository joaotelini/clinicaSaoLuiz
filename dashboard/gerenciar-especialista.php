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


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Gerenciar os Especialistas</h1>

                    <div class="d-flex justify-content-between align-items-center">
                        <p><a href="cadastroEspecialista.php">Cadastrar novo Especialista</a></p>
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
                                        <tr>
                                            <td>Raimunda Giovanna Rafaela dos Santos</td>
                                            <td>Cardiologia</td>
                                            <td>raimundagiovannarafaeladossantos-92@unink.com.br</td>
                                            <td>(19) 98223-2027</td>
                                            <td>428.774.000-93</td>
                                            <td>-----------</td>
                                            <td>Editar, Apagar</td>
                                        </tr>
                                        <tr>
                                            <td>Raimunda Giovanna Rafaela dos Santos</td>
                                            <td>Cardiologia</td>
                                            <td>raimundagiovannarafaeladossantos-92@unink.com.br</td>
                                            <td>(19) 98223-2027</td>
                                            <td>428.774.000-93</td>
                                            <td>-----------</td>
                                            <td>Editar, Apagar</td>
                                        </tr>
                                        <tr>
                                            <td>Raimunda Giovanna Rafaela dos Santos</td>
                                            <td>Cardiologia</td>
                                            <td>raimundagiovannarafaeladossantos-92@unink.com.br</td>
                                            <td>(19) 98223-2027</td>
                                            <td>428.774.000-93</td>
                                            <td>-----------</td>
                                            <td>Editar, Apagar</td>                                         
                                            
                                        </tr>
                                        <tr>
                                            <td>Raimunda Giovanna Rafaela dos Santos</td>
                                            <td>Cardiologia</td>
                                            <td>raimundagiovannarafaeladossantos-92@unink.com.br</td>
                                            <td>(19) 98223-2027</td>
                                            <td>428.774.000-93</td>
                                            <td>-----------</td>
                                            <td>Editar, Apagar</td>
                                        </tr>
                                        <td>Raimunda Giovanna Rafaela dos Santos</td>
                                            <td>Cardiologia</td>
                                            <td>raimundagiovannarafaeladossantos-92@unink.com.br</td>
                                            <td>(19) 98223-2027</td>
                                            <td>428.774.000-93</td>
                                            <td>-----------</td>
                                            <td>Editar, Apagar</td>
                                        </tr>
                                        <tr>
                                            <td>Raimunda Giovanna Rafaela dos Santos</td>
                                            <td>Cardiologia</td>
                                            <td>raimundagiovannarafaeladossantos-92@unink.com.br</td>
                                            <td>(19) 98223-2027</td>
                                            <td>428.774.000-93</td>
                                            <td>-----------</td>
                                            <td>Editar, Apagar</td>
                                        </tr>

                                        <tr>
                                            <td>Raimunda Giovanna Rafaela dos Santos</td>
                                            <td>Cardiologia</td>
                                            <td>raimundagiovannarafaeladossantos-92@unink.com.br</td>
                                            <td>(19) 98223-2027</td>
                                            <td>428.774.000-93</td>
                                            <td>-----------</td>
                                            <td>Editar, Apagar</td>
                                        </tr>
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

</body>

</html>