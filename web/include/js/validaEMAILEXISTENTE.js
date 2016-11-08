//Esse função irá verificar se o e-mail digitado pelo usuário já é existente na base de dados.
function VerificaSeExisteEmail(pEmail) {
	//criando uma nova requisição HTTP (Ajax)

	var objAjax = new XMLHttpRequest();

	//Configurar as opções de envio da requisição

	//(método de envio, destino, assíncrono)

	var url = '../verifica_email.php';

	objAjax.open('POST', url, true);

	//Monitorar o status da requisição

	objAjax.onreadystatechange = function() {

		//console.log(objAjax.readyState);

		//Se o readyState for 4, ou seja, já foi recebido uma resposta do servidor.
		//Se o status for 200, ou seja, a resposta foi OK e não houve nenhum erro na execução da página para onde a requisição foi enviada

		if((objAjax.readyState == 4) && (objAjax.status == 200)) {

			//Tratar a resposta que veio do servidor

			ExibeErroMsgSpan('spanErroEmail','labelEmail',objAjax.responseText);

		} else {

			//Inserindo o status recebido e a mensagem de texto correspondente ao status

			var erro = "Erro " + objAjax.status + ": " + objAjax.statusText;

			ExibeErroMsgSpan('spanErroEmail','labelEmail', erro);

		}

	}//fim do onreadystatechange

	//Configurando o cabeçalho HTTP que descreve o formato dos dados a serem enviados para o servidor, para que ele saiba interpretá-los da maneira correta. O formato 'application/x-www-form-urlencoded' dita que os dados irão codificados no mesmo padrão utilizado pelo método GET (chave1=valor1&chave2=valor2...), chamado de 'urlencoded' só que como estamos utilizando o método POST, os dados não serão colcoados na URL e sim enviados na função send() 

	objAjax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	//criando um valor númerico aleatório a ser enviado junto da requisição, para que a página que for solicitada não seja colocada em cache pelo navegador

	var codigo = Math.floor(Math.random() * 1000000000);

	//Enviando a requisição para o servidor, juntamente com os dados recuperados/criados (o email digitado pelo usuário para a validação e o código aleatório criado), usando como método e destino as opções configuradas na função open().

	objAjax.send('email='+pEmail+'&codigo='+codigo);


}//fim do VerificaSeExisteEmail