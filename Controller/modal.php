<!DOCTYPE html>
<html lang="pt-br">
	<!-- Modal de Delete View\modal.php-->
	<?php
		if (isset($_GET['id'])){
			$id = $_GET['id'];
		}
	?>

<head>
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">

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
                <script src="./assets/js/script.js"></script>
</head>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modalLabel">Excluir Item</h4>
			</div>
			<div class="modal-body">
				Deseja realmente excluir este item?
				<a href="administrativo.php?link=<?php echo $pag; ?>&id=<?php echo $id; ?>"><button type="button" class="btn btn-sm btn-danger">Sim</button></a>
				<a href="administrativo.php?link=<?php echo $pag1; ?>"><button type="button" class="button btn-sm btn-info">Não</button></a>	
			</div>
		</div>
	</div>
</html>