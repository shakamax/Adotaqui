<?php 
  include('layout/header.php');
  include('layout/menu.php');

 ?>
<div class="container conteudo">
	<div class="card">
		<div class="card-header pintado text-center">
			<h2>
				Atualizando informações de perfil
			</h2>
		</div>
		<div class="card-body">
			<div class="row">
				<div id="btnDados" class="col-6 btn btn-default selecionado">Suas informações</div>
				<div id="btnConta" class="col-6 btn btn-default btn-list">Sua conta</div>
			</div>
			<div class="col-12">&nbsp;</div>

			<form class="form-group dados">
				<div class="form-row">
					<div class="col-sm-12 col-md-8">
						<div class="col-12">
							<label for="nome">Nome : </label>
							<input type="text" placeholder="João Machado" name="nome" class="form-control">
						</div>
						<div class="col-12">&nbsp;</div>
						<div class="col-12">
							<label>Data de nascimento : </label>
							<input type="date" class="form-control" name="dtNasc">
							<div class="col-sm-12">&nbsp;</div>

						</div>
					</div>

					<div class="col-sm-12 col-md-4">

						<div class="dflex justify-content-center text-center">
							<img src="img/profile-user.svg" class="img-fluid avatarh">
							<div class="btn btn-success btn-gradient-success btn-rounded">
								<input class="custom-file-input form-control-file" type="file" id="avatar"><span>Mudar foto</span> </input>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-sm-12 col-md-6">
						<label>CEP</label>
						<input type="text" id="cep" name="cep" class="form-control">
					</div>
					<div class="col-sm-12 col-md-6">
						<label>Estado : </label>
						<select class="js-example-basic-single form-control" id="uf" name="uf">
							<option value="">Escolha seu estado</option>
							<option value="AC">Acre</option>
						    <option value="AL">Alagoas</option>
						    <option value="AP">Amapá</option>
						    <option value="AM">Amazonas</option>
						    <option value="BA">Bahia</option>
						    <option value="CE">Ceará</option>
						    <option value="DF">Distrito Federal</option>
						    <option value="ES">Espírito Santo</option>
						    <option value="GO">Goiás</option>
						    <option value="MA">Maranhão</option>
						    <option value="MT">Mato Grosso</option>
						    <option value="MS">Mato Grosso do Sul</option>
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
						<div class="col-sm-12">&nbsp;</div>

					</div>
					
				</div>
				<div class="form-row">
					<div class="col-sm-12">
						<label>Endereço : </label>
						<input type="text" id="logradouro" class="form-control" name="end">
					</div>
				</div>
				<div class="form-row">
					<div class="col-sm-12 col-md-6">
						<label>Cidade : </label>
						<input type="text" id="localidade" name="cidade" class="form-control">
						<div class="col-sm-12">&nbsp;</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<label>bairro</label>
						<input type="text" id="bairro" name="bairro" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="col-12 text-center">
						<button class="btn btn-success btn-gradient-success">Salvar mudanças</button>
						
					</div>
				</div>
					
			</form>
			<form class="form-group login" style="display: none;">
				<div class="form-row">
					<div class="col-sm-12 text-center">
						<label>Email</label>
						<input type="email" name="email" value="seuemail@email.com" disabled="" class="form-control">
					</div>
					<div class="col-12">&nbsp;</div>
					<div class="col-sm-12 text-center">
						<button type="button" class="btn btn-success btn-gradient-success" data-toggle="modal" data-target="#modalEmail">
						  Mudar e-mail
						</button>

					</div>
					<div class="col-12">&nbsp;</div>
					<div class="col-sm-12 text-center">
						<label>Deseja mudar a sua senha?</label>
						<div class="col-12">&nbsp;</div>
						<button class="btn btn-warning btn-gradient-warning" data-toggle="modal" data-target="#modalSenha">Mudar a senha  <i class="far fa-key"></i></button>
					</div>
				</div>
			</form>


			<div class="modal fade" id="modalSenha" tabindex="-1" role="dialog" aria-labelledby="ModalSenha" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="ModalEmail">Mudar o seu e-mail.</h5>
							<button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form class="form-group">
								<div class="form-row text-center">
									<div class="col">
										<label>Digite a sua senha atual</label>
										<input type="password" name="senhaAtual" class="form-control" required>
									</div>
								</div>
								<div class="col-12">&nbsp;</div>
								<div class="form-row text-center">
									<div class="col">
										<label>Digite sua nova senha</label>
										<input type="password" name="senha" class="form-control" required>
									</div>
								</div>
								<div class="col-12">&nbsp;</div>
								<div class="form-row text-center">
									<div class="col">
										<label>Confirme a sua senha</label>
										<input type="password" name="senha2" class="form-control" required="">
									</div>
								</div>
								<div class="col-12">&nbsp;</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							<button type="submit" class="btn btn-success btn-gradient-success">Salvar</button>
							
							</form>

						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="ModalEmail" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="ModalEmail">Mudar o seu e-mail.</h5>
							<button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form class="form-group">
								<div class="form-row text-center">
									<div class="col">
										<label>Seu novo e-mail</label>
										<input type="email" placeholder="email@email.com" name="email" class="form-control" required>
									</div>
								</div>
								<div class="col-12">&nbsp;</div>
								<div class="form-row text-center">
									<div class="col">
										<label>Confirme seu e-mail</label>
										<input type="email" name="email2" class="form-control">
									</div>
								</div>
								<div class="col-12">&nbsp;</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							<button type="submit" class="btn btn-success btn-gradient-success">Salvar</button>
							
							</form>

						</div>
					</div>
				</div>
			</div>




		</div>
	</div>
</div>

<?php 
  include('layout/footer.php');
 ?>