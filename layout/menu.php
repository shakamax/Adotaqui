<?php session_start(); ?>
<div class="container-fluid">
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top background-purple navbar-header">
    <a class="navbar-brand" href="index.php">Adotaqui! <i class="fas fa-paw"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="amigos.php">Nossos amigos</a>
        </li>
        <?php 
          if(isset($_SESSION['login']) && $_SESSION['login'] == true){
        ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="cadastro.php">Cadastrar um amigo</a>
        </li>
        <?php 
          } ;
        ?>
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
      <?php 
          if(isset($_SESSION['login']) && $_SESSION['login'] == true){
      ?>

      <a class="nav-item linkmodal" data-toggle="modal" data-target="#modalUser" style="color: #f8ffff;">Fernando Veríssimo &nbsp;<img class="img-fluid img-profile rounded-circle" src="img/verissimo.jpg"></a>

      <?php 
          } else {
      ?>

      <a class="nav-item linkmodal" data-toggle="modal" data-target="#exampleModalCenter" style="color: #f8ffff;">Visitante <img class="img-fluid img-profile rounded-circle" src="img/user.png"></a>

      <?php } ; ?>
    </div>
  </nav>  
</div>

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
        <form method="post" action="login.php" class="form-group">
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
              <a href="login.php" class="entrarsocial">
                <img src="img/face.svg" class="img-fluid socialicon">
                <div class="col-12">Entre com o Facebook</div>
              </a>
            </div> 
            <div class="col text-center">
              <a href="login.php" class="entrarsocial">
                <img src="img/gmail.svg" class="img-fluid socialicon">
                <div class="col-12">Entre com o Gmail</div>
              </a>
            </div> 
          </div>
          <div class="col-12">&nbsp;</div>
          
          <div class="col-12 text-center"> Ainda sem conta? </div>

          <div class="col-12">
            <div class="row">
              <div class="col text-center">
                <p class="cadastrarse"><h6><a href="index.html">Cadastrar-se</a></h6></p>
              </div>
            </div>
          </div>
          <div class="col-12 borda">&nbsp;</div>

        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Agora não</button>
        <button type="submit" class="btn btn-primary btn-gradient-success">Login</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header background-purple">
        <div class="col text-center">
          <h5 class="modal-title" id="exampleModalCenterTitle">Olá Fernando</h5>
        </div>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-12 text-center borda"> <h2>Adotaqui! <i class="fas fa-paw"></i></h2></div>
        <div class="col-12">&nbsp;</div>
        <div class="col-12 text-center">
          <img src="img/verissimo.jpg" class="img-fluid rounded-circle foto">
        </div>
        <div class="col-12">&nbsp;</div>
        <div class="col-12 text-center">
          <a href="perfil.php" class="entrarsocial">
            Atualizar perfil
            <br>
            <i class="fal fa-user-cog fa-2x linkfont"></i>
          </a>
        </div>
        <div class="col-12">&nbsp;</div>
        <div class="col-12">&nbsp;</div>

        <div class="col-12 text-center">
          <a href="cadastro.php" class="entrarsocial">
            Cadastrar um amigo
            <br>
            <i class="fal fa-dog fa-2x"></i>
          </a>
        </div>
        <div class="col-12">&nbsp;</div>
        <div class="col-12">&nbsp;</div>
        <div class="col-12 text-center">
          <a href="logout.php" class="entrarsocial text-danger">
            Logout
            <br>
            <i class="fal fa-sign-out-alt fa-2x"></i>
          </a>
        </div>

        <div class="col-12 borda">&nbsp;</div>
      </div>
      <div class="modal-footer text-center">
        <div class="col">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

