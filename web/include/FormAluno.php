<div class="container">
    <form method="post" action="../include/FormAluno_add.php" id="formAluno" class="form-horizontal">
        <div class="row">
            <fieldset>
                <legend>Informações Pessoais</legend>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelnome" class="col-form-label">Nome Completo<span class="obrigatorio">*</span>
					  </div>
                  	<div class="col-xs-10">
                    	<input class="form-control" name="nome" type="text" placeholder="Digite o seu nome completo" id="nome">
                  	</div>
                  </label>	
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelcpf" class="col-form-label">CPF<span class="obrigatorio">*</span>
					  </div>
                  	<div class="col-xs-10">
                    	<input class="form-control" name="cpf" type="text" placeholder="Exemplo: xxxxxxxxx-xx" id="cpf">
                  	</div>
                  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelident" class="col-form-label">Identidade</label>
					</div>
                  <div class="col-xs-10">
                    <input class="form-control" name="identidade" type="text" placeholder="Exemplo xxxxxxxx-xx" id="identidade">
                  </div>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labeloemissor" class="col-form-label">Órgão Emissor</label>
					</div>
                  <div class="col-xs-10">
                    <input class="form-control" name="o_emissor" type="text" placeholder="Exemplo: DETRAN" id="o_emissor">
                  </div>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-number-input" id="labelmatricula" class="col-form-label">Matrícula<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="matricula" type="number" min="1" placeholder="Exemplo: xxxxxxx" id="matricula">
					  </div>
               	  </label>
                </div>
                <div class="form-group row">
                  <label for="example-select-input" class="col-xs-2 col-form-label">Gênero</label>
                  <div class="col-xs-10">
                       <select name="genero" class="form-control" id="">
                      		<option value="">Selecione</option>
                       		<option value="masculino">Masculino</option>
                       		<option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                       </select>
                  </div>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labeldtnasc" class="col-form-label">Data de Nascimento<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="dt_nascimento" type="text" maxlength="10" placeholder="Exemplo: xx/xx/xxxx" id="dtnasc">
					  </div>
               	  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-number-input" id="labelperiodo" class="col-form-label">Período<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="periodo" type="number" min="1" max="20" placeholder="Digite o seu período" id="periodo">
					  </div>
				  </label>       
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-email-input" id="labelemail" class="col-form-label">E-mail<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="email" type="email" placeholder="Digite o seu email." id="email">
					  </div>
                  </label>
                </div>
            </fieldset>
            <fieldset>
                <legend>Endereço</legend>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelrua" class="col-form-label">Rua<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="rua" type="text" placeholder="Digite o nome de sua rua" id="rua">
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelcomplemento" class="col-form-label">Complemento<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="complemento" type="text" placeholder="Digite o número de sua casa ou, prédio e apto." id="complemento">
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelbairro" class="col-form-label">Bairro<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="bairro" type="text" placeholder="Digite o seu bairro." id="bairro">
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelcidade" class="col-form-label">Cidade<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="cidade" type="text" placeholder="Digite a cidade onde mora." id="cidade">
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                  <label for="example-select-input" class="col-xs-2 col-form-label">UF</label>
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
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelcep" class="col-form-label">CEP<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="cep" type="text" placeholder="Exemplo: xxxxx-xxx" id="cep">
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-tel-input" id="labeltelefonefixo" class="col-form-label">Telefone Fixo<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="telefone_fixo" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="telefone_fixo">
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-tel-input" id="labelcelular" class="col-form-label">Celular</label>
					</div>
                  <div class="col-xs-10">
 					<input class="form-control" name="celular" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="celular">
                  </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Informações da Inscrição</legend>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelnomeprojeto" class="col-form-label">Nome do Projeto<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="nome_projeto" type="text" placeholder="Digite o seu nome completo" id="nomeprojeto">
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labelcomoconheceu" class="col-form-label">Como Conheceu<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<textarea class="form-control" name="como_conheceu" id="como_conheceu" rows="3" maxlength="450"></textarea>
						<span>Caracteres restantes: <span id="counter">450</span></span>
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                  <label for="example-checkbox-input" class="col-xs-2 col-form-label">Dias Disponiveis</label>
                  <div class="col-xs-10">
                    <input type="checkbox" name="segunda" value="segunda"> Segunda-Feira<br><br>
					<input type="checkbox" name="terca" value="terca"> Terça-Feira<br><br>
                    <input type="checkbox" name="quarta" value="quarta"> Quarta-Feira<br><br>
					<input type="checkbox" name="quinta" value="quinta"> Quinta-Feira<br><br>
                    <input type="checkbox" name="sexta" value="sexta"> Sexta-Feira<br><br>
					<input type="checkbox" name="sabado" value="sabado"> Sábado<br><br>
                    <input type="checkbox" name="domingo" value="domingo"> Domingo<br><br>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-select-input" id="labelturnodisponivel" class="col-xs-2 col-form-label">Turno Disponível</label>
                  <div class="col-xs-10">
					<select class="form-control" name="uf" id="">
							<option value="">Selecione o turno</option>
							<option value="manha">Manhã</option>
							<option value="tarde">Tarde</option>
                            <option value="noite">Noite</option>
                       </select>
                  </div>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" id="labeldatainscricao" class="col-form-label">Data de Inscrição<span class="obrigatorio">*</span>
					  </div>
					  <div class="col-xs-10">
						<input class="form-control" name="dt_inscricao" type="text" placeholder="Exemplo: xx/xx/xxxxx" id="dtinscricao">
					  </div>
                  </label>
                </div>
                <div class="form-group row">
                 <div class="col-xs-2">
                  <label for="example-text-input" class="col-form-label">Status Inscrição</label>
					</div>
                  <div class="col-xs-10">
					<input class="form-control" name="status_inscricao" type="text" placeholder="Exemplo: aprovado, em andamento, aprovada." id="example-text-input">
                  </div>
                </div>
                  <div class="form-group row">
                  <label for="example-password-input" class="col-xs-2 col-form-label">IP do Usuário:</label>
                  <div class="col-xs-10">
                	<input type="hidden" value="<?= $_SERVER["REMOTE_ADDR"];?>" name="ipuser" readonly id="ipUsu"/>
                </label>
                  </div>
                </div>
            </fieldset>
             	<div id="divRetornoMsg">
          			 <?php 
             			echo str_replace('-', ' ', @$_GET['msg']); 
              		?>                    
       			 </div>
             <div class="row text-center">
               <button type="submit" class="btn btn-success" id="btn-submit">Enviar</button>
            </div> 
        </div>
    </form>
</div>