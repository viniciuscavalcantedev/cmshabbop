<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> - Hall da Fama</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
	<meta property="og:description" content="Divirta-se no jogo mais divertido e adorado por todos, crie sua conta agora mesmo e venha fazer parte de habbop hotel. Assim que entrar no game receberá cerca de 90k de moedas e 90k de duckets e mais, na primeira vez que entrar receberá 20 diamantes. " >
	<meta name="keywords" content="Habbot, Habbop, Prisma Server, Habbinc, Binc, Lella, Habbinfo, Hablitz, Habbo, Portal Habbos, Games de Internet, jogo de chat, Bate papo virtual, jogos, games browser">
	<link rel="stylesheet" type="text/css" href="estilo/index.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/navbar.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/home.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/hall.min.css">
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
<div class="container-fluid">
	<div class="container">
		<div class="row">

			<!-- <div class="col-12 col-lg-4 col-md-4 lider_promo">
			<h1 class="top_hall"> <i class="fas fa-trophy"></i> LíDER PROMOÇÃO</h1>
				<div class="avatar_img promos" title="Nick" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>

			</div>
		
			<div class="col-12 col-lg-4 col-md-4 lider_evento">
				<h1 class="top_hall"> <i class="fas fa-trophy"></i> LíDER EVENTOS</h1>
				<div class="avatar_img eventos"  title="Nick" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
			</div>
			<div class="col-12 col-lg-4 col-md-4  lider_rico">
				<h1 class="top_hall"> <i class="fas fa-trophy"></i> LíDER RICO</h1>
				<div class="avatar_img ricos" title="Nick" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div> 
			</div>  -->
		</div>
		<div class="row" style="padding-top: 5px;">
			<div class="col-lg-4 col-md-4 col-12">
			<div class="cont_box">
  				<h3> <i style="color: #f50cff;" class="far fa-star"></i> Top 5 Eventos</h3>
  			</div>
  			<div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p><i class="far fa-star"></i> Pontos: 0</p>
  			</div>

  			 <div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p> <i class="far fa-star"></i>Pontos: 0</p>
  			</div>

  			  <div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p> <i class="far fa-star"></i>Pontos: 0</p>
  			</div>

  			  <div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p> <i class="far fa-star"></i>Pontos: 0</p>
  			</div>

  			  <div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p> <i class="far fa-star"></i>Pontos: 0</p>
  			</div>
			</div>
			<div class="col-lg-8 col-md-8 col-12 back_pages">
			<div class="cont_box">
  				<h3> <i style="color: #f50cff;" class="fas fa-question"></i> Hall da fama ?</h3>
  			</div>
  				<img src="img/hall_da_fama.png" class="img-fluid" style="margin-left: 25%; margin-top: 8px;">
  				<p class="text_hall">O Hall da Fama é um sistema que organiza os pontos dos usuários, aqui são registrados e elaborado o ranking dos 10 usuários com mais pontos, os pontos são ganhados através de promoções realizadas dentro do Hotel.</p>
  				<p class="text_hall">Nas notícias e/ou promoções o aplicante diz se irá valer pontos no Hall e caso consta, o mesmo irá deixar quantos pontos irá ser distribuido aos vencedores.</p>
  				<p class="text_hall">Então para entrar no Hall da Fama, você deverá sempre participar e ser ativo no Habbop, agora já sabe como entrar aqui no Hall.</p>
			</div>
		</div>
		<div class="row" style="margin-top: 5px;">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="cont_box">
  				<h3> <i style="color: #f50cff;" class="far fa-star"></i> Top 5 Promoções</h3>
  			</div>
  			<div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p><i class="far fa-star"></i> Pontos: 0</p>
  			</div>

  			  			<div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p><i class="far fa-star"></i> Pontos: 0</p>
  			</div>

  			  			<div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p><i class="far fa-star"></i> Pontos: 0</p>
  			</div>

  			  			<div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p><i class="far fa-star"></i> Pontos: 0</p>
  			</div>

  			  			<div class="user_halls">
  				<div class="avatar_img_hall" style="background: url('http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml');"></div>
  				<h6><i class="far fa-user"></i> NomeUser</h6>
  				<p><i class="far fa-star"></i> Pontos: 0</p>
  			</div>

			</div>
			<div class="col-lg-8 col-md-8 col-12">
				
				<div class="ligas_hall">
					<i style="color: #154697; font-size: 110pt; float:  left;" class="fas fa-trophy"></i>
					<p>Em breve vai ser aberto mais top ranks e tem mais!
					Será aberto quando bater o mínimo de usuários no hotel online fixo(mínimo 100 onlines ).
					Liga dos usuários, mais top ranks  (como top ricos), e entre outros..
					Em breve  será dispobilizados com sua ajuda :D.</p>
				</div>
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