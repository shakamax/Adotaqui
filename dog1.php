<?php 
include('layout/header.php');
include('layout/menu.php');
?>


<div class="container-fluid conteudo">
	<div class="row">
		<div class="col-md-3 col-sm-12">
			<div id="carouselExampleControls" class="carousel slide fotosSlide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/dogs/dog1.jpg" class="d-block" alt="...">
					</div>
					<div class="carousel-item">
						<img src="img/dogs/dog2.jpg" class="d-block" alt="...">
					</div>
					<div class="carousel-item">
						<img src="img/dogs/dog3.jpg" class="d-block" alt="...">
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

		<div class="col-md-4 col-sm-12">
			<div class="col-12">&nbsp;</div>
			<div id="card1" class="card cardSelect">
				<h5 class="card-header background-purple">Zeus - Cachorro</h5> <!-- Nome do animal & Tipo-->
				<div class="card-body">
					<h5>Dados gerais&nbsp; <i class="fas fa-arrow-down"></i></h5>
					<!-- <h5 class="card-title">Husky Siberiano</h5>  Raça do animal -->
					<p class="card-text">
						<strong>Sexo:</strong> Macho <i class="fas fa-mars"></i>
					</p>
					<p class="card-text">
						<strong>Porte:</strong> Médio
					</p>
					<p class="card-text">
						<strong>Possui algum problema de saúde?</strong> Nenhum
					</p>
					<p class="card-text">
						<strong>Descrição:</strong> Muito brincalhão, bagunceiro, companheiro e feliz.
					</p>
				</div>
			</div>

		</div>

		<div class="col-md-4 col-sm-12">
			<div class="col-12">&nbsp;</div>
			<div id="card2" class="card cardSelect">
				<h5 class="card-header pintado text-white">Quer adotar esse bichano?</h5>
				<div class="card-body text-center">
					<h5 class="card-title">Alexandre é o responsável por ele.</h5>
					<h6>Dados do Alexandre <i class="fas fa-arrow-down"></i></h6>
					<p class="card-text">
						<strong>Telefone:</strong> (61) 9 9321-1234
					</p>
					<p>
						<strong>Cidade/Estado:</strong> Brasília - DF
					</p>
						<a href="javascript:void(0)" class="btn btn-success btn-gradient-success">Quero adotar!</a>
				</div>
			</div>

		</div>

	</div>

</div>

<?php 
include('layout/footer.php');
?>