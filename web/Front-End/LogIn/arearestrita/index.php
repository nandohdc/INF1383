<?php 
session_start();
if(!isset($_SESSION['logado'])) {
	header("Location: /ga/index.php?msg=Sessão-expirada");
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>