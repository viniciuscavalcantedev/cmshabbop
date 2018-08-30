<?php
require_once('../Config/server-data.php_data_classes-core.php.php'); 
require_once('../Config/pages_link_name.php');


		// recebendo os dados pelo javascript
		$nickForm = $_POST['Apelido'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$confirmSenha = $_POST['forSenhaConfirma'];
		$recaptcha = $_POST['recaptcha'];
		// ================================

		if(empty($nickForm) && empty($email) && empty($senha) && empty($confirmSenha) && empty($recaptcha))
		{
			$error =   "Por favor, preencha todos os campos!!";
		}else
		{
			
			if(mysql_num_rows(mysql_query("SELECT usernamne FROM users WHERE username = '".HoloText($nickForm)."' LIMIT 1")) == 1)
			{
					$error =  "Apelido já está sendo utilizado.";
			}
			
			else if(mysql_num_rows(mysql_query("SELECT mail FROM users WHERE mail = '".HoloText($email). "' LIMIT 1")) == 1 )
			{
					$error =  "E-mail já está sendo utilizado";

			}else if(strlen($nickForm) < 16)
			{
				$error = "Permitido no máximo até 6 caracteres.";
			}
					
			}
			if(isset($error))
			{
				echo $error;
			}
			
		
?>