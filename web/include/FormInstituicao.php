<div class="container">
    <form method="post" action="../include/FormInstituicao_add.php" role="" class="form-horizontal">
        <div class="row">
            <fieldset>
                <legend>Informações Institucionais</legend>
                <div class="form-group row">
                  <label for="example-text-input" class="col-xs-2 col-form-label">Razão Social</label>
                  <div class="col-xs-10">
                    <input class="form-control" type="text" name="razao_social"placeholder="Digite o seu nome completo" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-xs-2 col-form-label">Nome Fantasia</label>
                  <div class="col-xs-10">
                    <input class="form-control" type="text" name="nome_fantasia" placeholder="Exemplo: xxxxxxxxx-xx" id="example-search-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-2 col-form-label">E-mail da Instiuição:</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="email_instituicao" type="text" placeholder="Exemplo xxxxxxxx-xx" id="example-email-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-2 col-form-label">Nome do Relações Públicas:</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="nome_RP" type="text" placeholder="Exemplo: Joao Bobo" id="example-url-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-tel-input" class="col-xs-2 col-form-label">E-mail do Relações Puúblicas:</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="email_RP" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="example-tel-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-password-input" class="col-xs-2 col-form-label">Ano de Fundação:</label>
                  <div class="col-xs-10">
					<input class="form-control" name="ano_fundacao" type="text" placeholder="Exemplo: (xx)xxxx-xxxx" id="example-tel-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-number-input" class="col-xs-2 col-form-label">Website:</label>
                  <div class="col-xs-10">
                    <input class="form-control" name="website" type="text" placeholder="Exemplo: xx/xx/xxxx" id="example-number-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Vínculo:</label>
                  <div class="col-xs-10">
                    <textarea name="vinculo" class="form-control" rows="3"></textarea>
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
                    <input class="form-control" name="cidade" type="url" placeholder="Digite a cidade onde mora." id="example-url-input">
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
                <div class="form-group row">
                  <label for="example-password-input" class="col-xs-2 col-form-label">IP do Usuário:</label>
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