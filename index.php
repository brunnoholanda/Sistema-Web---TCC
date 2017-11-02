<html>
	<head>
		<meta charset="UTF-8">
		<title>Início</title>
	</head>
	<body>
		<form method="POST" action="index.php">
			Usuário
			<input type="text" name="login"><br>
			Senha
			<input type="password" name="senha"><br>
			
			<input type="submit" name="Entrar" value="Entrar">
			
			
		<?php
			if ($_POST) 
			{
				include 'C:\Program Files\EasyPHP-DevServer-14.1VC9\data\localweb\projects\Sistema\classes\DAO\Conexao.php';
				include 'C:\Program Files\EasyPHP-DevServer-14.1VC9\data\localweb\projects\Sistema\classes\DAO\UsuarioDAO.php';
				
				$usuarioDAO = new UsuarioDao();
				
				$login =  $_POST['login'];
				$senha =  $_POST['senha'];
				
				$user = $usuarioDAO->login($senha, $login);
				
				if ($user == true)
				{
					$_SESSION['login']=$login;
					$_SESSION['senha']=$senha;
				header("location: admin.php");
				}
				else
				{
					header ("location: index.php?erro=senha");
				}
			}
		?>
		
		<?php
			if ($_GET)
			{
				if (isset($_GET['erro']))
				{
					echo "Usuário ou Senha inválidos!";
				}
			}
		
		
		
		?>
	</body>
</html>