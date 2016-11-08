function TrataSaida(pIdElemento, obrigatorio) {

	if((gebi(pIdElemento).value == '')&&(obrigatorio)){
		
		gebi(pIdElemento).className = 'form-control required';
	} else {	
		gebi(pIdElemento).className = 'form-control normal';
	}

}//fim do TrataSaida

function TrataFoco(pIdElemento){
	gebi(pIdElemento).className += ' focus';
}//fim do TrataFoco

function gebi(pId) {
	return document.getElementById(pId);
}//fim da function gebi

function ExibeErroMsgSpan(pId, pElemPai, pErroMsg) {

	if(gebi(pId) == null) {

		//<span></span>
		var elem = document.createElement('span');
		//<span id="spanErroNome"></span>
		elem.id = pId;
		//<span id="spanErroNome" class="obrigatorio"></span>
		elem.className = 'obrigatorio';
		gebi(pElemPai).appendChild(elem);

	}

	gebi(pId).innerHTML = pErroMsg;	

}//fim do ExibeMsgErroSpan

function LimparMensagens() {

	var elem = document.querySelectorAll('#formAluno label span:nth-child(4)');

	//console.log(elem);

	for(var i=0; i<elem.length;i++) {

		elem[i].remove();

	}

}//fim do LimparMensagens