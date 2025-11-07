<?php

namespace Aula_15;

class BebidaDAO {

    private $bebidas = [];

    private $arquivo = 'bebidas.json';

    public function __construct() {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);

            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $nome => $info) {
                    $this->bebidas[$nome] = new Bebidas(
                        $info ['nome'],
                        $info ['categoria'],
                        $info ['volume'],
                        $info ['valor'],
                        $info ['qtde']
                    );
                }
            }
        }
    }

    private function salvarEmArquivo() {
        $dados = [];

        foreach ($this->bebidas as $nome => $bebidas) {
            $dados[$nome] = [
                'nome' => $bebidas->getNome(),
                'categoria'=> $bebidas->getCategoria(),
                'volume' => $bebidas->getVolume(),
                'valor' => $bebidas->getValor(),
                'qtde' => $bebidas->getQtde()
            ];
        }

        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }

    public function criarBebida(Bebidas $bebidas) {
        $this->bebidas[$bebidas->getNome()] = $bebidas;
        $this->salvarEmArquivo();
    }

    public function lerBebida() {
        return $this->bebidas;
    }

    public function atualizarBebida($nome, $novoNome, $novaCategoria, $novoVolume, $novoValor, $novaQtde) {
        if (isset($this->bebidas[$nome])) {
            // Se o nome mudou, precisamos mover o objeto para a nova chave do array
            if ($novoNome !== $nome) {
                $this->bebidas[$novoNome] = $this->bebidas[$nome];
                unset($this->bebidas[$nome]);
                $target = $this->bebidas[$novoNome];
            } else {
                $target = $this->bebidas[$nome];
            }

            // Forçar os tipos adequados antes de setar
            $target->setNome((string) $novoNome);
            $target->setCategoria((string) $novaCategoria);
            $target->setVolume((float) $novoVolume);
            $target->setValor((float) $novoValor);
            $target->setQtde((int) $novaQtde);
        }

        // Sempre salva o arquivo após alteração
        $this->salvarEmArquivo();
    }

    public function excluirBebida($nome) {
        unset($this->bebidas[$nome]);
        $this->salvarEmArquivo();
    }
    
}

?>