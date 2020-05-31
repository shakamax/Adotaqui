<?php 
  include('layout/header.php');
  include('layout/menu.php');

 ?>
<div class="container conteudo">
	<div class="card">
		<div class="card-header pintado text-center">
			<h2 class="text-white">
				Cadastre seu amigo
			</h2>
		</div>
		<div class="card-body">
			<form class="form-group">
				<div class="form-row">
					<div class="col-md-6 col-sm-12">
						<label for="nome">Nome</label>
						<input type="text" placeholder="Ex: Rex" name="nome" class="form-control">
						<div class="col-12">&nbsp;</div>

					</div>
					<div class="col-md-6 col-sm-12">
						<label for="porte">Porte</label>						
						<select class="form-control">
							<option selected disabled>Porte</option>
							<option value="Pequeno">Pequeno – De 28 a 35cm. - de 6 a 15kg.</option>
							<option value="Medio">Médio – De 36 a 49cm. - de 15 a 25kg.</option>
							<option value="Grande">Grande – De 50 a 69cm. - de 25 a 45kg.</option>
							<option value="Gigante">Gigante – Acima de 70cm. - de 45 a 60kg.</option>
						</select>
						<div class="col-12">&nbsp;</div>

					</div>
				</div>
				<div class="col-12">&nbsp;</div>
				<div class="form-row">
					<div class="col-sm-12 col-md-6">
						<label for="tipo">Tipo</label>
						<select class="form-control">
							<option disabled="" selected="">escolha como é o seu amigo</option>
							<option value="cachorro">Cachorro</option>
							<option value="gato">Gato</option>
							<option value="passaro">Pássaro</option>
						</select>
						<div class="col-12">&nbsp;</div>

					</div>
					<div class="col-sm-12 col-md-4">
						<label>Seu amiguinho tem algum problema de saúde?</label>
						<select class="js-example-basic-multiple form-control" id="id_label_multiple" name="saude[]" width="100%" multiple="multiple">
							<option value="Nenhum" selected="">Nenhum</option>
							<option value="Diabetes">Diabetes</option>
							<option value="Epilepsia">Epilepsia</option>
							<option value="Catarata">Cataratas</option>
							<option value="glaucoma">Glaucoma</option>
						</select>
						<div class="col-12">&nbsp;</div>

					</div>
					<div class="col-sm-12 col-md-2">
						<label>Sexo</label>
						<div class="form-check">
							<input type="radio" id="sexo" name="sexo" class="form-check-input" value="macho">
							<label for="sexo">Macho <i class="fas fa-mars"></i></label> 
						</div>
						<div class="form-check">
							<input type="radio" id="sexo" name="sexo" class="form-check-input" value="femea">
							<label for="sexo">Fêmea  <i class="fas fa-venus"></i></label>
						</div>
					</div>
				</div>
				<div class="col-12">&nbsp;</div>
				<div class="form-row">
					<div class="col-sm-12 col-md-6">
						<label for="sobre">Nos fale um pouco mais sobre o seu amigo.</label>
						<textarea class="form-control" placeholder="Ex : Dócil mas é agitado, vai passar o dia inteiro correndo no seu quintal" rows="5"></textarea>
						<P>&nbsp;</P>
					</div>
					<div class="col-sm-12 col-md-6 text-center">
						<img src="img/dog.jpg" class="img-fluid avatar">
						<div class="dflex justify-content-center">
							<div class="btn btn-success btn-gradient-success btn-rounded">
								 <input class="custom-file-input form-control-file" type="file" id="avatar"><span>Adicionar foto</span> </input>
								
							</div>
						</div>
					</div>
				</div>
				<P>&nbsp;</P>
				<div class="form-row">
					<div class="col-12 text-center">
						<button type="submit" class="btn btn-success btn-gradient-success col-6">Cadastrar</button>
					</div>	
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
  include('layout/footer.php');
 ?>
<script type="text/javascript">

$(document).ready(function(){
	$("html, body").animate({ scrollTop: $(document).height()-$(window).height() });	
});
</script>