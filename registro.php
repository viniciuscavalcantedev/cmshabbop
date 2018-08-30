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
<html>
<head>
	<meta charset="utf-8">
	<title> <?php echo $hotel_prisma; ?>  - Registro</title>
	<meta name="description"content="Cadastre-se no habbop hotel e seja da nossa famílias. " >
	<meta name="keywords" content="Habbot, Habbop, Prisma Server, Habbinc, Binc, Lella, Habbinfo, Hablitz, Habbo, Portal Habbos, Games de Internet, jogo de chat, Bate papo virtual, jogos, games browser">
	<link rel="stylesheet" type="text/css" href="estilo/index.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/registro.min.css">
	<link rel="stylesheet" type="text/css" href="estilo/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body onload="animeScroll()" class="fundo_registro">
<nav class="navbar navbar-light habbop_pink justify-content-between habbop_navbar">
   <a class="navbar-brand"><!-- adicionar botão compartilhar do facebook --> </a>
    <a href="inicio"><button class="button_request my-2 my-sm-0 request"  type="button">Voltar</button></a>
</nav>
<div class="container-fluid">
	<div class="container" style="margin-bottom: 40px;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12 row_space_top">
			<a href="index.html"><img data-animar="left" src="img/logo_habbops.png" title="Clique aqui oara voltar do início" class="img-fluid"></a>
		<p class="bubble_p" data-animar="right">Venha fazer parte da nossa família</p>
			</div>
		</div>
		<div class="row conatiner_row" >
			<div  data-animar="left" class="col-12 col-lg-6 col-md-6 container_register">
				<h1>Cadastre-se agora!</h1>
				<p class="camp">Todos os campos são obrigatórios e por favor, informe um <b>E-mail</b> válido  para caso de perda de conta, que consiga recupera-la.</p>
				<div>
						<p class="alert_danger" id="displayCinco">Mensagem</p>
					  <div class="form-group">
					    <label for="forNick">Nick:</label>
					    <input type="text"  required class="form-control" id="forNick" aria-describedby="nickHelp" placeholder="EX: Frank">
					    <small id="nickHelp" class="form-text text-muted">Informe um apelido de até 15 caracteres.</small>
					  </div>
					  <div class="form-group">
					    <label for="forEmail">E-MAIL</label>
					    <input type="email"  required class="form-control" id="forEmail" aria-describedby="emailHelp" placeholder="frank@habbop.com.br">
					    <small id="emailHelp" class="form-text text-muted">Informe um e-mail válido para casos de urgência e contatos.</small>
					  </div>
					   <div class="form-group">
					    <label for="forPass">Senha</label>
					    <input type="password"  required class="form-control" id="forPass" placeholder="Sua senha">
					  </div>
					  <div class="form-group">
					    <label for="forSenhaConfirma">Confirmar senha</label>
					    <input type="password" required  class="form-control" id="forSenhaConfirma">
					  </div>
					  <div class="form-group">
					    <label for="forCodigo">Código de Segurança</label>
					    <input type="text"  required class="form-control" id="forCodigo" aria-describedby="codigoHelp">
					    <small id="codigoHelp" class="form-text text-muted">Digite este código :<b id="random_recap"></b></small>
					  </div>
					  <div class="form-check">
					    <input type="checkbox" required class="form-check-input" id="check">
					    <label class="form-check-label" for="check">Ao clicar no botão cadastrar, estarei aceitandos os termos de <a href="#"> Cookie</a> e <a href="#"> Privacidade</a> de <b>Habbop Hotel</b>.</label>
					  </div>
					  <button  class="button_register" id="cadastrarPrisma">Cadastrar</button>
				</div>
			</div>
			<div data-animar="right" class="col-12 col-lg-6 col-md-6 container_about_register">
			<div class="card">
			  <div class="card-header" style="background-color: #12306d;">
			    Ao me cadastrar no habbop, ganho quantas moedas?
			  </div>
			  <div class="card-body card_perfil_body" style="background-color: #1a4090;">
			    <blockquote class="blockquote mb-0">
			      <p>No habbop hotel você receberá uma quantia de 90k de duckets e moedas e tem mais, você poderá participar em sorteios ou até mesmo eventos entre outros e receberá moedas especiais que são os pontos e os diamantes.</p>
			    </blockquote>
			  </div>
			</div>
			<br>
			<div class="card">
			  <div class="card-header" style="background-color: #12306d;">
			   Se eu tiver problemas dentro do servidor o que posso fazer?
			  </div>

			  <div class="card-body" style="background-color: #1a4090;">
			    <blockquote class="blockquote mb-0">
			      <p>Bom temos a nossa equipe de suporte disponível a todo momento dentro do servidor, analisando os seus feedbacks e denúncias, caso você tenha algum problema  com usuários basta reportar o usuário que iremos analiar o seu caso e ajudar.</p>
			    </blockquote>
			  </div>
			</div>
			<br>
			<div class="card">
			  <div class="card-header" style="background-color: #12306d;">
			   Redes Sociais?
			  </div>

			  <div class="card-body" style="background-color: #1a4090;">
			    <blockquote class="blockquote mb-0">
			      <p>Se liga estamos para todo lado! </p>
			      <ul class="list_redes">
			      	<li><a href="https://discord.gg/w8ZKPa3"  target="_blank" >
			      		<img src="img/discord-logo-icone.png" class="fluid" title="Discord - Habbop Hotel" width="45">
			      	</a></li>
			      	<li><a href="https://www.facebook.com/HabbopOfficial/"  target="_blank"><img src="img/90dd9f12fdd1eefb8c8976903944c026--cone-do--cone-do-facebook-by-vexels.png" class="fluid" title="Facebook - Habbop Hotel" width="45"></a></li>
			      	<li><a href="#" target="_blank"><img src="img/b1a3fab214230557053ed1c4bf17b46c-twitter-icon-logo-by-vexels.png" title="Twitter - Habbop Hotel" class="fluid"  width="45"></a></li>

			      </ul>
			    </blockquote>
			  </div>
			</div>


			</div>
		</div>
	</div>
</div>
</body>
<footer class="page-footer font-small footer_back">
  <div class="footer-copyright text-center py-3 format_footer">© 2018 Copyright: Habbop CMS 2.0 feito com <i  style="color: #b00dba;" class="fas fa-heart"></i>  desenvolvida por <b>Eduardo Melo</b>
    <a href="#"> Prisma Server</a>
  </div>
</footer>
<!-- JavaScript -->
<script type="text/javascript" src="js/registro_ajax.min.js"></script>
<script type="text/javascript" src="js/request.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>