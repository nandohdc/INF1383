<?php
//Recuperando o email do usuário enviado pelo JavaScript (AJAX)

$email = @$_POST['email'];
$codigo = @$_POST['codigo'];

//Se a quantidade de caracteres na string $email for 0, ou seja, a string estiver vazia, significa que nenhum dado foi enviado pelo JavaScript, pois a caixa de texto provavelmente estava vazia

if (strlen($email) == 0) {

	$resposta = "Preencha o email a ser validado.";

}

//Senão, ou seja, a quantidade de caracteres na string $email é diferente de 0, podemos fazer a verificação de fato

else {	

	//Conectando ao banco de dados 'infnetgrid' para fazer uma busca na tabela 'cadastro', com o objetivo de verificar se já existe algum registro cadastrado que possua o email fornecido

	$conn = @mysql_connect("localhost", "root", "");

	if (!$conn) exit("Site temporariamente fora do ar.");

	mysql_select_db("infnetgrid", $conn);


	//Criando e executando a consulta SQL que irá pedir para o banco de dados retornar todas as linhas da tabela cadastro cujo campo 'CAD_EMAIL' contenha o email enviado pela requisição AJAX do JavaScript, que por sua vez era o email que o usuário preencheu no formulário

	$query = "SELECT * FROM cadastro WHERE CAD_EMAIL = '".$email."'";


	$result = mysql_query($query, $conn);

	//Caso o número de linhas do resultado desta consulta seja 1, o email já existe no banco de dados e não poderá ser cadastrado - será dada uma resposta negativa para o usuário

	if (@mysql_num_rows($result) > 0){

		$resposta = "O email '$email' já existe na base de dados e não pode ser cadastrado!";

	}

	//Senão, ou seja, o resultado possui 0 linhas, significando que não foi encontrado nenhum registro com o email enviado e este poderá ser cadastrado - será dada uma resposta positiva para o usuário

	else { 

		$resposta = "O email '$email' está livre para cadastro."; 

	}

}

//Mostrando a resposta criada na tela, para que a mesma possa ser recebida pelo JavaScript. Lembrando que tudo que o PHP imprime na tela é repassado como resposta à requisição HTTP (AJAX).

	echo $resposta;

?>