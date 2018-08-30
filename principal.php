<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> - Principal</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
	<meta property="og:description" content="Divirta-se no jogo mais divertido e adorado por todos, crie sua conta agora mesmo e venha fazer parte de habbop hotel. Assim que entrar no game receberá cerca de 90k de moedas e 90k de duckets e mais, na primeira vez que entrar receberá 20 diamantes. " >
	<meta name="keywords" content="Habbot, Habbop, Prisma Server, Habbinc, Binc, Lella, Habbinfo, Hablitz, Habbo, Portal Habbos, Games de Internet, jogo de chat, Bate papo virtual, jogos, games browser">
	<link rel="stylesheet" type="text/css" href="estilo/index.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/navbar.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/home.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/config.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/perfil.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body  onload="animeScroll()">
	  						<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=1758542167531087&autoLogAppEvents=1';
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
<div class="container-fluid" id="principal_fundo">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12" style="margin-top: 5px;">
				<img data-animar="left" src="img/logo_habbops.png" class="img-fluid">
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<ul data-animar="right" class="menu_top">
					<li><a href="">Política de Cookie <i class="fas fa-book"></i></a></li>
					<li><a href="">Etiqueta Habbop <i class="fas fa-book"></i></a></li>
					<li><a href="">Navegador <i class="fab fa-chrome"></i></a></li>
					<li><a href="">Desconectar <i class="fas fa-sign-out-alt"></i></a></li>
				</ul>
			</div>
		</div>
			<div class="row">
				<div class="col-lg-6 col-12 col-md-6 row_espaco">
					<div  data-animar="left" class="avatares av">
						<img src="http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml" class="img-fluid img-avatar">
					</div>
					<div  data-animar="right" class="avatar_name">
						<h3>NomeUser</h3>
					</div>
					<div  data-animar="right" class="avatares-about">
						<p title="sexo">  <i style="color: #b00dba;margin-left: 4px;"  class="far fa-comment"></i> Peidei e sai correndo.</p>
					</div>
					<div data-animar="right" class="avatar_coins">
						<ul>
							<li><a href="#"><i    title="Moedas" style="color: #b00dba;" class="fas fa-coins"></i> 0</a></li>
							<li><a href="#"><i    title="Duckets" style="color: #b00dba;"  class="fas fa-feather-alt"></i> 0</a></li>
							<li><a href=""> <i    title="Diamantes" style="color: #b00dba;" class="fas fa-gem"></i> 0</a></li>
							<li><a href=""> <i    title="Pontos"  style="color: #b00dba;" class="fas fa-bullseye"></i> 0</a></li>
						</ul>
					</div>
			</div>
			<div class="col-lg-6 col-12 col-md-6 row_espaco">
				<center><a href="jogar" target="_blank"><button data-animar="right" class="button_home">Entrar no Hotel</button></a></center>

						<ul data-animar="left" class="button_list">
							<li><a href=""><button>Painel <i class="fab fa-cpanel"></i></button></a></li>
							<li><a href=""><button>Compartilhar <i class="fab fa-facebook-square"></i></button></a></li>
							<li><a href="jogar"><button>Hotel <i class="fas fa-window-maximize"></i></button></a></li>
						</ul>

			</div>
		</div>
	</div>
