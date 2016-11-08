//Função de Validação dos dados
//do formulário de Cadastro Aluno

function ValidaCadastroAluno() {

	LimparMensagens();

	var msgAlert = '';

	var razaosocial = document.getElementById('razaosocial').value;

	if(razaosocial == '') {

		msgAlert += _RazaoSocialObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroRazaoSocial','labelrazaosocial', _RazaoSocialObrigatorio);

	}

	var nomefantasia = document.getElementById('nomefantasia').value;

	if(nomefantasia == '') {

		msgAlert += _NomeFantasiaObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroNomeFantasia','labelnomefantasia', _NomeFantasiaObrigatorio);

	} 
	
	var emailinstituicao = document.getElementById('emailinstituicao').value;

	if(emailinstituicao == '') {

		msgAlert += _EmailInstituicaoObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroEmailInstituicao','labelemailinstituicao', _EmailInstituicaoObrigatorio);

	}  else if (!ValidaEmail(emailinstituicao)) {

		msgAlert += _EmailInvalido + '\n';
		ExibeErroMsgSpan('spanErroEmail','labelEmail', _EmailInvalido);

	}

	var qtdmembros = document.getElementById('qtdmembros').value;

	if(qtdmembros == '') {

		msgAlert += _QtdMembrosObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroQtdMembros','labelqtdmembros', _QtdMembrosObrigatorio);

	}
	
	var anofundacao = document.getElementById('anofundacao').value;

	if(anofundacao == '') {

		msgAlert += _AnoFundacaoObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroAnoFundacao','labelanofundacao', _AnoFundacaoObrigatorio);

	} 
	
	var website = document.getElementById('website').value;

	if(website == '') {

		msgAlert += _WebsiteObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroWebsite','labelwebsite', _WebsiteObrigatorio);

	}
	
	var vinculo = document.getElementById('vinculo').value;

	if(vinculo == '') {

		msgAlert += _VinculoObrigatorio + '\n';
		ExibeErroMsgSpan('spanErroVinculo','labelvinculo', _VinculoObrigatorio);

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