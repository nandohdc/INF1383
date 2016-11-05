<?php 

include '../../includes/server/header_nocache.php';



	unset($_SESSION['autenticado_ea']);

	unset($_SESSION['codid_ea']);

	unset($_SESSION['email_ea']);

	unset($_SESSION['usuario_ea']);



header("Location: ../../LogIn/index.php ");



?>