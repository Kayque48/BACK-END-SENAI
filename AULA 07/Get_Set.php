<?php

class Pessoas {
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha) {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setTelefone($telefone);
        $this->setIdade($idade);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function exibirInfo() {
        return "Nome: " . $this->getNome() . "\n" .
            "CPF: " . $this->getCpf() . "\n" .
            "Telefone: " . $this->getTelefone() . "\n" .
            "Idade: " . $this->getIdade() . "\n" .
            "Email: " . $this->getEmail() . "\n" .
            "Senha: " . $this->getSenha() . "\n";
    }

    public function setNome($nome) {
        $this->nome=ucwords(string: strtolower(string: $nome));
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCpf($cpf) {
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setTelefone($telefone) {
        $this->telefone = preg_replace('(\D)', '', $telefone);
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setIdade($idade) {
        $this->idade = abs((int) $idade);
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha() {
        return $this->senha;
    }


}

$alunos1 =
new Pessoas(
        'kaYqUe',
        '523.542.178-70',
        '99818-3546',
        '-19',
        'kayquec158@gmail.com',
        'abc123'
    );


echo $alunos1 -> exibirInfo();