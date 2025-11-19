<?php

    namespace AVALIACAO_SOMATIVA;

    require_once 'Connect.php';
    require_once 'Livros.php';

    use PDOException;
    USE PDO;

    class LivrosDAO {

        private $conn;

        public function __construtc() {
            $this->conn = Connection::getInstance();

            $this->conn->exec("CREATE TABLE IF NOT EXISTS livros 
                (id INT AUTO_INCREMENT PRIMARY KEY,
                titulo VARCHAR(200),
                autor VARCHAR(150),
                ano INT,
                genero VArCHAR(100),
                quantidade INT
            )"
        );
    }

    public function criarLivro(Livros $livros) {
        $stmt = $this->conn->prepare(
            "
            insert into livros (titulo, autor, ano, genero, quantidade)
            values (:titulo, :autor, :ano, :genero, :quantidade)"
        );
        $stmt->execute( [
            ':titulo' => $livros->getTitulo(),
            ':autor' => $livros->getAutor(),
            ':ano' => $livros->getAno(),
            ':genero' => $livros->getGenero(),
            ':quantidade' => $livros->getQntd()
        ]);
    }

    public function lerLivros() {
        $stmt = $this->conn->query("select * from livros order by titulo");
        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new Livros(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['quantidade']
            );
        }
        return $result;
    }

    public function atualizarLivros($originalTitulo, $novoTitulo, $autor, $ano, $genero, $qntd) {
        $stmt = $this->conn->prepare(
            "update livros
            set titulo = :novotitulo, autor = :autor, ano = :ano, genero = :genero, quantidade = :quantidade
            where titulo = :originalTitulo"
        );
        $stmt->execute([
            ':novoTitulo' => $novoTitulo,
            ':autor' => $autor,
            ':ano' => $ano,
            ':genero' => $genero,
            ':quantidade' => $qntd,
            ':originalTitulo' => $originalTitulo
        ]);
    }

     public function excluirLivro($titulo) {
        $stmt = $this->conn->prepare("DELETE FROM livro WHERE titulo = :titulo");
        $stmt->execute([':nome' => $titulo]);
    }

    public function buscarPorTitulo($titulo) {
        $stmt = $this->conn->prepare(
            "select * from livros where titulo = :titulo limit 1"
        );
        $stmt->execute([':titulo' => $titulo]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Livros(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['quantidade']
            );
        }
        return null;
    }
}
    