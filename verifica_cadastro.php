<!doctype html>
<html class="no-js" lang="pt-br">
	<head>
		<!-- ESSE PROJETO FOI OTIMIZADO COM O FRAMEWORK ZURB FOUNDATION 6 -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Iniciantes do Violão</title>
		<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script  type = "text/javascript" src="js/funcoes.js"></script>
	</head>
	<body>
		<!-- FOI ADICIONADO O TEMPLATE DO MODELO BLOG COM BARRA LATERAL COM ALGUNS BLOCOS DE CONSTRUÇÃO ESPECÍFICOS https://foundation.zurb.com/templates-previews-sites-f6-xy-grid/blog.html-->

		
		 <!-- CABEÇALHO -->
		 <!-- FOI ADICIONADO O BLOCO DE NAVEGAÇÃO OCULTA COM ALTERAÇÕES https://foundation.zurb.com/building-blocks/blocks/scrollhide-nav.html-->

		<nav class="scrollhide-nav">
			
		      <ul class="dropdown menu" data-dropdown-menu >
		        <li>
		          <a  class="a1" href="#">Postagens</a>
		          <ul class="menu vertical">
		          
		          </ul>
		           <li>
		          <a class="a1" href="#">Sobre</a>
		          <ul class="menu vertical">
		            
		          </ul>
		        </li>
		        <li><a class="a1" href="#contato">Contato</a></li>
		      </ul>  
		</nav>

		 <!-- BANNER (header) -->
		<div class="top-bar">
			<header>
				<center><a href="index.html"><img src="img/iniciantes.png" width="310"  /></a></center> 
			</div>
			</header>
		</div>
        <br><br>

         <!-- ÍCONES LATERAIS FIXO -->
         <!-- FOI ADICIONADO UMA BARRA SOCIAL FIXA COM ALTERAÇÕES https://foundation.zurb.com/building-blocks/blocks/sticky-social-bar.html-->
         <div class="show-for-large">  <!--FOI ADICIONADO UMA CLASSE DE VISUALIZAÇÃO DENTRO DESSA DIV PARA ESSES ÍCONES LATERAIS FIXO APARECEREM SOMENTE EM TELA LARGA -->
			<ul class="sticky-social-bar">
			  <li class="social-icon">
			    <a href="https://www.facebook.com/" target="_blank"> 
			      <i class="fa fa-facebook" aria-hidden="true"></i>
			      <span class="social-icon-text">Facebook</span>
			    </a>
			  </li>
			  <li class="social-icon">
			    <a href="https://www.youtube.com/results?search_query=iniciantes+do+viol%C3%A3o">
			      <i class="fa fa-youtube" aria-hidden="true"></i>
			      <span class="social-icon-text">Youtube</span>
			    </a>
			  </li>
			  <li class="social-icon">
			    <a href="https://www.instagram.com/?hl=pt-br/" target="_blank">
			      <i class="fa fa-instagram" aria-hidden="true"></i>
			      <span class="social-icon-text">Instagram</span>
			    </a>
			  </li>
			</ul>
		</div>

		<!-- CONTEÚDO(ARTICLE) -->
		
				<center> <!-- CÓDIGO EM PHP PARA A VERIFICAÇÃO DOS VALORES ARMAZENADOS DO FORM CADASTRO E INCLUIR NO SQL -->
					<?php      

						$nome 		 = $_POST['nome'];
						$sobrenome 	 = $_POST['sobrenome'];
						$endereco 	 = $_POST['endereco'];
						$cidade 	 = $_POST['cidade'];
						$estado  	 = $_POST['estado'];
						$email  	 = $_POST['email'];
						$celular 	 = $_POST['celular'];

						include 'insere_cadastro.inc';											
			 		?>
					
				<center>
		<br>
	</body>
</html>


<!-- LINKS -->
<!-- TEMPLATE ..................https://foundation.zurb.com/templates-previews-sites-f6-xy-grid/blog.html -->
<!-- NAV .......................https://foundation.zurb.com/building-blocks/blocks/scrollhide-nav.html -->
<!-- ÍCONES FIXOS LATERAIS .....https://foundation.zurb.com/building-blocks/blocks/sticky-social-bar.html -->




