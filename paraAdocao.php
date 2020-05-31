<?php 
  include('layout/header.php');
  include('layout/menu.php');

 ?>

<div class="container conteudo">
  <div class="col-12 alert alert-danger text-center" style="display: none;">
    <h3>Apagado com sucesso!</h3>
  </div>
  <div class="card">
    <div class="card-header pintado text-center text-white">
      <h1>Seus amigos cadastrados</h1>
    </div>
    <div class="card-body text-center d-flex justify-content-center">
    
      <div class="col-md-3 col-sm-12">
        <div class="card" id="cardKiara">
          <img src="img/dog1.jpg" class="img-fluid card-img-top cardtop">
          <div class="card-body">
            <button type="button" data-toggle="modal" data-target="#kiara" class="col-12 btn btn-outline-success">
              <h6>Kiara - Cachorro</h6>
            </button>
          </div> 
        </div>
      </div>

      <div class="col-md-3 col-sm-12">
        <div class="card" id="cardPiui">
          <img src="img/birds/bird2.jpg" class="img-fluid card-img-top cardtop">
          <div class="card-body">
            <button type="button" data-toggle="modal" data-target="#piui" class="col-12 btn btn-outline-success">
              <h6>Piui - Pássaro</h6>
            </button>
          </div> 
        </div>
      </div>         

      <div class="col-md-3 col-sm-12">
        <div class="card" id="cardSergio">
          <img src="img/gatos/cat2.jpg" class="img-fluid card-img-top cardtop">
          <div class="card-body">
            <button type="button" data-toggle="modal" data-target="#sergio" class="col-12 btn btn-outline-success">
              <h6>Sérgio - Gato</h6>
            </button>
          </div> 
        </div>
      </div>


    
    </div>
    <!-- fim do body -->
  </div>
  <!-- fim do card -->
</div>
<!-- Fim do conteudo -->

