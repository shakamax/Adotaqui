<?php 
include('layout/header.php');
include('layout/menu.php');
?>


<div class="row">
	<div class="col-3">
		<div class="" style="padding-left: 10%; padding-top: 30%; width: 400px;">

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/dogs/dog1.jpg" class="d-block" alt="..." style="height: 500px; width: 400px;">
					</div>
					<div class="carousel-item">
						<img src="img/dogs/dog2.jpg" class="d-block" alt="..." style="height: 500px; width: 400px;">
					</div>
					<div class="carousel-item">
						<img src="img/dogs/dog3.jpg" class="d-block" alt="..." style="height: 500px; width: 400px;">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

	<div class="col-4">
		<div class="" style="padding-left: 5%; padding-top: 72%;">
			<div class="card">
				<h5 class="card-header">Zeus - Cachorro</h5> <!-- Nome do animal & Tipo-->
				<div class="card-body">
					<h5 class="card-title">Husky Siberiano</h5> <!-- Raça do animal -->
					<h6>Dados gerais&nbsp; <i class="fas fa-arrow-down"></i></h6>
					<p class="card-text">
					<strong>Sexo:</strong> Masculino
						<br>
					<strong>Porte:</strong> Médio
					<br>
					<strong>Possui algum problema de saúde?</strong> Não
					<br>
					<strong>Descrição:</strong> Muito brincalhão, bagunceiro, companheiro e feliz.
					</p>
				</div>
			</div>
		</div>

	</div>

	<div class="col-4">
		<div style="width: 95%; padding-left: 1%; padding-top: 72%;">
			<div class="card">
				<h5 class="card-header">Quer adotar esse bichano?</h5>
				<div class="card-body">
					<h5 class="card-title">Alexandre é o responsável por ele.</h5>
					<h6>Dados do Alexandre</h6>
					<p class="card-text">
					<strong>Telefone:</strong> (61) 9 9321-1234
						<br>
					<strong>Cidade/Estado:</strong> Brasília - DF
					<br>
					</p>
					<a href="javascript:void(0)" class="btn btn-success">Quero adotar!</a>
				</div>
			</div>
		</div>

	</div>

</div>


<?php 
include('layout/footer.php');
?>