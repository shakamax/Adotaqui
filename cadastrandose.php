<?php 
  include('layout/header.php');
  include('layout/menu.php');

?>


<!-- <img class="img1 img-fluid" src="img/img1.jpg"> -->

<div class="container conteudo">
   <div class="card">
   	<div class="card-header pintado">
   		<div class="col-12 text-center">
   			<h2>Cadastrando-se</h2>
   		</div>
   	</div>
	<div class="card-body text-center">
		<form>
			<div class="row form-group">
				<div class="col-12">
					<label for="nome">Nome <sup class="text-danger dest">*</sup></label>
					<input id="cadastroNome" type="text" name="nome" class="form-control text-center" placeholder="Ex: José Fernando">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-12">
					<label for="email"> E-mail <sup class="text-danger dest">*</sup></label>
					<input type="email" name="email" class="form-control text-center" placeholder="email@email.com">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-12">
					<label for="email"> Confirme o seu E-mail <sup class="text-danger dest">*</sup></label>
					<input type="email" name="email" class="form-control text-center">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-12">
					<label for="email"> Senha <sup class="text-danger dest">*</sup></label>
					<input type="password" name="senha" class="form-control text-center">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-12">
					<label for="email"> Confirme sua senha <sup class="text-danger dest">*</sup></label>
					<input type="password" name="senha2" class="form-control text-center">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-12 text-center">
					<button id="cadastro" type="submit" class="btn btn-success btn-gradient-success col-6">Finalizar</button>
				</div>
			</div>
		</form>
	</div>
   </div>

</div>
<!-- Fim conteudo -->
<?php 
include('layout/footer.php');
?>
<script type="text/javascript">

$(document).ready(function(){
	$("html, body").animate({ scrollTop: $(document).height()-$(window).height() });	
});
</script>