//Função de Validação dos dados
//do formulário de Cadastro Aluno

function ValidaCadastroAluno() {

	LimparMensagens();

	var msgAlert = '';

	var nome = document.getElementById('nome').value;

	if(nome == '') {

		msgAlert += _NomeObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroNome','labelnome', _NomeObrigatorio);

	}

	var cpf = document.getElementById('cpf').value;

	if(cpf == '') {

		msgAlert += _CpfObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroCpf','labelcpf', _CpfObrigatorio);

	}  else if(!ValidaCpf(cpf)) {

		msgAlert += _CpfInvalido + '\n';
		ExibeErroMsgSpan('spanErroCpf','labelcpf', _CpfInvalido);

	}
	
	var matricula = document.getElementById('matricula').value;

	if(matricula == '') {

		msgAlert += _MatriculaObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroMatricula','labelmatricula', _MatriculaObrigatorio);

	} 

	var dtNasc = document.getElementById('dtnasc').value;

	if(dtNasc == '') {

		msgAlert += _DtNascObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroDtNasc','labeldtnasc', _DtNascObrigatorio);

	} else if(!ValidaDtNasc(dtNasc)){

		msgAlert += _DtNascInvalida + '\n';
		ExibeErroMsgSpan('spanErroDtNasc','labeldtnasc', _DtNascInvalida);

	}
	
	var email = document.getElementById('email').value;

	if(email == '') {

		msgAlert += _EmailObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroEmail','labelEmail', _EmailObrigatorio);

	} else if (!ValidaEmail(email)) {

		msgAlert += _EmailInvalido + '\n';
		ExibeErroMsgSpan('spanErroEmail','labelEmail', _EmailInvalido);

	}
	
	var rua = document.getElementById('rua').value;

	if(rua == '') {

		msgAlert += _RuaObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroRua','labelrua', _RuaObrigatorio);

	}
	
	var complemento = document.getElementById('complemento').value;

	if(complemento == '') {

		msgAlert += _NumeroObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroComplemento','labelcomplemento', _ComplementoObrigatorio);

	}
	
	var bairro = document.getElementById('bairro').value;

	if(bairro == '') {

		msgAlert += _NumeroObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroBairro','labelbairro', _BairroObrigatorio);

	} 
	
	var cidade = document.getElementById('cidade').value;

	if(cidade == '') {

		msgAlert += _CidadeObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroCidade','labelcidade', _CidadeObrigatorio);

	}

	var cep = document.getElementById('cep').value;

	if(cep == '') {

		msgAlert += _CepObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroCep','labelcep', _CepObrigatorio);

	}
	
	var telefone_fixo = document.getElementById('telefone_fixo').value;

	if(telefone_fixo == '') {

		msgAlert += _TelefoneFixoObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroTelefoneFixo','labeltelefonefixo', _TelefoneFixoObrigatorio);

	}
	
	var nomeprojeto = document.getElementById('nomeprojeto').value;

	if(nomeprojeto == '') {

		msgAlert += _NomeProjetoObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroNomeProjeto','labelnomeprojeto', _NomeProjetoObrigatorio);

	} 
	
	var comoconheceu = document.getElementById('como_conheceu').value;

	if(comoconheceu == '') {

		msgAlert += _ComoConheceuObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroComoConheceu','labelcomoconheceu', _ComoConheceuObrigatorio);

	} 
	
	var dtinscricao = document.getElementById('dtinscricao').value;

	if(dtinscricao == '') {

		msgAlert += _DtInscricaoObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroDtInscricao','labeldatainscricao', _DtInscricaoObrigatorio);

	}

	//Testo se houve erro durante a validação
	//Retorno False se houver erro e imprimo as msg de validação

	if(msgAlert != ''){

		alert(msgAlert);

		//document.getElementById('divRetornoMsg').innerHTML = msgErroHtml;
		return false;

	}

	//Passei por todas as validação implementadas
	return true;

}//fim da funcao ValidaCadastro()