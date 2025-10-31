<?php
    class ProdutosDAO {

        private $produtos = [];

        private $arquivo = "produtos.json";

        public function __construct() {
            if (file_exists($this->arquivo)) {
                $conteudo = file_get_contents($this->arquivo);

                $dados = json_decode(json: $conteudo, associative: true);

                if ($dados) {
                    foreach($dados as $id => $info) {
                        $this->produtos[$id] = new Produto(
                            $info['id'],
                            $info['nome'],
                                $info['preco']
                        );
                    }
                }
            }
        }

        private function salvarEmArquivo() {
            $dados = [];

            foreach ($this->produtos as $id => $produto) {
                $dados[$id] = [
                    'id' => $produto->getId(),
                    'nome' => $produto->getNome(),
                    'preco' => $produto->getPreco()
                ];
            }
            file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
        }

        public function criarProduto(Produto $produto) {
            $this->produtos[$produto->getId()] = $produto;
            $this->salvarEmArquivo();
        }

        public function lerProduto(): array{
            return $this->produtos;
        }

        public function atualizarProduto($id, $novoNome, $novoPreco) {
            if (isset($this->produtos[$id])) {
                $this->produtos[$id] -> setNome($novoNome);
                $this->produtos[$id] -> setPreco($novoPreco);
            }
            $this->salvarEmArquivo();
        }

        public function excluirProduto($id) {
            unset($this->produtos[$id]);
            $this->salvarEmArquivo();
        }

    }