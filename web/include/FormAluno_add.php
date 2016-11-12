<?php
if ( isset( $_POST['submit'] ) ) {
	
	//criando vetor para saber se todas as informacoes do formulários foram preenchidas.
	$data_missing = array();

	if ( empty( $_POST[ 'nome' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Nome Completo';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$nome = trim( $_POST[ 'nome' ] );

	}

	if ( empty( $_POST[ 'cpf' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'CPF';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$cpf = trim( $_POST[ 'cpf' ] );

	}

	if ( empty( $_POST[ 'identidade' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$identidade = '';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$identidade = trim( $_POST[ 'identidade' ] );

	}

	if ( empty( $_POST[ 'o_emissor' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$o_emissor = '';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$o_emissor = trim( $_POST[ 'o_emissor' ] );

	}

	if ( empty( $_POST[ 'matricula' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Matricula';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$matricula = trim( $_POST[ 'matricula' ] );

	}

	if ( empty( $_POST[ 'genero' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Genero';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$genero = trim( $_POST[ 'genero' ] );

	}

	if ( empty( $_POST[ 'dt_nascimento' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Data de Nascimento';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$dt_nascimento = trim( $_POST[ 'dt_nascimento' ] );

	}

	if ( empty( $_POST[ 'periodo' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Periodo';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$periodo = trim( $_POST[ 'periodo' ] );

	}
	
	if ( empty( $_POST[ 'idioma' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Idioma';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$idioma = trim( $_POST[ 'idioma' ] );

	}

	if ( empty( $_POST[ 'email' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'E-mail';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$email = trim( $_POST[ 'email' ] );

	}
	
	if ( empty( $_POST[ 'nome_curso' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Nome do Curso';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$nome_curso = trim( $_POST[ 'nome_curso' ] );

	}

	if ( empty( $_POST[ 'rua' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Rua';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$rua = trim( $_POST[ 'rua' ] );

	}

	if ( empty( $_POST[ 'complemento' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Complemento';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$complemento = trim( $_POST[ 'complemento' ] );

	}

	if ( empty( $_POST[ 'bairro' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Bairro';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$bairro = trim( $_POST[ 'bairro' ] );

	}

	if ( empty( $_POST[ 'cidade' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Cidade';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$cidade = trim( $_POST[ 'cidade' ] );

	}

	if ( empty( $_POST[ 'uf' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'UF';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$uf = trim( $_POST[ 'uf' ] );

	}

	if ( empty( $_POST[ 'cep' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'CEP';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$cep = trim( $_POST[ 'cep' ] );

	}

	if ( empty( $_POST[ 'telefone_fixo' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Telefone Fixo';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$telefone_fixo = trim( $_POST[ 'telefone_fixo' ] );

	}

	if ( empty( $_POST[ 'celular' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$celular = '';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$celular = trim( $_POST[ 'celular' ] );

	}

	if ( empty( $_POST[ 'nome_projeto' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Nome do Projeto';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$nome_projeto = trim( $_POST[ 'nome_projeto' ] );

	}

	if ( empty( $_POST[ 'como_conheceu' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Como Conheceu';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$como_conheceu = trim( $_POST[ 'como_conheceu' ] );

	} 

	if ( empty( $_POST['dias_disponiveis'] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Dias Disponiveis';

	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$dias_disponiveis = trim($_POST['dias_disponiveis']);
	}

	if ( empty( $_POST[ 'turno_disponivel' ] ) ) {
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Turno Disponivel';

	} else {
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$turno_disponivel = trim( $_POST[ 'turno_disponivel' ] );

	}

	if ( empty( $data_missing ) ) {
		//Não está faltando informação do cadastro, podemos enviar o form
		//Toda inscrição começa com status 'Em Análise'
		$status_inscricao = 'Em Análise';
		$data_inscricao = date("m-d-Y");

		require_once( '../SqlManager.class.php' );

		//criando conexao
		$connection = new SqlManager( "connect" );

		//testa para ver se esse aluno já é cadastrado
		$checkAluno = "SELECT cpf, matricula, email, nome_projeto FROM aluno, projeto WHERE cpf = '$cpf' AND matricula = '$matricula' AND email = '$email' AND nome_projeto = '$nome_projeto'";
		
		$result = $connection->executeRead($checkAluno);


		if (!$result) {//O aluno não está inscrito e pode se inscrever

			//montar a query - para tabela aluno
			$sqlAluno = "INSERT INTO aluno(nome, cpf, identidade, o_emissor, matricula, genero, periodo, dt_nascimento,idioma, nome_curso, rua, complemento, bairro, cidade, uf, cep, telefone_fixo, celular, email) VALUES('$nome', '$cpf', '$identidade', '$o_emissor', '$matricula', '$genero', '$periodo', '$dt_nascimento','$idioma', '$nome_curso', '$rua', '$complemento', '$bairro', '$cidade', '$uf', '$cep', '$telefone_fixo', '$celular','$email')";
			
			//montar a query - para tabela inscricao
			$sqlInscricao ="INSERT INTO inscricao(dias_disponiveis, turno_disponivel, como_conheceu, status_inscricao, dt_inscricao, nome_projeto, cpf_aluno) VALUES('$dias_disponiveis', '$turno_disponivel', '$como_conheceu','$status_inscricao','$data_inscricao','$nome_projeto','$cpf')";

			//Executa as queries
			$affected_rows1 = $connection->executeCommand($sqlAluno);
			$affected_rows2 = $connection->executeCommand($sqlInscricao);

			if ($affected_rows1 > 0 && $affected_rows2 > 0) {
				$connection->closeConnection();
				header( "Location: ../CadastroAluno/index.php?msg=Aluno-Cadastro-Com-Sucesso");

			} else {
				$connection->closeConnection();
				echo 'Error Occurred - SQL';

			}
			
			

		} else {//Se for verdade o aluno, existe e não pode ser incluído novamente.
			
			header( "Location: ../CadastroAluno/index.php?msg=Aluno-ja-Cadastro");
		}


	} else {
		$intro = "Voce preicsa preencher as seguintes informacoes<br/>";
		echo $intro;
        
        foreach($data_missing as $missing){
            $intro .= ($missing."<br/>"."-");
		}
		header("Location: ../CadastroAluno/index.php?msg=$intro");
	}
}
?>