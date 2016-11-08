<?php
	//require '../includes/server/modulos/FormInstituicao_add.php';
?>

<!-- This page is log in page to have acess to restricted area. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RESPUC - Cadastro Instituição</title>
	<meta name="author" content="Fernando Homem da Costa" />
     <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!--My Style Sheet-->
    <link rel="stylesheet" type="text/css" href="../include/css/myFormStyleSheet.css">
</head>
<body>

<!-- Including header.php, nav.php, main.php & footer.php -->
<?php 
include('../include/header.php');
include('../include/nav.php');
include ('../include/FormInstituicao.php');
include('../include/footer.php');
 ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../bootstrap/bootstrap-3.3.7/dist/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
</body>
</html>