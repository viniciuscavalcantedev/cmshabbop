<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> - Configurar Avatar</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
	<meta property="og:description" content="Divirta-se no jogo mais divertido e adorado por todos, crie sua conta agora mesmo e venha fazer parte de habbop hotel. Assim que entrar no game receberá cerca de 90k de moedas e 90k de duckets e mais, na primeira vez que entrar receberá 20 diamantes. " >
	<meta name="keywords" content="Habbot, Habbop, Prisma Server, Habbinc, Binc, Lella, Habbinfo, Hablitz, Habbo, Portal Habbos, Games de Internet, jogo de chat, Bate papo virtual, jogos, games browser">
	<link rel="stylesheet" type="text/css" href="../estilo/index.min.css">
	<link rel="stylesheet" type="text/css" href="../estilo/navbar.min.css">
	<link rel="stylesheet" type="text/css" href="../estilo/home.min.css">
	<link rel="stylesheet" type="text/css" href="../estilo/config.min.css">
	<link rel="stylesheet" type="text/css" href="../estilo/bootstrap.min.css">
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
				<img data-animar="left" src="../img/logo_habbops.png" class="img-fluid">
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
		<?php include_once('../navbar.php'); ?>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12 config_pri">
						<h1>Configurações Gerais </h1>
					</div>
				</div>
			</div>
		</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-12 col-lg-4 back_menu">
						<div class="menu_config" data-animar="left">
							 <div class="cont_box_two">
	  							<h6> <i title="Configurações" class="fas fa-cogs"></i> Configurar de Usuário</h6>
	  						</div>
							<ul class="main_menu_config">
								<li><a style="color: #f50cff;" href="<?php echo $avatar; ?>" ><i class="fas fa-address-book"></i> Avatar</a></li>
								<li><a  href="<?php echo $interacoes; ?>"><i class="far fa-hand-pointer"></i> Interações</a></li>
								<li><a href="<?php echo $pessoais; ?>" id="conf2"><i class="far fa-user"></i> Pessoais</a></li>
								<li><a href="<?php echo $perfil_eu ?>" id="conf3"><i class="fas fa-address-book"></i>  Perfil</a></li>

							</ul>
							<div class="cont_box_two">
	  							<h6> <i title="Configurações" class="fas fa-cogs"></i> Configuração Discord</h6>
	  						</div>
	  						<ul class="main_menu_config">
								<li><a href="<?php echo $breve; ?>" ><i class="fas fa-address-book"></i> Perfil</a></li>
								<li><a href="<?php echo $breve; ?>" ><i class="far fa-comment"></i> Apelido</a></li>
								<li><a href="<?php echo $breve; ?>" ><i class="far fa-user"></i> Personalização</a></li>
							</ul>

	  						<div class="cont_box_two">
	  							<h6> <i title="Configurações" class="fas fa-cogs"></i> Configuração Vinculação <span class="breve">BREVE</span></h6>
	  						</div>
	  						  <ul class="main_menu_config">
								<li><a href="<?php echo $breve; ?>" ><i class="fab fa-facebook"></i> Facebook</a></li>
								<li><a href="<?php echo $breve; ?>" ><i class="fab fa-twitter-square"></i> Twitter</a></li>
								<li><a href="<?php echo $breve; ?>" ><i class="fab fa-google"></i> Google</a></li>
							</ul>

							<div class="cont_box_two">
	  							<h6> <i title="Configurações" class="fas fa-cogs"></i> Frank <span class="breve">BREVE</span></h6>
	  						</div>
	  						  <ul class="main_menu_config">
								<li><a href="<?php echo $breve; ?>" id="conf10"><i title="Configurações" class="fas fa-cogs"></i> Ensinar</a></li>
								<li><a href="<?php echo $breve; ?>" id="conf11"><i title="Configurações" class="fas fa-cogs"></i> Sugestões</a></li>
								<li><a href="<?php echo $breve; ?>" id="conf12"> <i title="Configurações" class="fas fa-cogs"></i> Adicionar</a></li>
							</ul>

						</div>
					</div>

				<div class="col-md-6 col-12 col-lg-6 back_configurar">
					<div id="avatar_c">
						<img src="../img/habbop_avatares_h.gif">
						<p>Configure seu personagem do seu jeito, altere nicks, altere sua missão e muito mais, veje suas opções e deixe do seu  gosto que assim você tem a maior experiência conosco dentro do game. </p>
						<br>
						<br>
						<br>
						<br>
						<form method="post">
						  <div class="form-group config_f">
						    <label for="fnickname">Nickname</label>
						    <input type="text" class="form-control" id="fnickname" name="nick_name" ria-describedby="nicksAvatas" placeholder="EduardoMelo" disabled="">
						    <small id="nicksAvatas" class="form-text text-muted">Alteração de nick name somente exclusivo para VIPS.</small>
						  </div>
						  <div class="form-group config_f">
						    <label for="favatarImg">Avatar Imaging</label>
						    <input type="password" class="form-control" id="favatarImg"  name="avatar_imaging" aria-describedby="avatarIMG" placeholder="lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62" disabled="">
						    <small id="avatarIMG" class="form-text text-muted">Disponível somente para usuários developers.</small>
						  </div>
						   <div class="form-group config_f">
						    <label for="ftags">Tag</label>
						    <input type="password" class="form-control" id="ftags" name="tag_avatar" aria-describedby="tagAria" placeholder="até 6 caracteres" >
						    <small id="tagAria" class="form-text text-muted">Você poderá alterar sua tag por aqui <b>[SouDemais]</b> .</small>
						  </div>
						  	<div class="form-group config_f">
						    <label for="ftags">Missão</label>
						    <input type="password" class="form-control" id="ftags"  name="missao_avatar" aria-describedby="tagAria" placeholder="até 6 caracteres" >
						    <small id="tagAria" class="form-text text-muted">Altere suas missões aqui mesmo :D.</small>
						  </div>

						  <button type="submit" name="save_avatar" class="btn btn-primary">Salvar alterações</button>
						</form>
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
<script type="text/javascript" src="../js/config.min.js"></script>
<script type="text/javascript" src="../js/request.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>