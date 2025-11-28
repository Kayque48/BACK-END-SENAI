<?php

    namespace AVALIACAO_SOMATIVA;
    require_once __DIR__ .'/../model/LivrosDAO.php';
    require_once __DIR__ . '/../model/Livros.php';

    class LivrosController {
        private $dao;

        public function __construct() {
            $this->dao = new LivrosDAO();
        }

        public function ler() {
            return $this->dao->lerLivros();
        }

        public function criar($titulo, $autor, $ano, $genero, $qntd){
            $livros = new Livros($titulo, $autor, $ano, $genero, $qntd);
            $this->dao->criarLivro($livros);
        }

        public function excluir($titulo) {
            $this->dao->excluirLivro($titulo);
        }

        public function atualizarLivro($titulo, $novoTitulo, $novoAutor, $novoAno, $novoGenero, $novoQntd){
            $this->dao->atualizarLivros($titulo, $novoTitulo, $novoAutor, $novoAno, $novoGenero, $novoQntd);
    }
}

?>