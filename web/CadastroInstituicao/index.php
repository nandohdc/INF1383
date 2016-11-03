<?php
	//require '../includes/server/modulos/FormInstituicao_add.php';
?>

<!-- This page is log in page to have acess to restricted area. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>RESPUC - Cadastro Instituição</title>
	<meta name="author" content="Fernando Homem da Costa" />
     <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../Front-End/CadastroInstituicao/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Front-End/CadastroInstituicao/Front-End/include/signin.css" rel="stylesheet">
    
    <!--My Style Sheet-->
    <link rel="stylesheet" type="text/css" href="../css/myFormStyleSheet.css">
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