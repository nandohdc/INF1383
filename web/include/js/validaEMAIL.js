//Essa função irá se o e-mail é um válido, de acordo com o seguinte formato: xxxxx@xxxx.xxx
//Não significa que o e-mail é existente..
function ValidaEmail(pEmail) {

	var posArroba = pEmail.indexOf('@');
	var posPonto = pEmail.indexOf('.',posArroba);

	//testo se existe arroba

	if(posArroba == -1) {

		return false;

	}

	//testo se o arroba é primeiro ou o último caractere

	if((posArroba == 0)||(posArroba == pEmail.length-1)) {

		return false;

	}

	//testo se tem um ponto depois arroba

	if((posPonto == -1)) {

		return false;

	}

	//testo se tem um ponto seguido do arroba @. 
	//ou se o ponto é o último caracteres

   if((posPonto == posArroba+1)||(posPonto == pEmail.length-1)) {

		return false;

	}

	//Passou por todas as validações

	return true;

}//fim do ValidaEmail// JavaScript Document