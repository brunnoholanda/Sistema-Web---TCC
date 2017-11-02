<?php
	class Usuario
	{
		private $codUsuario;
		private $nome;
		private $login;
		private $senha;
		private $logado;
		
		function getCodUsuario()
		{
			returne $this->codUsuario;
		}
		function getNome()
		{
			returne $this->nome;
		}
		function getLogin()
		{
			returne $this->login;
		}
		function getSenha()
		{
			returne $this->senha;
		}
		function getLogado()
		{
			returne $this->logado;
		}	

		function setCodUsuario($codUsuario)
		{
			$this->codUsuario = $codUsuario;
		}
		function setNome($nome)
		{
			$this->nome = $nome;
		}
		function setLogin($login)
		{
			$this->login = $login;
		}
		function setSenha($senha)
		{
			$this->senha = $senha;
		}
		function setLogado($logado)
		{
			$this->logado = $logado;
		}		
	}
?>