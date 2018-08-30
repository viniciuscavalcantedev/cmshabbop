<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> - Configurar Interações</title>
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
								<li><a  href="<?php echo $avatar; ?>" ><i class="fas fa-address-book"></i> Avatar</a></li>
								<li><a  style="color: #f50cff;" href="<?php echo $interacoes; ?>"><i class="far fa-hand-pointer"></i> Interações</a></li>
								<li><a href="<?php echo $pessoais; ?>" id="conf2"><i class="far fa-user"></i> Pessoais</a></li>
								<li><a href="<?php echo $perfil_eu ?>" id="conf3"><i class="fas fa-address-book"></i>  Perfil</a></li>

							</ul>
							<div class="cont_box_two">
	  							<h6> <i title="Configurações" class="fas fa-cogs"></i> Configuração Discord <span class="breve">BREVE</span></h6>
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
						<img src="../img/interacao_img.png">
						<p>Deixe de sua prefêrencia como seu avatar dentro do game vai reagir a comandos de aplicações de efeito como, <b>pull</b> e <b>push</b> e entre outros e assim você poderá ter uma boa experiência do seu jeito.</p>
						<br>
						<br>
						<br>
						<br>
						<form method="post">
							<p class="alert_green">Marcando uma das opções estará desativando um dos comando que é aplicado ao seu avatar. Caso contrario para desativar tudo  clique <a href=""  style="color: #fff;">aqui</a></p>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name="push_effect" type="checkbox" id="inlineCheckbox1" value="option1">
						  <label class="form-check-label" for="inlineCheckbox1" style="color: #fff">Bloquear todos os comandos que o usuário pode te aplicar.<b> push</b></label>
						</div>
						<br>
						<br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input"name="pull_effect" type="checkbox" id="inlineCheckbox2" value="option2">
						  <label class="form-check-label" for="inlineCheckbox2" style="color: #fff;"> Bloquear usuários que tentem aplicar o comando <b> pull</b></label>
						</div>
						<br>
						<br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name="mimic_effect" type="checkbox" id="inlineCheckbox3" value="option3">
						  <label class="form-check-label" for="inlineCheckbox3" style="color: #fff">Bloquear usuários que tentem aplicar o comando <b> mimic</b></label>
						</div>
						<br>
						<br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name="kiss_effect" type="checkbox" id="inlineCheckbox4" value="option4" >
						  <label class="form-check-label" for="inlineCheckbox4" style="color: #fff">Impedir que os usuários beijem você.</label>
						</div>
						<br>
						<br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input"  name="sex_effect" type="checkbox" id="inlineCheckbox4" value="option5" >
						  <label class="form-check-label" for="inlineCheckbox5" style="color: #fff">Impedir que os usuários envie solicitação de sexo para você.</label>
						</div>
							<br>
							<br>
						<h4 style="color: #fff;">Àrea exclusiva dos VIP</h4>

						<div class="form-check form-check-inline">
						  <input class="form-check-input"  name="vip_spull_effect" type="checkbox" id="inlineCheckbox4"disabled value="option6" >
						  <label class="form-check-label" for="inlineCheckbox6"  style="color: #fff">Bloqueie usuários que tentem te dar <b>spull</b>.</label>
						</div>
						<br>
						<br>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" name="vip_spush_effect" type="checkbox" id="inlineCheckbox4" disabled value="option7" >
						  <label class="form-check-label" for="inlineCheckbox7"  style="color: #fff">Bloqueie usuários que tentem te dar <b>spush</b>.</label>
						</div>
						<br>
						<br>
						  <button type="submit" class="btn btn-primary" name="effect_save_all">Salvar alterações</button>
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