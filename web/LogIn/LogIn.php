<?php 
session_start();

header("Expires: Mon, 12 Jul 2010 11:52:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Content-type: text/html; charset: utf-8");

//capturar os valores que vieram do form de login
//testar se o login é igual 'admin@respuc.com.br'
//testar se a senha é igual 'senha12345'
//se o login e a senha estiverem certo redirecionar o usuário para a area restrita senão redirecionar ele para a página de login com a mensagem 'Usuários/senhas inválidos'

$login = trim($_POST['logintxt']);
$password = trim($_POST['passwordtxt']);

require_once('../SqlManager.class.php');

//criando conexao
$connection = new SqlManager("connect");

//montar a query
$sql= "SELECT username, password FROM login WHERE username='$login' AND password='$password'";


//envia a query
$result = $connection->executeRead($sql);

$bool_controle = false;
foreach($result as $feedback)
$bool_controle = true;

//4º Passo - Verificando se a consulta retornou resultado
if($bool_controle){
	$username = $feedback['username']; //inserir de acordo com bd criado
	$StatusLogIn = true;
} else{
	$StatusLogIn = false;
}

//5º Passo - Fechar a conexão
$connection->closeConnection();

if($StatusLogIn){
	//Gravo um cookie na máquina do usuario para não ter que loggar toda hora.
	setcookie('username',$username, time()+(3*24*60*60));
	
	//Crio as variáveis de log de acesso - resgistramos toda pessoa que logga na area restrita
	$_SESSION['LoggedIn'] = true;
	//$_SESSION['nome'] = $name;
	$_SESSION['username'] = $username;
	
	//varaveis Dia e hora/Ip do usuario para o log de acesso
	$date = date('d/m/Y H:i:s');
	$ipUser = $_SERVER['REMOTE_ADDR'];
	
	//Cria e grava no arquivo que irá armazenar o as informações.
	$arquivo = fopen("log-$username.txt","a+");
	fwrite($arquivo, $linhaTxt);
	fclose($arquivo);

	header('Location: arearestrita/index.php');
	
} else {
	
	header("Location: index.php?msg=Usuários/senhas-inválidos");
	
}
?>