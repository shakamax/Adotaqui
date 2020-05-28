<?php 
  include('layout/header.php');
  include('layout/menu.php');

 ?>
<div class="container conteudo">
	<div class="card">
		<div class="card-header pintado text-center">
			<h2 class="text-white">
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
							<input id="nome" type="text" placeholder="João Machado" name="nome" class="form-control">
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
					<div class="col-sm-12 col-md-4">
						<div class="col-12">&nbsp;</div>
						<label>Celular : </label>
						<input type="text" placeholder="(99) 9 9999-9999" name="celular" class="form-control telefone">
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="col-12">&nbsp;</div>
						<label>Telefone fixo : </label>
						<input type="text" placeholder="(99) 9999-9999" name="fixo" class="form-control fixo">
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="col-12">&nbsp;</div>
						<label>CPF : </label>
						<input type="text" placeholder="999.999.999-99" name="fixo" class="form-control cpf">
					</div>
				</div>	
				<div class="form-row">
					<div class="col-sm-12 col-md-6">
						<div class="col-12">&nbsp;</div>
						<label>CEP : </label>
						<input type="text" id="cep" name="cep" class="form-control">
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="col-12">&nbsp;</div>
						<label>Estado : </label>
						<select class="form-control" id="uf">
							<option value="">Escolha seu estado</option>
							<option id="AC" value="AC">Acre</option>
						    <option id="AL" value="AL">Alagoas</option>
						    <option id="AP" value="AP">Amapá</option>
						    <option id="AM" value="AM">Amazonas</option>
						    <option id="BA" value="BA">Bahia</option>
						    <option id="CE" value="CE">Ceará</option>
						    <option id="DF" value="DF">Distrito Federal</option>
						    <option id="ES" value="ES">Espírito Santo</option>
						    <option id="GO" value="GO">Goiás</option>
						    <option id="MA" value="MA">Maranhão</option>
						    <option id="MT" value="MT">Mato Grosso</option>
						    <option id="MS" value="MS">Mato Grosso do Sul</option>
						    <option id="MG" value="MG">Minas Gerais</option>
						    <option id="PA" value="PA">Pará</option>
						    <option id="PB" value="PB">Paraíba</option>
						    <option id="PR" value="PR">Paraná</option>
						    <option id="PE" value="PE">Pernambuco</option>
						    <option id="PI" value="PI">Piauí</option>
						    <option id="RJ" value="RJ">Rio de Janeiro</option>
						    <option id="RN" value="RN">Rio Grande do Norte</option>
						    <option id="RS" value="RS">Rio Grande do Sul</option>
						    <option id="RO" value="RO">Rondônia</option>
						    <option id="RR" value="RR">Roraima</option>
						    <option id="SC" value="SC">Santa Catarina</option>
						    <option id="SP" value="SP">São Paulo</option>
						    <option id="SE" value="SE">Sergipe</option>
						    <option id="TO" value="TO">Tocantins</option>
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
						<div class="col-sm-12">&nbsp;</div>
						<label>Cidade : </label>
						<input type="text" id="localidade" name="cidade" class="form-control">
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="col-sm-12">&nbsp;</div>
						<label>bairro</label>
						<input type="text" id="bairro" name="bairro" class="form-control">
					</div>
				</div>
				<div class="col-sm-12">&nbsp;</div>

				<div class="form-row">
					<div class="col-12 text-center">
						<button class="btn btn-success btn-gradient-success col-6">Salvar mudanças</button>
						
					</div>
				</div>
					
			</form>
			<form class="form-group login" style="display: none;">
				<div class="form-row">
					<div class="col-sm-12 text-center">
						<label>Email</label>
						<input type="email" name="email" value="seuemail@email.com" disabled="" class="form-control text-center">
					</div>
					<div class="col-12">&nbsp;</div>
					<div class="col-sm-12 text-center">
						<button type="button" class="btn btn-success btn-gradient-success col-6" data-toggle="modal" data-target="#modalEmail">
						  Mudar e-mail
						</button>

					</div>
					<div class="col-12">&nbsp;</div>
					<div class="col-sm-12 text-center">
						<label>OU</label>
						<div class="col-12">&nbsp;</div>
						<button type="button" class="btn btn-warning btn-gradient-warning col-6" data-toggle="modal" data-target="#modalSenha">Mudar a senha  <i class="far fa-key"></i></button>
					</div>
				</div>
			</form>


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


			




		</div>
	</div>
</div>

<?php 
  include('layout/footer.php');
 ?>

<script type="text/javascript">

$(document).ready(function(){
	$("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
	$('#nome').focus();	
});
</script>