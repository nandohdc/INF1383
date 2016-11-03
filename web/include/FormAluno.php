<div class="container">
    <form method="post" action="include/FormAluno_add.php" role="" class="form-horizontal">
        <div class="row">
            <fieldset>
                <legend>Informações Pessoais</legend>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Nome Completo</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="nome" type="text" placeholder="Digite o seu nome completo" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-xs-2 col-form-label">CPF</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="cpf" type="text" placeholder="Exemplo: xxxxxxxxx-xx" id="example-search-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-2 col-form-label">Identidade</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="identidade" type="text" placeholder="Exemplo xxxxxxxx-xx" id="example-email-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-2 col-form-label">Órgão Emissor</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="o_emissor" type="text" placeholder="Exemplo: DETRAN" id="example-url-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-tel-input" class="col-xs-2 col-form-label">Matrícula</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="matricula" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="example-tel-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-password-input" class="col-xs-2 col-form-label">Gênero</label>
                  <div class="col-xs-10">
                       <select name="genero" class="form-control" id="">
                       		<option>Masculino</option>
                       		<option>Feminino</option>
                       </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-number-input" class="col-xs-2 col-form-label">Data de Nascimento</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="dt_nascimento" type="text" placeholder="Exemplo: xx/xx/xxxx" id="example-number-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Período</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="periodo" type="number" placeholder="Digite o seu período" id="example-datetime-local-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-date-input" class="col-xs-2 col-form-label">E-mail</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="email" type="email" placeholder="Digite o seu email." id="example-date-input">
                  </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Endereço</legend>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Rua</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="rua" type="text" placeholder="Digite o nome de sua rua" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-xs-2 col-form-label">Complemento</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="complemento" type="text" placeholder="Digite o número de sua casa ou, prédio e apto." id="example-search-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-2 col-form-label">Bairro</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="bairro" type="text" placeholder="Digite o seu bairro." id="example-email-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-2 col-form-label">Cidade</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="cidade" type="text" placeholder="Digite a cidade onde mora." id="example-url-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-tel-input" class="col-xs-2 col-form-label">UF</label>
                  <div class="col-xs-10">
                       <select class="form-control" name="uf" id="">
                       		<option>RJ</option>
                       		<option>SP</option>
                       </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-password-input" class="col-xs-2 col-form-label">CEP</label>
                  <div class="col-xs-10">
 					<input class="form-control" name="cep" type="text" placeholder="Exemplo: xxxxx-xxx" id="example-number-input">
                  </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Informações da Inscrição</legend>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Nome do Projeto</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="nome_projeto" type="text" placeholder="Digite o seu nome completo" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-xs-2 col-form-label">Como Conheceu</label>
                  <div class="col-xs-10">
                    <textarea class="form-control" name="como_conheceu" rows="3"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-2 col-form-label">Dias Disponiveis</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="dias_disponiveis" type="text" placeholder="Exemplo xxxxxxxx-xx" id="example-email-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-2 col-form-label">Turno Disponível</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="turno_disponivel" type="text" placeholder="Exemplo: DETRAN" id="example-url-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-tel-input" class="col-xs-2 col-form-label">Data de Inscrição</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="dt_inscricao" type="text" placeholder="Exemplo: xx/xx/xxxxx" id="example-tel-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-password-input" class="col-xs-2 col-form-label">Status Inscrição</label>
                  <div class="col-xs-10">
					<input class="form-control" name="status_inscricao" type="text" placeholder="Exemplo: aprovado, em andamento, aprovada." id="example-tel-input">
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
             <div class="row text-center">
               <button type="submit" class="btn btn-success" id="btn-submit">Enviar</button>
            </div> 
        </div>
    </form>
</div>