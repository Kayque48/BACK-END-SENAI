<?php

namespace AVALIACAO_SOMATIVA;

require_once __DIR__ . '/../controller/LivrosController.php';
$controller = new LivrosController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $acao = $_POST['acao'] ?? null;

    if ($acao == 'criar') {
        $controller->criar(
            $_POST['titulo'],
            $_POST['autor'],
            $_POST['ano'],
            $_POST['genero'],
            $_POST['quantidade']
        );

    } elseif ($acao === 'deletar') {
        $controller->excluir($_POST['titulo']);

    } elseif ($acao === 'editar') {
        $controller->atualizarLivro(
            $_POST['titulo'],
            $_POST['novoTitulo'],
            $_POST['novoAutor'],
            $_POST['novoAno'],
            $_POST['novoGenero'],
            $_POST['novaQuantidade']
        );
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Biblioteca do Zézin</title>
</head>
<body>

    <main>
        <h1>Cadastro de Livros</h1>

        <form action="" method="POST">
            <input type="hidden" name="acao" value="criar">

            <label>Título:</label>
            <input type="text" name="titulo" required>

            <label>Autor:</label>
            <input type="text" name="autor" required>

            <label>Ano:</label>
            <input type="number" name="ano" required>

            <label>Gênero:</label>
            <input type="text" name="genero" required>

            <label>Quantidade:</label>
            <input type="number" name="quantidade" required>

            <button type="submit">Cadastrar</button>
        </form>

        <div class="ler">
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Ano</th>
                        <th>Gênero</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $livros = $controller->ler();

                    foreach ($livros as $livro) {
                        echo "<tr>";
                        echo "<td>{$livro->getTitulo()}</td>";
                        echo "<td>{$livro->getAutor()}</td>";
                        echo "<td>{$livro->getAno()}</td>";
                        echo "<td>{$livro->getGenero()}</td>";
                        echo "<td>{$livro->getQntd()}</td>";
                        echo "<td>
                                <button 
                                    onclick=\"abrirModal(
                                        '{$livro->getTitulo()}',
                                        '{$livro->getAutor()}',
                                        {$livro->getAno()},
                                        '{$livro->getGenero()}',
                                        {$livro->getQntd()}
                                    )\" 
                                    class='btn-editar'>Editar</button>

                                <form action='' method='POST' style='display:inline;'>
                                    <input type='hidden' name='acao' value='deletar'>
                                    <input type='hidden' name='titulo' value='{$livro->getTitulo()}'>
                                    <button type='submit' class='btn-deletar'>Deletar</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal de Edição -->
    <div id="modalEditar" class="modal">
        <div class="modal-content">
            <span class="fechar">&times;</span>
            <h2>Editar Livro</h2>

            <form action="" method="POST" id="formEditar">
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="titulo" id="titulo_original">
                
                <label>Título:</label>
                <input type="text" name="novoTitulo" id="titulo_edit" required>
                
                <label>Autor:</label>
                <input type="text" name="novoAutor" id="autor_edit" required>

                <label>Ano:</label>
                <input type="number" name="novoAno" id="ano_edit" required>

                <label>Gênero:</label>
                <input type="text" name="novoGenero" id="genero_edit" required>

                <label>Quantidade:</label>
                <input type="number" name="novaQuantidade" id="quantidade_edit" required>

                <button type="submit">Salvar Alterações</button>
            </form>
        </div>
    </div>

    <script>
        function abrirModal(titulo, autor, ano, genero, quantidade) {
            document.getElementById('modalEditar').style.display = 'block';

            document.getElementById('titulo_original').value = titulo;
            document.getElementById('titulo_edit').value = titulo;
            document.getElementById('autor_edit').value = autor;
            document.getElementById('ano_edit').value = ano;
            document.getElementById('genero_edit').value = genero;
            document.getElementById('quantidade_edit').value = quantidade;
        }

        document.querySelector('.fechar').onclick = function() {
            document.getElementById('modalEditar').style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('modalEditar')) {
                document.getElementById('modalEditar').style.display = 'none';
            }
        }
    </script>

    <script src="js/script.js"></script>
</body>
</html>