</div>
	<!-- chamando o arquivo do navbar -->
		<?php include_once('navbar.php'); ?>
			
  <div class="container-fluid" style="margin-top: 10px;">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-8 col-md-8 col-12">
  			<div class="cont_box">
  				<h3> <i style="color: #f50cff;" class="far fa-newspaper"></i> Notícias Recentes</h3>
  			</div>
  			<ul class="menu_tags">
  				<li><a class="pinks" href=""><i style="color: #f50cff;" class="fas fa-globe-americas"></i> Tudo</a></li>
  				<li><a   class="greens"  href=""><i style="color: #77de11;" class="fas fa-trophy"></i> Promoções</a></li>
  				<li><a  class="oranges"  href=""><i style="color: #de7711;" class="fas fa-gamepad"></i> Campanhas</a></li>
  				<li><a   class="blue"  href=""><i style="color: #2f6cd1;" class="fas fa-wrench"></i> Atualizações</a></li>
  			</ul>
  				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-color: #0a1f55;">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="http://habboo-a.akamaihd.net/c_images/web_promo/storiesshakespeare_ballinvitation_promo.png" alt="First slide">
						  <div class="carousel-caption d-none d-md-block carousel_title">
						    <h5>Titulo Habbop</h5>
						    <p>Melhor hotel</p>
						  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="https://images.habbo.com/web_images/habbo-web-articles/lpromo_carnivalcosval16.png" alt="Second slide">
				      	<div class="carousel-caption d-none d-md-block carousel_title">
						    <h5>Titulo Habbop</h5>
						    <p>Melhor hotel</p>
						 </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="https://images.habbo.com/web_images/habbo-web-articles/lpromo_HF_kingsday.png" alt="Third slide">
				      	 <div class="carousel-caption d-none d-md-block carousel_title">
						    <h5>Titulo Habbop</h5>
						    <p>Melhor hotel</p>
						  </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Anterior</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Próximo</span>
				  </a>
			</div>
			<div class="row_articles">
				<div class="row" style="padding-top: 5px;">
					<div class="col-lg-6 col-md-6 col-12">
					<div class="titles_articles_habbop">
						<div class="img_article">
							<a href=""><img src="http://3.bp.blogspot.com/-y9CIsCfIlFQ/UmKhMauolgI/AAAAAAAABe8/J-b_BcC6Ssg/s1600/300x187_newyear2008.gif" class="img_articles"></a>
						</div>
						<div class="title_articles">
							<h6><a href="">Teste teste teste</a></h6>
							<span class="tags_span"><i style="color: #de7711;" class="fas fa-gamepad"></i> Campanhas </span>
							<span class="p_date"> | <i class="far fa-calendar-alt"></i> 04/08/2018</span>
							<p>Description</p>
						</div>
					</div>
					<div class="titles_articles_habbop">
						<div class="img_article">
							<a href=""><img src="http://3.bp.blogspot.com/-y9CIsCfIlFQ/UmKhMauolgI/AAAAAAAABe8/J-b_BcC6Ssg/s1600/300x187_newyear2008.gif" class="img_articles"></a>
						</div>
						<div class="title_articles">
							<h6><a href="">Teste teste teste</a></h6>
							<span class="tags_span"><i style="color: #de7711;" class="fas fa-gamepad"></i> Campanhas </span>
							<span class="p_date"> | <i class="far fa-calendar-alt"></i> 04/08/2018</span>
							<p>Description</p>
						</div>
					</div>


					</div>
					<div class="col-lg-6 col-md-6 col-12">
					<div class="titles_articles_habbop">
						<div class="img_article">
							<a href=""><img src="http://3.bp.blogspot.com/-y9CIsCfIlFQ/UmKhMauolgI/AAAAAAAABe8/J-b_BcC6Ssg/s1600/300x187_newyear2008.gif" class="img_articles"></a>
						</div>
						<div class="title_articles">
							<h6><a href="">Teste teste teste</a></h6>
							<span class="tags_span"><i style="color: #de7711;" class="fas fa-gamepad"></i> Campanhas </span>
							<span class="p_date"> | <i class="far fa-calendar-alt"></i> 04/08/2018</span>
							<p>Description</p>
						</div>
					</div>
					<div class="titles_articles_habbop">
						<div class="img_article">
							<a href=""><img src="http://3.bp.blogspot.com/-y9CIsCfIlFQ/UmKhMauolgI/AAAAAAAABe8/J-b_BcC6Ssg/s1600/300x187_newyear2008.gif" class="img_articles"></a>
						</div>
						<div class="title_articles">
							<h6><a href="">Teste teste teste</a></h6>
							<span class="tags_span"><i style="color: #de7711;" class="fas fa-gamepad"></i> Campanhas </span>
							<span class="p_date"> | <i class="far fa-calendar-alt"></i> 04/08/2018</span>
							<p>Description</p>
						</div>
					</div>
					<div style="height: 50px;"></div>
					</div>
				</div>
			</div>
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">
  			<div class="cont_box">
  				<h3> <i style="color: #f50cff;" class="fab fa-facebook"></i> Facebook</h3>
  			</div>
  			<br>
  			<div id="fb-root">

					<iframe src="https://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/HabbopOfficial/&amp;width=840&amp;height=322&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:450px;" allowtransparency="true"></iframe>
  				</div>
  			</div>
  		</div>
  		<div class="row" style="margin-top: 5px;">
  			<div class="col-lg-8 col-md-8 col-12">
  				<div class="cont_box">
  				<h3> <i style="color: #f50cff;" class="far fa-newspaper"></i> Fórum</h3>
  			</div>
  			 	<p style="color: #fff; padding: 10px;">Em breve disponível.</p>
  				</div>
  				<div class="col-lg-4 col-md-4 col-4">
  					
  					
  				</div>
  		</div>
  	</div>
  </div>
<footer class="page-footer font-small footer_back">
  <div class="footer-copyright text-center py-3 format_footer">© 2018 Copyright: Habbop CMS 2.0 feito com <i  style="color: #b00dba;" class="fas fa-heart"></i> desenvolvida por <b>Eduardo Melo</b>
    <a href="#"> Prisma Server</a>
  </div>
</footer>
<!-- JavaScript -->
<script type="text/javascript" src="js/request.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>