<!-- Modal -->
<div class="modal fade" id="kiara" tabindex="-1" role="dialog" aria-labelledby="exemploKiara" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-yellow">
        <div class="col text-center align-middle">
          <h5 class="modal-title" id="exemploKiara">Seu amigo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
      <div class="modal-body">
        <form class="form-group">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner cardDetail">
                    <div class="carousel-item active">
                      <img src="img/dogs/dog4.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/dog1.jpg" class="d-block" alt="...">
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
              <div class="row">
                <div class="dflex justify-content-center">
                  <div class="btn btn-success btn-gradient-success btn-rounded">
                     <input class="custom-file-input form-control-file" type="file" id="avatar"><span>Adicionar foto</span> </input>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <div class="col-12">
                <label>Nome :</label>
                <input type="text" name="nome" class="form-control" value="kiara">
                <div class="col-12">&nbsp;</div>
              </div>
              <div class="col-12">
                <label>Porte :</label>
                <select class="form-control">
                  <option selected disabled>Porte</option>
                  <option value="Pequeno" selected>Pequeno – De 28 a 35cm. - de 6 a 15kg.</option>
                  <option value="Medio">Médio – De 36 a 49cm. - de 15 a 25kg.</option>
                  <option value="Grande">Grande – De 50 a 69cm. - de 25 a 45kg.</option>
                  <option value="Gigante">Gigante – Acima de 70cm. - de 45 a 60kg.</option>
                </select>
                <div class="col-12">&nbsp;</div>
              </div>
              <div class="col-12">
                <label for="tipo">Tipo</label>
                <select class="form-control">
                  <option disabled="" selected="">escolha como é o seu amigo</option>
                  <option value="cachorro" selected="">Cachorro</option>
                  <option value="gato">Gato</option>
                  <option value="passaro">Pássaro</option>
                </select>
                <div class="col-12">&nbsp;</div>
              </div>
            </div>          
          </div>
          <div class="form-row">
            <div class="col-sm-12 col-md-6">
              <label>Seu amiguinho tem algum problema de saúde?</label>
              <select style="width: 100%;" class="js-example-basic-multiple form-control" id="idMultiple" name="saude[]" multiple="multiple">
                <option value="Nenhum" selected="">Nenhum</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Epilepsia">Epilepsia</option>
                <option value="Catarata">Cataratas</option>
                <option value="glaucoma">Glaucoma</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-6">
              <label>Sexo : </label>
              <div class="form-check">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="macho">
                  <label class="form-check-label" for="inlineRadio1">Macho <i class="fas fa-mars"></i></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" checked="" value="femea">
                  <label class="form-check-label" for="inlineRadio2">Fêmea <i class="fas fa-venus"></i></label>
                </div>
              </div>
            </div>
          <div class="col-12">&nbsp;</div>
          </div>

          <div class="form-row">
            <div class="col-sm-12">
              <label for="sobre">Nos fale um pouco mais sobre o seu amigo.</label>
              <textarea class="form-control" placeholder="Ex : Dócil mas é agitado, vai passar o dia inteiro correndo no seu quintal" rows="3">Muito brincalhão, bagunceiro, companheiro e feliz.</textarea>
              <P>&nbsp;</P>
            </div>
           
          </div>

          <div class="row">
            <div class="col-12">&nbsp;</div>
            <div class="col-12 text-center">
              <button data-dismiss="modal" type="button"  id="btnExcluirKiara" class="btn btn-danger col-6" title="Excluir" onclick="return confirm('Tem certeza que quer excluir o seu amigo?')"><i class="fal fa-trash-alt"></i></button>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <div class="col text-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success btn-gradient-success" onclick="return confirm('Você tem certeza que deseja fazer estas alterações?')">Salvar Alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="piui" tabindex="-1" role="dialog" aria-labelledby="exemploKiara" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-yellow">
        <div class="col text-center align-middle">
          <h5 class="modal-title" id="exemploKiara">Seu amigo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
      <div class="modal-body">
        <form class="form-group">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="row">
                <div id="controle2" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner cardDetail">
                    <div class="carousel-item active">
                      <img src="img/birds/bird.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/birds/bird1.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/birds/bird2.jpg" class="d-block" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#controle2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#controle2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="dflex justify-content-center">
                  <div class="btn btn-success btn-gradient-success btn-rounded">
                     <input class="custom-file-input form-control-file" type="file" id="avatar"><span>Adicionar foto</span> </input>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <div class="col-12">
                <label>Nome :</label>
                <input type="text" name="nome" class="form-control" value="Piui">
                <div class="col-12">&nbsp;</div>
              </div>
              <div class="col-12">
                <label>Porte :</label>
                <select class="form-control">
                  <option selected disabled>Porte</option>
                  <option value="Pequeno" selected>Pequeno – De 28 a 35cm. - de 6 a 15kg.</option>
                  <option value="Medio">Médio – De 36 a 49cm. - de 15 a 25kg.</option>
                  <option value="Grande">Grande – De 50 a 69cm. - de 25 a 45kg.</option>
                  <option value="Gigante">Gigante – Acima de 70cm. - de 45 a 60kg.</option>
                </select>
                <div class="col-12">&nbsp;</div>
              </div>
              <div class="col-12">
                <label for="tipo">Tipo</label>
                <select class="form-control">
                  <option disabled="" selected="">escolha como é o seu amigo</option>
                  <option value="cachorro">Cachorro</option>
                  <option value="gato">Gato</option>
                  <option value="passaro" selected="">Pássaro</option>
                </select>
                <div class="col-12">&nbsp;</div>
              </div>
            </div>          
          </div>
          <div class="form-row">
            <div class="col-sm-12 col-md-6">
              <label>Seu amiguinho tem algum problema de saúde?</label>
              <select style="width: 100%;" class="js-example-basic-multiple form-control" id="multpleSelect" name="saude[]" multiple="multiple">
                <option value="Nenhum" selected="">Nenhum</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Epilepsia">Epilepsia</option>
                <option value="Catarata">Cataratas</option>
                <option value="glaucoma">Glaucoma</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-6">
              <label>Sexo : </label>
              <div class="form-check">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="macho" checked="">
                  <label class="form-check-label" for="inlineRadio1">Macho <i class="fas fa-mars"></i></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="femea">
                  <label class="form-check-label" for="inlineRadio2">Fêmea <i class="fas fa-venus"></i></label>
                </div>
              </div>
            </div>
          <div class="col-12">&nbsp;</div>
          </div>

          <div class="form-row">
            <div class="col-sm-12">
              <label for="sobre">Nos fale um pouco mais sobre o seu amigo.</label>
              <textarea class="form-control" placeholder="Ex : Dócil mas é agitado, vai passar o dia inteiro correndo no seu quintal" rows="3">Acorda muito animado, cantando pela manhã pra acordar a casa. Sim ele sabe cantar a música tema do link. Ele adora chapéus!!</textarea>
              <P>&nbsp;</P>
            </div>
           
          </div>

          <div class="row">
            <div class="col-12">&nbsp;</div>
            <div class="col-12 text-center">
              <button data-dismiss="modal" type="button"  id="btnExcluirPiui" class="btn btn-danger col-6" title="Excluir" onclick="return confirm('Tem certeza que quer excluir o seu amigo?')"><i class="fal fa-trash-alt"></i></button>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <div class="col text-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success btn-gradient-success" onclick="return confirm('Você tem certeza que deseja fazer estas alterações?')">Salvar Alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="sergio" tabindex="-1" role="dialog" aria-labelledby="exemploKiara" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-yellow">
        <div class="col text-center align-middle">
          <h5 class="modal-title" id="exemploKiara">Seu amigo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
      <div class="modal-body">
        <form class="form-group">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="row">
                <div id="controle3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner cardDetail">
                    <div class="carousel-item active">
                      <img src="img/gatos/cat.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/gatos/cat1.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/gatos/cat2.jpg" class="d-block" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#controle3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#controle3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="dflex justify-content-center">
                  <div class="btn btn-success btn-gradient-success btn-rounded">
                     <input class="custom-file-input form-control-file" type="file" id="avatar"><span>Adicionar foto</span> </input>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <div class="col-12">
                <label>Nome :</label>
                <input type="text" name="nome" class="form-control" value="Sérgio">
                <div class="col-12">&nbsp;</div>
              </div>
              <div class="col-12">
                <label>Porte :</label>
                <select class="form-control">
                  <option selected disabled>Porte</option>
                  <option value="Pequeno" selected>Pequeno – De 28 a 35cm. - de 6 a 15kg.</option>
                  <option value="Medio">Médio – De 36 a 49cm. - de 15 a 25kg.</option>
                  <option value="Grande">Grande – De 50 a 69cm. - de 25 a 45kg.</option>
                  <option value="Gigante">Gigante – Acima de 70cm. - de 45 a 60kg.</option>
                </select>
                <div class="col-12">&nbsp;</div>
              </div>
              <div class="col-12">
                <label for="tipo">Tipo</label>
                <select class="form-control">
                  <option disabled="">escolha como é o seu amigo</option>
                  <option value="cachorro">Cachorro</option>
                  <option value="gato" selected="">Gato</option>
                  <option value="passaro">Pássaro</option>
                </select>
                <div class="col-12">&nbsp;</div>
              </div>
            </div>          
          </div>
          <div class="form-row">
            <div class="col-sm-12 col-md-6">
              <label>Seu amiguinho tem algum problema de saúde?</label>
              <select style="width: 100%;" class="js-example-basic-multiple form-control" id="id_label_multiple" name="saude[]" multiple="multiple">
                <option value="Nenhum">Nenhum</option>
                <option value="Diabetes" selected="">Diabetes</option>
                <option value="Epilepsia">Epilepsia</option>
                <option value="Catarata">Cataratas</option>
                <option value="glaucoma">Glaucoma</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-6">
              <label>Sexo : </label>
              <div class="form-check">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="macho" checked="">
                  <label class="form-check-label" for="inlineRadio1">Macho <i class="fas fa-mars"></i></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="femea">
                  <label class="form-check-label" for="inlineRadio2">Fêmea <i class="fas fa-venus"></i></label>
                </div>
              </div>
            </div>
          <div class="col-12">&nbsp;</div>
          </div>

          <div class="form-row">
            <div class="col-sm-12">
              <label for="sobre">Nos fale um pouco mais sobre o seu amigo.</label>
              <textarea class="form-control" placeholder="Ex : Dócil mas é agitado, vai passar o dia inteiro correndo no seu quintal" rows="3">Come e dorme, também responde por Malandro, por que chamavam ele de Sérgio Malandro. Ele arranha muitas coisas, então entrego o arranhador dele junto.</textarea>
              <P>&nbsp;</P>
            </div>
           
          </div>

          <div class="row">
            <div class="col-12">&nbsp;</div>
            <div class="col-12 text-center">
              <button data-dismiss="modal" type="button"  id="btnExcluirSergio" class="btn btn-danger col-6" title="Excluir" onclick="return confirm('Tem certeza que quer excluir o seu amigo?')"><i class="fal fa-trash-alt"></i></button>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <div class="col text-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success btn-gradient-success" onclick="return confirm('Você tem certeza que deseja fazer estas alterações?')">Salvar Alterações</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include('layout/footer.php');
 ?>