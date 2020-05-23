
	<p>&nbsp;</p>
	<footer class="fixed-bottom">
		<p>&copy; 2020 - Todos os direitos reservados :: Desenvolvido por Devpix.</p>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery.3.4.1.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="fontawesome/js/all.min.js"></script>
    <script type="text/javascript" src="js/select2.min.js" ></script>
    <script type="text/javascript">
    $(document).ready(function(e) {

       //Esse codigo pega a altura da navbar e coloca numa variavel com acrescimo de 30

       var h = $('nav').height() + 290;
       //depois eu coloco na classe conteudo como paddingtop.
       $('.conteudo').css({ paddingTop: h });
       //tudo isso assim que a pagina carrega
       var hf = $('footer').height() + 30;
       $('.conteudo').css({ paddingBottom: hf });

       $('.js-example-basic-multiple').select2();
       $('.js-example-basic-single').select2();

       $(".js-example-basic-multiple").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });

        $('#cep').change(function() {
            var cep = $(this).val();
            $.ajax({
                url: "https://viacep.com.br/ws/" + cep + "/json/",
                type: 'GET',
                dataType: 'json',
                beforeSend: function () {
                    $('#logradouro').val("...");
                    $('#bairro').val("...");
                    $('#localidade').val("...");
                    $('#uf').val("...");
                },
                success: function (data) {
                    $('#logradouro').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    $('#localidade').val(data.localidade);
                    $("#uf option").filter(function() {
                      return this.val() == data.uf; 
                    }).attr('selected', true);
                }
            });
        });

        $('#btnConta').click(function() {
          $('.dados').hide('slow');
          $('#btnDados').removeClass('selecionado');
          $('#btnDados').addClass('btn-list');
          $('#btnConta').removeClass('btn-list');
          $('#btnConta').addClass('selecionado');
          $('.login').show('slow');
        });

        $('#btnDados').click(function() {
          $('.login').hide('slow');
          $('#btnConta').removeClass('selecionado');
          $('#btnConta').addClass('btn-list');
          $('#btnDados').removeClass('btn-list');
          $('#btnDados').addClass('selecionado');
          $('.dados').show('slow');
        });
       
    });
    </script>
  </body>
</html>