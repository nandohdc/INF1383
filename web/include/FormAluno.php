<div class="container">
	<form method="post" action="../include/FormAluno_add.php" class="form-horizontal">
		<div class="row">
			<fieldset>
				<legend>Informações Pessoais</legend>
					<div class="col-xs-10 form-group row">
						<label for="example-text-input" id="labelnome" class="col-xs-10 col-form-label">Nome Completo<span class="obrigatorio">*</span>
						<input class="col-xs-8 form-control" name="nome" type="text" placeholder="Digite o seu nome completo" id="nome"></label>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-text-input" id="labelcpf" class="col-xs-10 col-form-label">CPF<span class="obrigatorio">*</span>
						<input class="col-xs-8 form-control" name="cpf" type="text" placeholder="Exemplo: xxxxxxxxx-xx" id="cpf"></label>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-text-input" id="labelident" class="col-xs-10 col-form-label">Identidade
						<input class="col-xs-8 form-control" name="identidade" type="text" placeholder="Exemplo xxxxxxxx-xx" id="identidade"></label>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-text-input" id="labeloemissor" class="col-xs-10 col-form-label">Órgão Emissor
						<input class="col-xs-8 form-control" name="o_emissor" type="text" placeholder="Exemplo: DETRAN" id="o_emissor"></label>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-number-input" id="labelmatricula" class="col-xs-10 col-form-label">Matrícula<span class="obrigatorio">*</span>
						<input class="col-xs-8 form-control" name="matricula" type="number" min="1" placeholder="Exemplo: xxxxxxx" id="matricula"></label>
					</div>
					<div class="col-xs-10 form-group row">
					<label for="example-select-input" class="col-xs-1 col-form-label">Gênero</label>
						<div class="col-xs-3">
							<select name="genero" class="form-control" id="genero">
								<option value="">Selecione</option>
								<option value="Masculino">Masculino</option>
								<option value="Feminino">Feminino</option>
								<option value="Outro">Outro</option>
							</select>
						</div>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-text-input" id="labeldtnasc" class="col-xs-10 col-form-label">Data de Nascimento<span class="obrigatorio">*</span>
						<input class="col-xs-8 form-control" name="dt_nascimento" type="text" maxlength="10" placeholder="Exemplo: xx/xx/xxxx" id="dtnasc"></label>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-number-input" id="labelperiodo" class="col-xs-10 col-form-label">Período<span class="obrigatorio">*</span>
						<input class="col-xs-8 form-control" name="periodo" type="number" min="1" max="20" placeholder="Digite o seu período" id="periodo"></label>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-select-input" class="col-xs-1 col-form-label">Idioma</label>
						<div class="col-xs-3">
							<select name="idioma" class="form-control" id="idioma">
								<option value="">Selecione</option>
								<option value="Alemão">Alemão</option>
								<option value="Espanhol">Espanhol</option>
								<option value="Francês">Francês</option>
								<option value="Inglês">Inglês</option>
							</select>
						</div>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-email-input" id="labelemail" class="col-xs-10 col-form-label">E-mail<span class="obrigatorio">*</span>
						<input class="col-xs-8 form-control" name="email" type="email" placeholder="Digite o seu email." id="email"></label>
					</div>
					<div class="col-xs-10 form-group row">
						<label for="example-email-input" id="labelnomecurso" class="col-xs-2 col-form-label">Nome do Curso<span class="obrigatorio">*</span></label>
						<div class="col-xs-5">			
								<?php
									require_once('../SqlManager.class.php');
									//criando conexao
									$connection = new SqlManager("connect");
									//montar a query
									$sql= "SELECT nome FROM curso;";
									//envia a query
									$result = $connection->executeRead($sql);
						  			echo "<select class='form-control' name='nome_curso' id='nome_curso'>";
									echo "<option value=''>Selecione</option>";
						  			foreach($result as $row){
										unset($id);
										$id = $row['nome'];
										echo '<option value="'.$id.'">'.$id.'</option>';
								
									}
									echo "</select>";	
								?>
					  </div>
					</div>					
			</fieldset>
		</div>
		<div class="row">
			<fieldset>
				<legend>Endereço</legend>
				<div class="col-xs-10 form-group row">
					<label for="example-text-input" id="labelrua" class="col-xs-10 col-form-label">Rua<span class="obrigatorio">*</span>
					<input class="col-xs-8 form-control" name="rua" type="text" placeholder="Digite o nome de sua rua" id="rua"></label>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-text-input" id="labelcomplemento" class="col-xs-10 col-form-label">Complemento<span class="obrigatorio">*</span>
					<input class="col-xs-8 form-control" name="complemento" type="text" placeholder="Digite o número de sua casa ou, prédio e apto." id="complemento"></label>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-text-input" id="labelbairro" class="col-xs-10 col-form-label">Bairro<span class="obrigatorio">*</span>
					<input class="col-xs-8 form-control" name="bairro" type="text" placeholder="Digite o seu bairro." id="bairro"></label>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-text-input" id="labelcidade" class="col-xs-10 col-form-label">Cidade<span class="obrigatorio">*</span>
					<input class="col-xs-8 form-control" name="cidade" type="text" placeholder="Digite a cidade onde mora." id="cidade"></label>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-select-input" class="col-xs-1 col-form-label">UF</label>
						<div class="col-xs-3">
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
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-text-input" id="labelcep" class="col-xs-10 col-form-label">CEP<span class="obrigatorio">*</span>
					<input class="col-xs-8 form-control" name="cep" type="text" placeholder="Exemplo: xxxxx-xxx" id="cep"></label>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-tel-input" id="labeltelefonefixo" class="col-xs-10 col-form-label">Telefone Fixo<span class="obrigatorio">*</span>
					<input class="col-xs-8 form-control" name="telefone_fixo" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="telefone_fixo"></label>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-tel-input" id="labelcelular" class="col-xs-10 col-form-label">Celular
					<input class="col-xs-8 form-control" name="celular" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="celular"></label>
				</div>
			</fieldset>
		</div>
		<div class="row">
			<fieldset>
				<legend>Informações da Inscrição</legend>
				<div class="col-xs-10 form-group row">
					<label for="example-text-input" id="labelnomeprojeto" class="col-xs-3 col-form-label">Nome do Projeto<span class="obrigatorio">*</span></label>
						<div class="col-xs-5">
							<?php
								require_once('../SqlManager.class.php');
								//criando conexao
								$connection = new SqlManager("connect");
								//montar a query
								$sql= "SELECT nome FROM projeto;";
								//envia a query
								$result = $connection->executeRead($sql);
								echo "<select class='form-control' name='nome_projeto'>";
								echo "<option value=''>Selecione</option>";
									foreach($result as $row){
												unset($id);
												$id = $row['nome'];
												echo '<option value="'.$id.'">'.$id.'</option>';

											}
								echo "</select>";
							?>
					</div>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-text-input" id="labelcomoconheceu" class="col-xs-10 col-form-label">Como Conheceu<span class="obrigatorio">*</span>
					<textarea class="col-xs-8 form-control" name="como_conheceu" id="como_conheceu" rows="3" maxlength="450"></textarea>
					<span>Caracteres restantes: <span id="counter">450</span></span>
					</label>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-checkbox-input" class="col-xs-10 col-form-label">Dias Disponiveis
					<input class="col-xs-8 form-control" name="dias_disponiveis" type="text" placeholder="Digite os dias em que poderá ser voluntário." id="dias_disponiveis"></label>
				</div>
				<div class="col-xs-10 form-group row">
					<label for="example-select-input" id="labelturnodisponivel" class="col-xs-2 col-form-label">Turno Disponível</label>
					<div class="col-xs-3">							
						<select class="form-control" name="turno_disponivel" id="turno_disponivel">
							<option value="">Selecione o turno</option>
							<option value="Manhã">Manhã</option>
							<option value="Tarde">Tarde</option>
							<option value="Noite">Noite</option>
						</select>
					</div>
				</div>
			</fieldset>
		</div>
			<div id="divRetornoMsg">
				<?php 
             			echo str_replace('-', ' ', @$_GET['msg']); 
              		?>
			</div>
			<div class="row text-center">
				<button type="" name="submit" class="btn btn-success" id="btn-submit">Enviar</button>
			</div>
			</div>
	</form>
	</div>