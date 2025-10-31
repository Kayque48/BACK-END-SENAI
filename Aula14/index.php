<?php

    require_once "Produto.php";
    require_once "ProdutosDAO.php";

    $dao = new ProdutosDAO();

    // cria cada aluno separadamente
    $produto1 = new Produto(1, "Tomate", 29.47);
    $produto2 = new Produto(2, "Maça", 79.90);
    $produto3 = new Produto(3, "Queijo Brie", 120.00);
    $produto4 = new Produto(4, "Iogurte Grego", 35.50);
    $produto5 = new Produto(5, "Guaraná", 199.99);
    $produto6 = new Produto(6, "Jesus", 89.90);
    $produto7 = new Produto(7, "Bolacha Bono", 59.90);
    $produto8 = new Produto(8, "Desinfetante Urca", 149.90);
    $produto9 = new Produto(9, "Prestobarba Bic", 12.50);


    // adiciona todos os alunos no DAO
    $dao->criarProduto($produto1);
    $dao->criarProduto($produto2);
    $dao->criarProduto($produto3);
    $dao->criarProduto($produto4);
    $dao->criarProduto($produto5);
    $dao->criarProduto($produto6);
    $dao->criarProduto($produto7);
    $dao->criarProduto($produto8);
    $dao->criarProduto($produto8);

    // 
    echo "\nListagem Inicial:\n";
    foreach ($dao->lerProduto() as $produto) {
        echo "{$produto->getId()} - {$produto->getNome()} - {$produto->getpreco()}\n";
    }

    //  UPDATE
  $dao->atualizarProduto(8, "Desinfetante Barbarex", 49.00);


    // lista após atualização
    echo "\nApós Atualização:\n";
    foreach ($dao->lerProduto() as $produto) {
        echo "{$produto->getId()} - {$produto->getNome()} - {$produto->getpreco()}\n";
    }


    // DELETE
    $dao->excluirProduto(1);
    $dao->excluirProduto(2);

    echo "\nApós exclusão:\n";
    foreach ($dao->lerProduto() as $produto) {
        echo "{$produto->getId()} - {$produto->getNome()} - {$produto->getpreco()}\n";
    }

?>
