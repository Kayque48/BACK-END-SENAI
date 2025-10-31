<?php

    require_once "CRUD.php";
    require_once "AlunoDAO.php";

    $dao = new AlunoDAO();

    // cria cada aluno separadamente
    $aluno1 = new Aluno(1, "Maria", "Design");
    $aluno2 = new Aluno(2, "Gabriel", "Moda");
    $aluno3 = new Aluno(3, "Eduardo", "Manicure");
    $aluno4 = new Aluno(4, "Aurora", "Arquitetura");
    $aluno5 = new Aluno(5, "Oliver", "Diretor");
    $aluno6 = new Aluno(6, "Amanda", "Lutadora");
    $aluno7 = new Aluno(7, "Geysa", "Engenheira");
    $aluno8 = new Aluno(8, "João", "Professor");
    $aluno9 = new Aluno(9, "Bernardo", "Streamer");

    // adiciona todos os alunos no DAO
    $dao->criarAluno($aluno1);
    $dao->criarAluno($aluno2);
    $dao->criarAluno($aluno3);
    $dao->criarAluno($aluno4);
    $dao->criarAluno($aluno5);
    $dao->criarAluno($aluno6);
    $dao->criarAluno($aluno7);
    $dao->criarAluno($aluno8);
    $dao->criarAluno($aluno9);

    // 
    echo "\nListagem Inicial:\n";
    foreach ($dao->lerAluno() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }

    //  UPDATE
    $dao->atualizarAluno(3, "Viviane", "Eletricista");
    $dao->atualizarAluno(7, "Clotilde", "Engenheira");
    $dao->atualizarAluno(8, "Joana", "Professor");
    $dao->atualizarAluno(9, "Bernardo", "DEV");
    $dao->atualizarAluno(6, "Amanda", "Logística");
    $dao->atualizarAluno(5, "Oliver", "Elétrica");

    // lista após atualização
    echo "\nApós Atualização:\n";
    foreach ($dao->lerAluno() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }


    // DELETE
    $dao->excluirAluno(2);
    $dao->excluirAluno(7);
    $dao->excluirAluno(4);

    echo "\nApós exclusão:\n";
    foreach ($dao->lerAluno() as $aluno) {
        echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()}\n";
    }

?>
