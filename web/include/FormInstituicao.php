<div class="container">
    <form method="post" action="../include/FormInstituicao_add.php" role="" class="form-horizontal">
        <div class="row">
            <fieldset>
                <legend>Informações Institucionais</legend>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Razão Social</label>
                  <div class="col-xs-10">
                    <input class="form-control" type="text" name="razao_social"placeholder="Digite a razão social." id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Nome Fantasia</label>
                  <div class="col-xs-10">
                    <input class="form-control" type="text" name="nome_fantasia" placeholder="Digite o nome fantasia" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-2 col-form-label">E-mail da Instiuição:</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="email_instituicao" type="email" placeholder="Digite o e-mail da instituição" id="example-email-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Nome do Relações Públicas:</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="nome_RP" type="text" placeholder="Digite o nome do Relações Públicas" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-2 col-form-label">E-mail do Relações Puúblicas:</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="email_RP" type="email" placeholder="Digite o e-mail do Relações Públicas" id="example-email-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Ano de Fundação:</label>
                  <div class="col-xs-10">
					<input class="form-control" name="ano_fundacao" type="text" placeholder="Exemplo: xxxxx" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-2 col-form-label">Website:</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="website" type="url" placeholder="Exemplo: www.xxxxx.com.br" id="example-url-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Vínculo:</label>
                  <div class="col-xs-10">
                    <textarea name="vinculo" maxlength="150" class="form-control" rows="3"></textarea>
                  </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Endereço</legend>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Rua</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="rua" type="text" placeholder="Digite o nome da rua." id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Complemento</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="complemento" type="text" placeholder="Digite o complemento da instituição." id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Bairro</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="bairro" type="text" placeholder="Digite o bairro onde a instituição se situa." id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Cidade</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="cidade" type="url" placeholder="Digite a cidade onde a instituição se situa." id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-tel-input" class="col-xs-2 col-form-label">UF</label>
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
                  <label for="example-text-input" class="col-xs-2 col-form-label">CEP</label>
                  <div class="col-xs-10">
 					<input class="form-control" name="cep" type="text" placeholder="Exemplo: xxxxx-xxx" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-tel-input" class="col-xs-2 col-form-label">Telefone Fixo</label>
                  <div class="col-xs-10">
 					<input class="form-control" name="telefone_fixo" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="example-tel-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-tel-input" class="col-xs-2 col-form-label">Celular</label>
                  <div class="col-xs-10">
 					<input class="form-control" name="telefone_fixo" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="example-tel-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">IP do Usuário:</label>
                  <div class="col-xs-10">
                	<input type="hidden" value="<?= $_SERVER["REMOTE_ADDR"];?>" name="IPUsertxt" readonly id="ipUsu"/>
                </label>
                  </div>
                </div>
            </fieldset>
             <div class="row text-center">
               <button type="submit" name="submit" class="btn btn-success" id="btn-submit">Enviar</button>
            </div> 
        </div>
    </form>
</div>