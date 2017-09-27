<?php 
	class Setor {

    public $nome;
    public $empresa;
	public $endereco;
	protected $responsavel;


    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

	function getEmpresa() {
        return $this->empresa;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }
	
    function getEndereco() {
        return $this->endereco;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }	
	
    function getRespondavel() {
        return $this->responsavel;
    }

    function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }
}

?>