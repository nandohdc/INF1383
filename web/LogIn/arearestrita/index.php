<?php /*
session_start();
if(!isset($_SESSION['logado'])) {
	header("Location: ../index.php?msg=Sessão-expirada");
}*/
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>RESPUC - Área Restrita</title>
    
	<meta name="author" content="Fernando Homem da Costa" />
     <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!--My Style Sheet -->
    <link rel="stylesheet" type="text/css" href="../../include/css/consultaStyleSheet.css">
    
    <!-- jQuery 3.1.1 -->
	<script src="../../include/js/jquery-3.1.1.js" type="text/javascript"></script>
	
	<!-- My Javascirpt -->
	<script src="../../include/js/consulta.js" type="text/javascript"></script>
  
  	<!-- Google Charts -->
  	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
	<noscript>
		<h3>This Website requires Javascript.</h3>
	</noscript>
    
</head>

<body>
<?php 
include ("header_arearestrita.php");
include ("nav_arearestrita.php");
include("main_arearestrita.php");
include ("footer_arearestrita.php");
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../../bootstrap/bootstrap-3.3.7/dist/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
</body>
</html>