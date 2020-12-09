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
  <div class="card card1 pintado">
    <div class="card-body">
      <form>
        <h2 class="fonte text-center text-white">Encontre um novo amigo</h2>
        <br>
        <div class="row">
          <div class="form-group col-md-6 col-sm-12">
            <select class="form-control" id="uf" name="uf">
				<option value="" disabled="" selected="">Estado</option>
				<option value="AC">Acre</option>
			    <option value="AL">Alagoas</option>
			    <option value="AP">Amapá</option>
			    <option value="AM">Amazonas</option>
			    <option value="BA">Bahia</option>
			    <option value="CE">Ceará</option>
			    <option value="DF">Distrito Federal</option>
			    <option value="ES">Espírito Santo</option>
			    <option value="GO">Goiás</option>
			    <option value="MA">Maranhão</option>
			    <option value="MT">Mato Grosso</option>
			    <option value="MS">Mato Grosso do Sul</option>
			    <option value="MG">Minas Gerais</option>
			    <option value="PA">Pará</option>
			    <option value="PB">Paraíba</option>
			    <option value="PR">Paraná</option>
			    <option value="PE">Pernambuco</option>
			    <option value="PI">Piauí</option>
			    <option value="RJ">Rio de Janeiro</option>
			    <option value="RN">Rio Grande do Norte</option>
			    <option value="RS">Rio Grande do Sul</option>
			    <option value="RO">Rondônia</option>
			    <option value="RR">Roraima</option>
			    <option value="SC">Santa Catarina</option>
			    <option value="SP">São Paulo</option>
			    <option value="SE">Sergipe</option>
			    <option value="TO">Tocantins</option>
			</select>
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6 col-sm-12">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Porte</option>
              <option value="Pequeno">Pequeno – De 28 a 35cm. - de 6 a 15kg.</option>
              <option value="Medio">Médio – De 36 a 49cm. - de 15 a 25kg.</option>
              <option value="Grande">Grande – De 50 a 69cm. - de 25 a 45kg.</option>
              <option value="Gigante">Gigante – Acima de 70cm. - de 45 a 60kg.</option>
            </select>
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Sexo</option>
              <option value="femea">Fêmea</option>
              <option value="macho">Macho</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6 col-sm-12">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Tipo</option>
              <option value="cachorro">Cachorro</option>
              <option value="gato">Gato</option>
              <option value="passaro">Pássaro</option>
            </select>
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <input type="text" name="obs" placeholder="Alguma coisa mais específica?" class="form-control">
          </div>
        </div>
        <br>
        <div class="col text-center">
        	<button type="button" class="btn btn-success btn-gradient-success col-6">Procurar</button>
        </div>
      </form>
    </div>
  </div>

  <div class="col-12">&nbsp;</div>
  <div class="col-12">&nbsp;</div>
  


</div>

<?php 
  include('layout/footer.php');
 ?>