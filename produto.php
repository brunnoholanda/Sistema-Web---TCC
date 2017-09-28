<?php 

	class Produto {

    public $nome;
	public $validade;
	public $fabricacao;
	public $tipo;
	public $identificacao;
	public $peso;
	public $estado;
	public $valor;
	

	
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
	
    function getValidade() {
        return $this->validade;
    }

    function setValidade($validade) {
        $this->validade = $validade;
    }	

    function getFabricacao() {
        return $this->fabricacao;
    }

    function setFabricacao($fabricacao) {
        $this->fabricacao = $fabricacao;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }	
	
    function getIdentificacao() {
        return $this->identificacao;
    }

    function setIdentificacao($identificacao) {
        $this->identificacao = $identificacao;
    }

    function getPeso() {
        return $this->peso;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

	    function getEstado() {
        return $this->estado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
	
    function getValor() {
        return $this->valor;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }	
}

?>