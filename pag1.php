<?php 
  include('layout/header.php');
  include('layout/menu.php');

?>


<!-- <img class="img1 img-fluid" src="img/img1.jpg"> -->

<div class="container conteudo">
  <div class="card card1 pintado">
    <div class="card-body">
      <form>
        <h2 class="fonte text-center">Encontre um novo amigo</h2>
        <br>
        <div class="row">
          <div class="form-group col-6">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Estado</option>
              <option>DF</option>
              <option>GO</option>
              <option>SP</option>
              <option>RJ</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-6">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Cidade</option>
              <option></option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-6">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Porte</option>
              <option value="Pequeno">Pequeno – De 28 a 35cm. - de 6 a 15kg.</option>
              <option value="Medio">Médio – De 36 a 49cm. - de 15 a 25kg.</option>
              <option value="Grande">Grande – De 50 a 69cm. - de 25 a 45kg.</option>
              <option value="Gigante">Gigante – Acima de 70cm. - de 45 a 60kg.</option>
            </select>
          </div>
          <div class="form-group col-6">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Cidade</option>
              <option></option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-6">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Localização</option>
              <option>Pequeno</option>
              <option>Médio</option>
              <option>Grande</option>
            </select>
          </div>
          <div class="form-group col-6">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Cidade</option>
              <option></option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <br>
        <button type="button" class="btn btn-success centro">Procurar</button>
      </form>
    </div>
  </div>

  <div class="col-12">&nbsp;</div>
  <div class="col-12">&nbsp;</div>
  <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <a href="javascript:void(0)">
          <img src="img/dog1.jpg" class="card-img-top" alt="Kiara">
          <div class="card-body">
            <div class="card-text titulo"><h5>Kiara</h5></div>
          </a>
          <div class="card-text subtitulo"><h6><i class="fas fa-building"></i> Brasília - DF</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-mars"></i> Macho</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-dog"></i> Pequeno</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-list"></i> Não possui doenças</h6></div>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <a href="javascript:void(0)">
          <img src="img/dog1.jpg" class="card-img-top" alt="Kiara">
          <div class="card-body">
            <div class="card-text titulo"><h5>Kiara</h5></div>
          </a>
          <div class="card-text subtitulo"><h6><i class="fas fa-building"></i> Brasília - DF</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-mars"></i> Macho</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-dog"></i> Pequeno</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-list"></i> Não possui doenças</h6></div>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <a href="javascript:void(0)">
          <img src="img/dog1.jpg" class="card-img-top" alt="Kiara">
          <div class="card-body">
            <div class="card-text titulo"><h5>Kiara</h5></div>
          </a>
          <div class="card-text subtitulo"><h6><i class="fas fa-building"></i> Brasília - DF</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-mars"></i> Macho</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-dog"></i> Pequeno</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-list"></i> Não possui doenças</h6></div>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card">
        <a href="javascript:void(0)">
          <img src="img/dog1.jpg" class="card-img-top cordif" alt="Kiara">
          <div class="card-body">
            <div class="card-text titulo"><h5>Kiara</h5></div>
          </a>
          <div class="card-text subtitulo"><h6><i class="fas fa-building"></i> Brasília - DF</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-mars"></i> Macho</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-dog"></i> Pequeno</h6></div>
          <div class="card-text subtitulo"><h6><i class="fas fa-list"></i> Não possui doenças</h6></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
include('layout/footer.php');
?>