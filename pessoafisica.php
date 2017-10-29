<?php 

	class PessoaFisica {

    public $nome;
    protected $idade;
	public $sexo;
	protected $endereco;
	protected $telefone;
	public $cargo;
	private $cpf;
	private $rg;
	protected $relacionamento;
	
	
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
	
    function getIdade() {
        return $this->idade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }	

    function getSexo() {
        return $this->sexo;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
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

    function getCargo() {
        return $this->cargo;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function getCPF() {
        return $this->cpf;
    }

    function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    function getRG() {
        return $this->rg;
    }

    function setRG($rg) {
        $this->rg = $rg;
    }

    function getRelacionamento() {
        return $this->relacionamento;
    }

    function setRelacionamento($relacionamento) {
        $this->relacionamento = $relacionamento;
    }	
}

?>