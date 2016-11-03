<?php
if(isset($_POST['submit'])){
	
	//criando vetor para saber se todas as informacoes do formulários foram preenchidas.
	$data_missing = array();
	
	if(empty($_POST['razao_social'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Razao Social';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$razao_social = trim($_POST['razao_social']);
		
	}
	
	if(empty($_POST['nome_fantasia'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Nome Fantasia';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$nome_fantasia = trim($_POST['nome_fantasia']);
		
	}
	
	if(empty($_POST['email_instituicao'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'E-mail Instituicao';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$email_instituicao = trim($_POST['email_instituicao']);
		
	}
	
	if(empty($_POST['nome_RP'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Nome do Relacoes Publicas';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$nome_RP = trim($_POST['nome_RP']);
		
	}
	
	if(empty($_POST['email_RP'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'E-mail Relacoes Publicas';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$email_RP = trim($_POST['email_RP']);
		
	}
	
	if(empty($_POST['ano_fundacao'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Ano de fundacao';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$ano_fundacao = trim($_POST['ano_fundacao']);
		
	}
	
	if(empty($_POST['website'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Website';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$website = trim($_POST['website']);
		
	}
	
	if(empty($_POST['vinculo'])){
		
		//adiciona o nome do campo nao preenchido
		$data_missing[] = 'Vinculo';
		
	} else{
		//Caso a informacao tenha sido preenchida corretamente, armazenamos numa variavel.
		$vinculo = trim($_POST['vinculo']);
		
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
	
	if(empty($data_missing)){
		
		require_once('../SqlManager.class.php');
		
		//criando conexao
		$connection = new SqlManager("connect");
		
		//montar a query
		$sql = "INSERT INTO instituicao(nome_fantasia, razao_social, ano_fundacao, website, vinculo, qtd_membros, nome_rp, email_rp, email_instituicao, rua, complemento, bairro, cidade, uf, cep) VALUES('$nome_fantasia', '$razao_social', '$ano_fundacao', '$website', '$vinculo', '$qtd_membros', '$nome_RP', '$email_RP', '$email_instituicao', '$rua', '$complemento', '$bairro', '$cidade', '$uf', '$cep', '$telefone_fixo', '$celular')";
		
		echo $query; die;
		$affected_rows = $connection->executeCommand($sql);
		
	}
	
	if(!$affected_rows){
		
		echo 'Query não executada - Retorno vazio\n';
		
	}
	
	if($affected_rows > 0){
	
		$connection->closeConnection();
		
	} else{
	
		echo 'Error Occurred - SQL';
		$connection->closeConnection();
	
	}
	
} else{
	
	echo 'Voce preicsa preencher as seguintes informacoes<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
		}
}
?>