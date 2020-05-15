<?php 
  include('layout/header.php');


 ?>

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
    &nbsp;
    <a class="nav-item" data-toggle="modal" data-target="#exampleModalCenter">Visitante</a> <i class="fal fa-user fa-2x"></i>
  </div>
</nav>



<?php 
  include('layout/footer.php');
 ?>