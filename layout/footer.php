
	<p>&nbsp;</p>
	<footer class="fixed-bottom">
		<p>&copy; 2020 - Todos os direitos reservados :: Desenvolvido por Devpix.</p>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="fontawesome/js/all.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(e) {

       //Esse codigo pega a altura da navbar e coloca numa variavel com acrescimo de 30

       var h = $('nav').height() + 30;
       //depois eu coloco na classe conteudo como paddingtop.
       $('.conteudo').css({ paddingTop: h });
       //tudo isso assim que a pagina carrega
       var hf = $('footer').height() + 30;
       $('.conteudo').css({ paddingBottom: hf });

    });
    </script>
  </body>
</html>