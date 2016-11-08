//Essa função irá checar os campos preenchidos e avisar se não forem preenchidos.
$(document).ready(function(){
	
	$('#btn-submit').click(function(){
		if(ValidaCadastroInstituicao()){
			$('#formInstituicao').submit();
		}
	});
	
	$('#emailinstituicao').blur(function(){
		VerificaSeExisteEmail($(this).value);
	});
	
	$('#vinculo').keyup(function(){
		
		var qtd = $(this).val().length;
		var maxNum = $(this).attr('maxlength');
		var left = maxNum - qtd;
		$('#counter').html(left);
	});
	
	$('.form-control').bind({

		blur : function(){

			if($(this).attr('id') != "celular") {

				TrataSaida($(this).attr('id'), true);

			} else {

				TrataSaida($(this).attr('id'), false);

			}

		},

		focus : function(){

			TrataFoco($(this).attr('id'));

		}

	});
	
	$('#cep').blur(function(){		

		$('#spanErroCep').remove();
		if($(this).val().length == 8){

			$.ajax({

					url : 'http://viacep.com.br/ws/'+$(this).val()+'/json/',
					dataType: 'json',
					success : function(dados, textStatus){

						if(!dados.erro){

							$('#rua').val(dados.logradouro);
							$('#cidade').val(dados.localidade);
							$('#bairro').val(dados.bairro);
							$('#complemento').trigger('focus');

						} else {

							$('#rua, #cidade, #bairro').val('');
						}					
					}
				});

			} else {

				ExibeErroMsgSpan('spanErroCep','labelCep', _CepInvalido);

			}

	});
	
	
	
});