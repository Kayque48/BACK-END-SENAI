<?php

namespace Aula_15;

require_once __DIR__ . '\..\controller\BebidaController.php';
$controller = new BebidaController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $acao = $_POST['acao'] ?? null;
    if ($acao == 'criar') {
        $controller->criar(
            $_POST['nome'],
            $_POST['categoria'],
            $_POST['volume'],
            $_POST['valor'],
            $_POST['qtde']
        );
    } elseif ($acao === 'deletar') {
        $controller->excluir($_POST['nome']);
    }
}
?>

<!DOCTYPE html>
<html lang="UTf-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barzin do Zézin</title>
    <style>
        body{
            text-align: center;
        }

        /* main selector removed as it was empty */
    </style>
</head>
<body>

    <main>
        <h1>Formluário cadastro de bebidas</h1>
        <form action="" method="POST">
            <input type="hidden" name="acao" value="criar">
            <label for="">Nome:</label>
            <input type="text" name="nome" required>
            <label for="cat">Categoria:</label>
            <select name="categoria" id="cat" required>
                <option value="">Selecione uma categoria</option>
                <option value="cerveja">Cerveja</option>
                <option value="vinho">Vinho</option>
                <option value="destilado">Destilado</option>
                <option value="refrigerante">Refrigerante</option>
                <option value="suco">Suco</option>
                <option value="agua">Água</option>
            </select>

            <label for="">Volume:</label>
            <input type="number" name="volume" step="0.01" required>

            <label for="">Valor:</label>
            <input type="number" name="valor" step="0.01" required>

            <label for="">Quantidade:</label>
            <input type="number" name="qtde" required>
            <button type="submit">Cadastrar</button>
        </form>

        <div class="ler">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Volume</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $bebidas = $controller->ler();
                    foreach ($bebidas as $bebida) {
                        echo "<tr>";
                        echo "<td>{$bebida->getNome()}</td>";
                        echo "<td>{$bebida->getCategoria()}</td>";
                        echo "<td>{$bebida->getVolume()}</td>";
                        echo "<td>{$bebida->getValor()}</td>";
                        echo "<td>{$bebida->getQtde()}</td>";
                        echo "<td>
                                <form action=\"\" method=\"POST\" style=\"display:inline;\">
                                    <input type=\"hidden\" name=\"acao\" value=\"deletar\">
                                    <input type=\"hidden\" name=\"nome\" value=\"{$bebida->getNome()}\">
                                    <button type=\"submit\">Deletar</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                    <form action="" method="POST">
                     <input type="hidden" name="acao" value="deletar">
                    </form>
                <tbody>
                </tbody>
            </table>
    </main>
</body>
</html>


    

   
</body>
</html>