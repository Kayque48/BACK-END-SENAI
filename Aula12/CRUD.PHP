<?php

Class Aluno {
    private $id;
    private $nome;
    private $curso;

    public function __construct($id, $nome,$curso) {
        $this->setId($id);
        $this->setNome($nome);
        $this->setCurso($curso);
    }

    public function setId($id) {
        $this->id=$id;
    }

    public function setNome($nome) {
        $this->id=$nome;
    }

    public function setCurso($curso) {
        $this->id=$curso;
    }

    public function getId() {
        return $this->id;
    }

    
    public function getNome() {
        return $this->nome;
    }

    
    public function getCurso() {
        return $this->curso;
    }
}

Class AlunoDAO {
    private $alunos = [];

    public function criarAluno(Aluno $aluno) {
        $this->alunos[$aluno->getId()] = $aluno;
    }

    public function lerAluno() {
        return $this->alunos;

    }

    public function atualizarAluno() {

    }

    public function excluirAluno($id) {
        unset($this->aluno[$id]);
    }

}