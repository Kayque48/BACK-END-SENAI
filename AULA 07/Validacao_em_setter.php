<?php
    // Crie uma classe Aluno com os atributos privados nome e nota.
    // o No setNota, garanta que a nota só pode ser entre 0 e 10. Se o
    // valor for inválido, armazene 0.
    // o Teste criando alunos com notas válidas e inválidas, exibindo os
    // resultados com getNota().

    class Aluno {
        private $nome;
        private $nota;

        public function __construct($nome, $nota) {
            $this->setNome($nome);
            $this->setNota($nota);
        }

        function exibirInfo() {
            return "Aluno: " . $this->getNome() . "\n" . "Nota: " .  $this->getNota() . "\n\n";
        }

        public function setNome($nome) {
            $this->nome = ucwords( strtolower($nome));
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNota($nota) {
            if ($nota >= 0 && $nota <= 10) {
                $this->nota = doubleval($nota);
            } else {
                $this->nota = 0;
            }
        }

        public function getNota() {
            return $this->nota;
        }
    }

    $aluno1 = new Aluno("Valter", 4.5);
    $aluno2 = new Aluno("Almir", 8);
    $aluno3 = new Aluno("Motomoto", 18);
    $aluno4 = new Aluno("Farm", -2);

    echo $aluno1->exibirInfo();
    echo $aluno2->exibirInfo();
    echo $aluno3->exibirInfo();
    echo $aluno4->exibirInfo();

?>