<?php 
session_start();

header("Expires: Mon, 12 Jul 2010 11:52:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Content-type: text/html; charset: utf-8");

//capturar os valores que vieram do form de login
//testar se o login é igual 'user'
//testar se a senha é igual '12345'
//se o login e a senha estiverem certo redirecionar o usuário para a area restrita senão redirecionar ele para a página de login com a mensagem 'Usuários/senhas inválidos'

$login = $_POST['logintxt'];
$password = $_POST['passwordtxt'];

//Instrução de consulta no BD
//1º Passo Criar conexão

$connection = @mysql_connect('','','');
if(!$conection){
	exit('Website está temporiamente fora do ar.');
}

//2º Passo - Selecionando a Base de Dados que eu quero
//nome do BD / váriavel de conexao

mysql_select_db('',$connection);

//3º Passo - Montando a query SQL
$sql = "";

//Envia a Query para o Servidor
$feedback = mysql_query($sql, $connection);

//4º Passo - Verificando se a consulta retornou resultado
if(mysql_num_rows($feedback) > 0){
	$register = mysql_fetch_array($feedback, MYSQL_ASSOC);
	$name = $feedback['']; //inserir de acordo com bd criado
	$email = $feedback['']; //inserir de acordo com bd criado
	$codUser = $feedback['']; //inserir de acordo com bd criado
	$StatusLogIn = true;
} else{
	$StatusLogIn = false;
}

//5º Passo - Fechar a conexão
mysql_close($conexao);

if($StatusLogIn){
	//Gravo um cookie na máquina do usuario para não ter que loggar toda hora.
	setcookie('email',$email, time()+(3*24*60*60));
	
	//Crio as variáveis de log de acesso - resgistramos toda pessoa que logga na area restrita
	$_SESSION['LoggedIn'] = true;
	$_SESSION['nome'] = $name;
	$_SESSION['email'] = $email;
	
	//varaveis Dia e hora/Ip do usuario para o log de acesso
	$date = date('d/m/Y H:i:s');
	$ipUser = $_SERVER['REMOTE_ADDR'];
	
	//Cria e grava no arquivo que irá armazenar o as informações.
	$arquivo = fopen("log-$nome.txt","a+");
	fwrite($arquivo, $linhaTxt);
	fclose($arquivo);

	
	header('Location: arearestrita');
} else {
	header("Location: index.php?msg=Usuários/senhas-inválidos");
}

?>