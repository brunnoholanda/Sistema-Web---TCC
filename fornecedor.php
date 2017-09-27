<?php 

	class Fornecedor {

    public $nome;
	protected $endereco;
	protected $telefone;
	private $cnpj;
	
	
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }	

    function getEndereco() {
        return $this->endereco;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }	
	
    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getCNPJ() {
        return $this->cnpj;
    }

    function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }
	
}

?>