<?php 
session_start();
if(!isset($_SESSION['logado'])) {
	header("Location: /ga/index.php?msg=Sessão-expirada");
}
?>


<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>RESPUC - Área Restrita</title>
    
	<meta name="author" content="Fernando Homem da Costa" />
     <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../Front-End/LogIn/arearestrita/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../Front-End/LogIn/arearestrita/Front-End/include/signin.css" rel="stylesheet">
    
    <!--My Style Sheet-->
    <link rel="stylesheet" type="text/css" href="../../Front-End/css/myFormStyleSheet.css">
</head>

<body>
<?php 
include ("../../Front-End/include/header.php");
include ("../../Front-End/include/nav.php");

if($option == 'grafico'){
	
}
else if($option == 'tabela'){

}


include ("../../Front-End/include/footer.php");
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="bootstrap/bootstrap-3.3.7/dist/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
</body>
</html>