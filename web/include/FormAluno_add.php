<?php
if(isset($_POST['submit'])){
	
	//criando vetor para saber se todas as informacoes do formulários foram preenchidas.
	$data_missing = array();
	
	if(empty($_POST['nome'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Nome Completo';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$nome = trim($_POST['nome']);
		
	}
	
	if(empty($_POST['cpf'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'CPF';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$cpf = trim($_POST['cpf']);
		
	}
	
	if(empty($_POST['identidade'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Identidade';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$identidade = trim($_POST['identidade']);
		
	}
	
	if(empty($_POST['o_emissor'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Orgao Emissor';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$o_emissor = trim($_POST['o_emissor']);
		
	}
	
	if(empty($_POST['matricula'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Matricula';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$matricula = trim($_POST['matricula']);
		
	}
	
	if(empty($_POST['genero'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Genero';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$genero = trim($_POST['genero']);
		
	}
	
	if(empty($_POST['dt_nascimento'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Data de Nascimento';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$dt_nascimento = trim($_POST['dt_nascimento']);
		
	}
	
	if(empty($_POST['periodo'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Periodo';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$periodo = trim($_POST['periodo']);
		
	}
	
		if(empty($_POST['email'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'E-mail';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$email = trim($_POST['email']);
		
	}

	if(empty($_POST['rua'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Rua';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$rua = trim($_POST['rua']);
		
	}
	
	if(empty($_POST['complemento'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Complemento';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$complemento = trim($_POST['complemento']);
		
	}
	
	if(empty($_POST['bairro'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Bairro';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$bairro = trim($_POST['bairro']);
		
	}
	
	if(empty($_POST['cidade'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Cidade';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$cidade = trim($_POST['cidade']);
		
	}
	
	if(empty($_POST['uf'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'UF';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$uf = trim($_POST['uf']);
		
	}
	
	if(empty($_POST['cep'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'CEP';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$cep = trim($_POST['cep']);
		
	}
	
	if(empty($_POST['nome_projeto'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Nome do Projeto';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$nome_projeto = trim($_POST['nome_projeto']);
		
	}
	
	if(empty($_POST['como_conheceu'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Como Conheceu';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$como_conheceu = trim($_POST['como_conheceu']);
		
	}
	
	if(empty($_POST['dias_disponiveis'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Dias Disponiveis';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$dias_disponiveis = trim($_POST['dias_disponiveis']);
		
	}
	
	if(empty($_POST['turno_disponivel'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Turno Disponivel';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$turno_disponivel = trim($_POST['turno_disponivel']);
		
	}
	
	if(empty($_POST['dt_inscricao'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Data de Inscricao';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$dt_inscricao = trim($_POST['dt_inscricao']);
		
	}
	
	if(empty($_POST['ipuser'])){
		
		//adiciona o nome do campo nao preenchido
		//$data_missing[] = 'CEP';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$ipuser = trim($_POST['ipuser']);
		
	}	
	
	if(empty($data_missing)){

		require_once('../SqlManager.class.php');
		
		//criando conexao
		$connection = new SqlManager("connect");
		
		//montar a query
		$sqlAluno = "INSERT INTO aluno(nome, cpf, identidade, o_emissor, matricula, genero, dt_nascimento, periodo, email, rua, complemento, bairro, cidade, uf, cep) VALUE('$nome', '$cpf', '$identidade', '$o_emissor', '$matricula', '$genero', '$dt_nascimento', '$periodo', '$email', '$rua', '$complemento', '$bairro', '$cidade', '$uf', '$cep')";
		
		//$sqlInscricao = "INSERT INTO inscricao(razao_social, nome_fantasia, email_instituicao, nome_RP, email_RP, ano_fundacao, website, vinculo, rua, complemento, bairro, cidade, uf, cep) VALUE('$nome_projeto', '$como_conheceu', '$dias_disponiveis', '$turno_disponivel', '$data_inscricao', '$status_inscricao')";
		
		$affected_rows1 = $connection->executeCommand($sqlAluno);
		//$affected_rows2 = $connection->executeCommand($sqlInscricao);
		
	}
	
	if($affected_rows1 > 0){
	
		$connection->closeConnection();
		
	} else{
	
		echo 'Error Occurred - SQL';
		$connection->closeConnection();
	
	}
	/*
	if($affected_rows2 > 0){
	
		$connection->closeConnection();
		
	} else{
	
		echo 'Error Occurred - SQL';
		$connection->closeConnection();
	
	}*/
	
} else{
	
	echo 'Voce preicsa preencher as seguintes informacoes<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
		}
}
?>