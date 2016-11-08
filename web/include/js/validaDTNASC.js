//Essa função irá validar uma data fornecida pelo usuário
//Verificará se ele é maior de 18 anos.
function ValidaDtNasc(pDtNasc){
	//0123456789
	//01/03/1990

	//Recupero o ano de nascimento digitado

	var anoNasc = pDtNasc.substring(6);	

	//crio um objeto de Date

	var dataAtual = new Date();//new Date().getFullYear();

	//Recupero o ano Atual

	var anoAtual = dataAtual.getFullYear();

	//Calculo a idade

	var idade = anoAtual - anoNasc;

	//testo se é menor de 18 anos

	if (idade < 18){

		return false;

	}

	//passou por todas as validações

	return true;	

}//fim da function validaDtNasc