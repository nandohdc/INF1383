<?php
//require '../includes/server/modulos/FormInstituicao_add.php';
?>

<!-- This page is log in page to have acess to restricted area. -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Fernando Homem da Costa"/>

	<title>RESPUC - Cadastro Instituição</title>
	<!-- Bootstrap core CSS -->
	<link href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../bootstrap/bootstrap-3.3.7/dist/js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.js"></script>

	<!-- jQuery 3.1.1 -->
	<script src="../include/js/jquery-3.1.1.js" type="text/javascript"></script>

	<!--My Style Sheet-->
	<link rel="stylesheet" type="text/css" href="../include/css/myFormStyleSheet.css">

	<!-- My Javascript -->
	<script src="../include/js/mensagens_pt-br.js" type="text/javascript"></script>
	<script src="../include/js/funcoes-view.js" type="text/javascript"></script>
	<script src="../include/js/valida-cadastroInstituicao.js" type="text/javascript"></script>
	<script src="../include/js/validaCPF.js" type="text/javascript"></script>
	<script src="../include/js/validaDTNASC.js" type="text/javascript"></script>
	<script src="../include/js/validaEMAIL.js" type="text/javascript"></script>
	<script src="../include/js/validaEMAILEXISTENTE.js" type="text/javascript"></script>
	<script src="../include/js/controller-cadastroInstituicao.js" type="text/javascript"></script>

</head>

<body>

	<!-- Including header.php, nav.php, main.php & footer.php -->
	<?php 
include('../include/header.php');
include('../include/nav.php');
include ('../include/FormInstituicao.php');
include('../include/footer.php');
 ?>

</body>

</html>