<?php

    class Produto {
        private $id;
        private $nome;
        private $preco;

        public function __construct($id, $nome, $preco) {
            $this->setId($id);
            $this->setNome($nome);
            $this->setPreco($preco);
        }

        public function setId($id) {
            $this->id = $id;
        }
        
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function getId() {
            return $this->id;
        }
         public function getNome() {
            return $this->nome;
        }
         public function getPreco() {
            return $this->preco;
        }
    }