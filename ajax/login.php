<?php
require_once('../Config/server-data.php_data_classes-core.php.php'); 
require_once('../Config/pages_link_name.php');
$manutencao = mysql_num_rows(mysql_query("SELECT mantenimiento FROM cms_settings WHERE mantenimiento = '1'"));


if($_POST)
{


if($manutencao == '1')
{

	header('location: /manutencao');
}else
{
	if(isset($_SESSION['username']) || isset($_SESSION['mail']))
	{
	header('location: me');
	}else{
		header('location: ');
	}
	$checar_ip = mysql_query("SELECT id,username, ip_last FROM users WHERE ip_last = '".$remote_ip."'");

		// variáveis da request
		$usuarioEmail = $_REQUEST['nickOuEmail'];
		$usuarioSenha = $_REQUEST['minhaSenha'];


		if(isset($usuarioEmail) && isset($usuarioSenha) )
		{
			if(empty($usuarioEmail))
			{

				echo  "Um dos campos estão nulo, por favor verifique se há dados.";
			}
			elseif(empty($usuarioSenha))
			{

				echo  "Um dos campos estão nulo, por favor verifique se há dados.";
			}
			else
			{
				if(isset($_COOKIE['password']))
				{
					$verificacaoPass = HoloText($_REQUEST['password']);
				}
				else
				{
					$verificacaoPass = HoloText($usuarioSenha);
				}

					$usuarios = mysql_fetch_assoc(mysql_query("SELECT username, password, mail FROM users WHERE username = '".HoloText($usuarioEmail)."' OR  mail = '".HoloText($usuarioEmail)."' AND password = 'MD5(SHA1(MD5(". HoloText($usuarioSenha) ."'))) LIMIT '1'"));
				if($usuarios)	
				{

					$banimentoVerifica = mysql_num_rows(mysql_ftech_assoc(mysql_query("SELECT value,user_email,id_user,expire,reason FROM bans WHERE value = '".HoloText($usuarioEmail)."' OR value = '".$_SERVER['REMOTE_ADDR']."' OR  user_email= '".HoloText($usuarioEmail)."' AND  id_user='".$checar_ip['id']."' AND expire > '".time(). "'  LIMIT 1")));
					

					if( $banimentoVerifica > 0)
					{

							echo "Você foi banido do servidor pelo seguinte motivo '".$banimentoVerifica['reason']."'  até '".$banimentoVerifica['reason']."', caso for um engano, entrar em contato por imediato com a equipe.";
					}
					else
					{
						$_SESSION['username'] = $usuarios['username'] || $usuarios['mail'];
						$_SESSION['password'] = $usuarios['password'];

						if(isset($_GET['p'])){

							header('location: ');
						}
						else
						{ 
							header('location: me');
						}
					}
				}
				else
				{
					
					echo "Sua senha não é válida!";
					
				}
			}

		}
}

}
?>
