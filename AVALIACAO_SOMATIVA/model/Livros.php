<?php

    namespace AVALIACAO_SOMATIVA;

    class Livros{

        private $titulo;
        private $autor;
        private $ano;
        private $genero;
        private $qntd;

        public function __construct($titulo, $autor, $ano, $genero, $qntd) {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setAno($ano);
            $this->setGenero($genero);
            $this->setQntd($qntd);
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function setGenero($genero) {
            $this->genero = $genero;
        }

        public function setQntd($qntd) {
            $this->qntd = $qntd;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function getAno() {
            return $this->ano;
        }

        public function getGenero() {
            return $this->genero;
        }

        public function getQntd() {
            return $this->qntd;
        }

    }