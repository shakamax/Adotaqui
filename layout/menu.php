<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top background-purple">
  <a class="navbar-brand" href="home.php">Adotaqui! <i class="fas fa-paw"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nossos amigos</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="O que procura?" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="far fa-search"></i></button>
    </form>
    <div>
      &nbsp;
    </div>
    <a class="nav-item linkmodal" data-toggle="modal" data-target="#exampleModalCenter" style="color: #f8ffff;">Visitante <img class="img-fluid img-profile rounded-circle" src="img/user.png"></a>
  </div>
</nav>  

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header background-purple">
        <h5 class="modal-title" id="exampleModalCenterTitle">Faça seu login</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get" class="form-group">
          <div class="col-12 text-center borda"> <h2>Adotaqui! <i class="fas fa-paw"></i></h2></div>
          <div class="col-12">&nbsp;</div>
          <div class="col-12 text-center">
            <label>Email</label>
            <input placeholder="Ex: joaozinho@email.com" type="email" name="email" class="form-control">
          </div>
          <div class="col-12">&nbsp;</div>
          <div class="col-12 text-center">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control">
          </div>
          <div class="col-12">&nbsp;</div>
          <div class="col-12 text-center"> OU </div>
          <div class="row">
            <div class="col text-center">
              <a href="#" class="entrarsocial">
                <img src="img/face.svg" class="img-fluid socialicon">
                <div class="col-12">Entre com o Facebook</div>
              </a>
            </div> 
            <div class="col text-center">
              <a href="#" class="entrarsocial">
                <img src="img/gmail.svg" class="img-fluid socialicon">
                <div class="col-12">Entre com o Gmail</div>
              </a>
            </div> 
          </div>
          <div class="col-12">&nbsp;</div>
          
          <div class="col-12 text-center"> Ainda sem conta? </div>

          <div class="col-12">
            <div class="row">
              <p class="cadastrarse">Não tem conta? &nbsp;<h6><a href="index.html">Cadastrar-se</a></h6></p>
            </div>
          </div>
          <div class="col-12 borda">&nbsp;</div>




        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Agora não</button>
        <button type="button" class="btn btn-primary btn-gradient-success">Login</button>
      </div>
    </div>
  </div>
</div>