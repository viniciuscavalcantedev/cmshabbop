<?php
require_once('Config/server-data.php_data_classes-core.php.php'); 
require_once('Config/pages_link_name.php');
$manutencao = mysql_num_rows(mysql_query("SELECT mantenimiento FROM cms_settings WHERE mantenimiento = '1'"));
if($manutencao == '1')
{

	header('location: /manutencao');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> <?php echo $hotel_prisma; ?> - Nunca foi tão divertido jogar este jogo!</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description"content="Divirta-se no jogo mais divertido e adorado por todos, crie sua conta agora mesmo e venha fazer parte de habbop hotel. Assim que entrar no game receberá cerca de 90k de moedas e 90k de duckets e mais, na primeira vez que entrar receberá 20 diamantes. " >
	<meta name="keywords" content="Habbot, Habbop, Prisma Server, Habbinc, Binc, Lella, Habbinfo, Hablitz, Habbo, Portal Habbos, Games de Internet, jogo de chat, Bate papo virtual, jogos, games browser">
	<link rel="stylesheet" type="text/css" href="estilo/index.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body onload="animeScroll()">

<div id="alert_danger" class="container-fluid" >
	<div class="container back_error">
		<div class="row">
			<div class="col-lg-12 col-12 col-md-12 msg">
				<h6  id="alertar_hp"> Senha inválida. </h6>
			</div>
		</div>		
	</div>
</div>
<nav class="navbar navbar-light habbop_pink justify-content-between habbop_navbar">
   <a class="navbar-brand"><!-- adicionar botão compartilhar do facebook --> </a>
  <div class="form-inline padding_nav" >
    <input class="form-control mr-sm-2" type="text"  required name="NameLogin" id="nickUserEmail" placeholder="Usuário / E-MAIL">
    <input class="form-control mr-sm-2" type="password"  required name="NameSenha"  id="senhaUser" placeholder="Senha" aria-label="Entrar">
    <button class="button_logar my-2 my-sm-0"   name="logar" id="entrarPrisma" >Entrar</button>
    <button class="button_request my-2 my-sm-0 request"  onclick="requestOpen()" >Esqueceu o seu Login?</button>
  </div>
</nav>
<div class="container-fluid container_fundo">
	<div class="container ">
		<div class="row">
			<div class="col-lg-6 col-12 col-sm-6">
			<img data-animar="left" class="img-fluid image_index" src="img/fundo_unicornio_bg.png">
			</div>
			<div class="col-lg-6 col-12 col-sm-6">
				<center><h1 data-animar="right" id="DisplayCamp" class="h_title">VENHA FAZER PARTE DA FAMÍLIA HABBOPIANA!</h1></center>
				<center><a id="DisplayRegister" href="cadastro"><button class="button_register sizes">REGISTRE-SE</button></a></center>

				<!-- área de perdeu a senha -->
			<div id="DisplayRequest" data-animar="right" >
				<img onclick="openOption(4)" style="margin-left: 93%; margin-top: 5px; cursor:pointer;width: 30px;" title="Fechar" class="img-fluid" src="img/closed.png">
				<center><h1 class="h_title">PERDI MINHA CONTA D:!</h1></center>
			<p style="color: #fff; margin-left: 5%;">Selecione uma das opções na qual que você não  lembra.</p>
				<center><button onclick="openOption(1)"  id="displayEmail" class="button_register sizes">E-MAIL</button></center>
				<center><button onclick="openOption(2)" id="displayNick" class="button_register sizes">NICK</button></center>
				<center><button onclick="openOption(3)" id="displaySenha" class="button_register sizes">SENHA</button></center>
			</div>
			<!-- formulários do "Esqueci minha conta" -->
			<div id="displayOptionUm">
				<form method="post" id="login_prisma">
					<div class="form-group">
						<label for="forNick" style="color: #fff;">Informe seu nick</label>
						<input class="form-control mr-sm-2" type="text" id="forNick" name="NameSenha" required placeholder="EX: EduardoMelo" aria-label="Entrar">
						<br>
						 <button id="btn_logar" class="button_logar my-2 my-sm-0" required name="enviarNick" type="button">Enviar</button>
					</div>
				</form>
			</div>
			<div id="displayOptionDois">
				<form method="post">
					<div class="form-group">
						<label for="forEmail" style="color: #fff;">Informe seu e-mail</label>
						<input class="form-control mr-sm-2" type="text" id="forEmail" name="NameSenha" required placeholder="frank@habbop.com.br" aria-label="Entrar">
						<br>
						 <button  class="button_logar my-2 my-sm-0"  name="enviarEmail" type="submit">Enviar</button>
					</div>
				</form>
			</div>
			<div id="displayOptionTres">
				<form method="post">
					<div class="form-group">
						<label for="forNicks" style="color: #fff;">Informe o seu e-mail</label>
						<input class="form-control mr-sm-2" type="email" id="forNicks" name="NameSenha" required  aria-label="Entrar">
						<br>
						 <button  class="button_logar my-2 my-sm-0"  name="enviarNicks" type="submit">Enviar</button>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid cotainer_blue_escuro">
	<div class="container">
		<center><h1 class="description_h">Por que Jogar Habbop?</h1></center>
		<div class="row">
			<div class="col-lg-4 col-12 col-md-4  container_about">
				<img src="img/habbop_hotel_bg.png" class="img-fluid">
			</div>
			<div class="col-lg-8 col-12 col-md-8 container_about">
				<p class="about_p description_about_p">No habbop hotel você terá muitas vantagens incluindo 90k de duckets e 90k de moedas quando for se cadastrar e tem ainda mais, se você ajudar o hotel se tornar um lugar melhor, você poderá divulgar os seus referidos e com os referidos poderá receber uma quantia em diamantes, bom está esperando o que entre já.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-4 col-12">
				<div class="sub_title">
					<h5><i   style="color: #b00dba;" class="fas fa-gem"></i> Top Diamantes</h5>
				</div>
				<div class="description_hall">
					<!-- avtar -->
				<?php 


					$usuarios = "SELECT username, look, vip_points FROM  users WHERE activity_points > 1 DESC LIMIT 6";

					while(mysql_fetch_array($usuarios))
					{
				?>
					<div class="border_avatar">
						<table  width="452" border="0" >
	 						 <tr>
								<td   width="50" valign="top">
									<div style="background:url(http://habbo.city/habbo-imaging/avatarimage?figure=lg-3136-76.sh-3252-92-92.hr-832-56.cc-3246-76.ch-660-92.hd-605-10.he-1610-62&size=b&action=wav&direction=3&head_direction=3&gesture=sml) -10px -14px; width:50px; height:60px;"></div>
								</td>
								<td class="description_avatar" width="392" valign="top">
									<div style="padding-top:3px;"><b>NomeUsuário</b><br /><font> <i   style="color: #b00dba;" class="fas fa-gem"></i>  Diamantes:</font> <b>0</b></div>
								</td>
							</tr>
						</table>
					</div>
				<?php } 
					if(empty(mysql_fetch_array($usuarios)))
					{
				 ?>
				 		<div class="border_avatar">
						<p><i  style="color: red; text-indent: 1.5em;margin-top: 23px;" class='fas fa-exclamation-circle'></i> Nenhum usuário encontrado :/.</p>
					</div>
				<!-- avatar -->
				<?php } ?>


			</div>
		</div>

			<div class="col-lg-4 col-sm-4 col-12">
				<div class="sub_title">
					<h5><i    style="color: #b00dba;" class="fas fa-bullseye"></i> Top Pontos Evento</h5>
				</div>
				<div class="description_hall">
					<!-- avtar -->
				<?php 


					$usuarios = "SELECT username, look, pontos_evento FROM  users WHERE activity_points > 1 DESC LIMIT 6";

					while(mysql_fetch_array($usuarios))
					{
				?>
					<div class="border_avatar">
						<table  width="452" border="0" >
	 						 <tr>
								<td   width="50" valign="top">
									<div style="background:url(http://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $usuarios['look']; ?>&size=b&action=wav&direction=3&head_direction=3&gesture=sml) -10px -14px; width:50px; height:60px;"></div>
								</td>
								<td class="description_avatar" width="392" valign="top">
									<div style="padding-top:3px;"><b><?php echo $usuarios['username']; ?></b><br /><font> <i    style="color: #b00dba;" class="fas fa-bullseye"></i>  Pontos:<?php echo $usuarios['pontos_evento'] ?></font> <b>0</b></div>
								</td>
							</tr>
						</table>
					</div>
				<?php } 

				if(empty(mysql_fetch_array($usuarios)))
					{
				 ?>
				 		<div class="border_avatar">
						<p><i  style="color: red; text-indent: 1.5em;margin-top: 23px;" class='fas fa-exclamation-circle'></i> Nenhum usuário encontrado :/.</p>
					</div>
				<!-- avatar -->
				<?php } ?>
				<!-- avtar -->
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-12">

				<div class="sub_title">
					<h5> <i  style="color: #b00dba;"  class="fas fa-feather-alt"></i> Top Duckets</h5>
				</div>
				<div class="description_hall">
					<!-- avtar -->
				<?php 


					$usuarios = "SELECT username, look, activity_points FROM  users WHERE activity_points > 1 DESC LIMIT 6";

					while(mysql_fetch_array($usuarios))
					{
				?>
					<div class="border_avatar">
						<table  width="452" border="0" >
	 						 <tr>
								<td   width="50" valign="top">
									<div style="background:url(http://habbo.city/habbo-imaging/avatarimage?figure=<?php echo $usuarios['look'] ?>"&size=b&action=wav&direction=3&head_direction=3&gesture=sml) -10px -14px; width:50px; height:60px;"></div>
								</td>
								<td class="description_avatar" width="392" valign="top">
									<div style="padding-top:3px;"><b><?php echo $usuarios['username'] ?></b><br /><font><i  style="color: #b00dba;"  class="fas fa-feather-alt"></i> Duckets:
									 <?php echo $usuarios['activity_points'] ?></font> <b>0</b></div>
								</td>
							</tr>
						</table>
					</div>
				<?php }

					if(empty(mysql_fetch_array($usuarios)))
					{
				 ?>
				 		<div class="border_avatar">
						<p><i  style="color: red; text-indent: 1.5em;margin-top: 23px;" class='fas fa-exclamation-circle'></i> Nenhum usuário encontrado :/.</p>
					</div>
				<!-- avatar -->
				<?php } ?>
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
<script type="text/javascript" src="js/login_ajax.min.js"></script>
<script type="text/javascript" src="js/request.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>