<div class="container">
	<form method="post" action="../include/FormInstituicao_add.php" id="formInstituicao" role="" class="form-horizontal">
		<div class="row">
			<fieldset>
				<legend>Informações Institucionais</legend>
				<div class="form-group row">
					<div class="col-xs-2">
						<label for="example-text-input" label="labelrazaosocial" class="col-xs-3 col-form-label">Razão Social<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-9">
						<input class="form-control" type="text" name="razao_social"placeholder="Digite a razão social." id="razaosocial">
					  </div>
                  </label>
					</div>
					<div class="form-group row">
						<div class="col-xs-2">
							<label for="example-text-input" label="labelnomefantasia" class="col-xs-3 col-form-label">Nome Fantasia</label>
						</div>
						<div class="col-xs-9">
							<input class="form-control" type="text" name="nome_fantasia" placeholder="Digite o nome fantasia" id="nomefantasia">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-2">
							<label for="example-email-input" label="labelemailinstituicao" class="col-xs-3 col-form-label">E-mail da Instiuição:<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-9">
						<input class="form-control" name="email_instituicao" type="email" placeholder="Digite o e-mail da instituição" id="emailinstituicao">
					  </div>
                  </label>
						</div>
						<div class="form-group row">
							<div class="col-xs-2">
								<label for="example-text-input" label="labelnomerp" class="col-xs-3 col-form-label">Nome do Relações Públicas:
                  </div>
                  <div class="col-xs-9">
                    <input class="form-control" name="nome_RP" type="text" placeholder="Digite o nome do Relações Públicas" id="nomerp">
                  </div>
                  </label>
							</div>
							<div class="form-group row">
								<div class="col-xs-2">
									<label for="example-email-input" label="labelemailrp" class="col-xs-3 col-form-label">E-mail do Relações Puúblicas:
                  </div>
                  <div class="col-xs-9">
                    <input class="form-control" name="email_RP" type="email" placeholder="Digite o e-mail do Relações Públicas" id="emailrp">
                  </div>
                  </label>
								</div>
								<div class="form-group row">
									<div class="col-xs-2">
										<label for="example-text-input" label="labelqtdmembros" class="col-xs-2 col-form-label">Quantidade de Membros:<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="qtd_membros" type="number" placeholder="Exemplo: 1,2,3,.." id="qtdmembros">
					  </div>
                  </label>
									</div>
									<div class="form-group row">
										<div class="col-xs-2">
											<label for="example-text-input" label="labelanofundacao" class="col-xs-2 col-form-label">Ano de Fundação:<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="ano_fundacao" type="text" placeholder="Exemplo: xxxxx" id="anofundacao">
					  </div>
                  </label>
										</div>
										<div class="form-group row">
											<div class="col-xs-2">
												<label for="example-url-input" label="labelwebsite" class="col-xs-2 col-form-label">Website:</label>
											</div>
											<div class="col-xs-10">
												<input class="form-control" name="website" type="url" placeholder="Exemplo: www.xxxxx.com.br" id="website">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-2">
												<label for="example-text-input" label="labelvinculo" class="col-xs-2 col-form-label">Vínculo:<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<textarea name="vinculo" maxlength="150" class="form-control" id="vinculo" rows="3"></textarea>
						<span>Caracteres restantes: <span id="counter">150</span></span>
					  </div>
                  </label>
											</div>
			</fieldset>
			<fieldset>
				<legend>Endereço</legend>
				<div class="form-group row">
					<div class="col-xs-2">
						<label for="example-text-input" label="labelrua" class="col-xs-2 col-form-label">Rua<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="rua" type="text" placeholder="Digite o nome da rua." id="rua">
					  </div>
                  </label>
					</div>
					<div class="form-group row">
						<div class="col-xs-2">
							<label for="example-text-input" label="labelcomplemento" class="col-xs-2 col-form-label">Complemento<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="complemento" type="text" placeholder="Digite o complemento da instituição." id="complemento">
					</div>
                  </label>
						</div>
						<div class="form-group row">
							<div class="col-xs-2">
								<label for="example-text-input" label="labelbairro" class="col-xs-2 col-form-label">Bairro<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="bairro" type="text" placeholder="Digite o bairro onde a instituição se situa." id="bairro">
					  </div>
                  </label>
							</div>
							<div class="form-group row">
								<div class="col-xs-2">
									<label for="example-text-input" label="labelcidade" class="col-xs-2 col-form-label">Cidade<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="cidade" type="text" placeholder="Digite a cidade onde a instituição se situa." id="cidade">
					  </div>
                  </label>
								</div>
								<div class="form-group row">
								<div class="col-xs-2">
									<label for="example-select-input" class="col-xs-2 col-form-label">UF
										</div>
										<div class="col-xs-10">
											<select class="form-control" name="uf" id="">
												<option value="">Selecione</option>
												<option value="AC">Acre</option>
												<option value="AL">Alagoas</option>
												<option value="AP">Amapá</option>
												<option value="AM">Amazonas</option>
												<option value="BA">Bahia</option>
												<option value="CE">Ceará</option>
												<option value="DF">Distrito Federal</option>
												<option value="ES">Espirito Santo</option>
												<option value="GO">Goiás</option>
												<option value="MA">Maranhão</option>
												<option value="MS">Mato Grosso do Sul</option>
												<option value="MT">Mato Grosso</option>
												<option value="MG">Minas Gerais</option>
												<option value="PA">Pará</option>
												<option value="PB">Paraíba</option>
												<option value="PR">Paraná</option>
												<option value="PE">Pernambuco</option>
												<option value="PI">Piauí</option>
												<option value="RJ">Rio de Janeiro</option>
												<option value="RN">Rio Grande do Norte</option>
												<option value="RS">Rio Grande do Sul</option>
												<option value="RO">Rondônia</option>
												<option value="RR">Roraima</option>
												<option value="SC">Santa Catarina</option>
												<option value="SP">São Paulo</option>
												<option value="SE">Sergipe</option>
												<option value="TO">Tocantins</option>
											</select>
										</div>
								</label>
								</div>
								<div class="form-group row">
									<div class="col-xs-2">
										<label for="example-text-input" label="labelcep" class="col-xs-2 col-form-label">CEP<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="cep" type="text" placeholder="Exemplo: xxxxx-xxx" id="cep">
					  </div>
                  </label>
									</div>
									<div class="form-group row">
										<div class="col-xs-2">
											<label for="example-tel-input" label="labeltelefonefixo" class="col-xs-2 col-form-label">Telefone Fixo<span class="obrigatorio">*</span>
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="telefone_fixo" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="telefonefixo">
					  </div>
                  </label>
										</div>
										<div class="form-group row">
											<div class="col-xs-2">
												<label for="example-tel-input" label="labelcelular" class="col-xs-2 col-form-label">Celular
                  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="celular" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="celular">
					  </div>
                  </label>
											</div>
			</fieldset>
			<div id="divRetornoMsg">
				<?php 
             			echo str_replace('-', " ", @$_GET['msg']);
              		?>
			</div>
			<div class="row text-center">
				<button type="" name="submit" class="btn btn-success" id="btn-submit">Enviar</button>
			</div>
			</div>
	</form>
	</div>