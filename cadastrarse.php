<?php 
  include('layout/header.php');
  include('layout/menu.php');

 ?>

  
<div class="container conteudo">
<?php if (isset($_GET['msg'])&& isset($_GET['tipo'])) { ?>
  <div class="alert <?php echo $_GET['tipo']; ?>">
    <?php echo $_GET['msg'] ?>
  </div>
<?php } ?>
  <div class="card">
    <div class="card-header pintado text-center">
      <h2 class="text-white">
        Cadastrando
      </h2>
    </div>
    <div class="card-body">
      <form class="form-group" onsubmit="return validarSenha()" method="POST" action="db/userdb.php">
        <div class="form-row">
          <div class="col-12 text-center">
            <label for="nome"><strong>Nome</strong></label>
            <input required type="text" placeholder="Ex : Fulano da silva" name="nome" class="form-control">
            <input type="hidden" name="acao" value="cadastrar">
          </div>
        </div>
        <div class="col-12">&nbsp;</div>
        <div class="form-row">
          <div class="col-12 text-center">
            <label for="email"><strong>E-mail</strong></label>
            <input required type="email" placeholder="Ex : email@email.com" name="email" class="form-control">
          </div>
        </div>
        <div class="col-12">&nbsp;</div>

        <div class="form-row">
          <div class="col-12 text-center">
            <label for="senha"><strong>Digite uma senha</strong></label>
            <input required type="password" id="senha" name="senha" class="form-control">
          </div>
        </div>
        <div class="col-12">&nbsp;</div>

        <div class="form-row">
          <div class="col-12 text-center">
            <label for="senha"><strong>Confirme sua senha</strong></label>
            <input required type="password" id="confirmaSenha" name="senha2" class="form-control">
          </div>
        </div>
        <div class="col-12">&nbsp;</div>
        <div class="col-12">&nbsp;</div>

        <div class="form-row">
          <button type="submit" class="btn btn-success btn-gradient-success col-12">Cadastrar</button>
        </div>

      </form>

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
              <form class="form-group" >
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
    

  <div class="col-12">&nbsp;</div>
  <div class="col-12">&nbsp;</div>
  


</div>

<?php 
  include('layout/footer.php');
 ?>