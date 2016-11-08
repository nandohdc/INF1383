//Essa função irá validar se o CPF respeita as regras de um CPF válido.
//Não significa que é um CPF existente.

function ValidaCpf(pCpf) {

	//pCpf possui o valor do CPF que foi passado por parâmetro

	

	//testo se o CPF não possui 11 digitos 

	if((pCpf.length != 11)||(pCpf ==12345678909)){

		return false;

	}

	

	//testo se o número digitado é um número inválido de CPF

	

	for (var i=00000000000;i<=99999999999;i=i+11111111111) {

		if(pCpf == i){

			return false;

		}

	}

	//Calculo do 1º Digito Verificador
	//012345678910

	var soma = 0;

	for (var i = 0;i<=8;i++){

		soma = soma + pCpf.charAt(i)*(10-i);

	}
	

	var resto = soma % 11;

	if(resto < 2){

		var dv1 = 0;	

	} else {

		var dv1	= 11 - resto;

	}

	//Testo se o dv1 encontrado é igual ao digitado

	if(dv1 != pCpf.charAt(9)){

		return false;

	}

	//Calculo do 2º Digito Verificador

	var soma = ((pCpf.charAt(0)*11) +

				(pCpf.charAt(1)*10) +

				(pCpf.charAt(2)*9) +

				(pCpf.charAt(3)*8) +

				(pCpf.charAt(4)*7) +

				(pCpf.charAt(5)*6) +

				(pCpf.charAt(6)*5) +

				(pCpf.charAt(7)*4) +

				(pCpf.charAt(8)*3) +

				(pCpf.charAt(9)*2) );

	

	var resto = soma % 11;

	if(resto < 2){

		var dv2 = 0;	

	} else {

		var dv2	= 11 - resto;

	}

	

	//Testo se o dv1 encontrado é igual ao digitado

	if(dv2 != pCpf.charAt(10)){

		return false;

	}

	

	//passou por todas as validações	

	return true;

	

}//fim da funçãoo ValidaCpf