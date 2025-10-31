<?php
// Exercício 1:
// Crie uma classe (molde de objeto) chamada 'Cachorro' com os seguintes atributos: Nome, Idade, raca, castrado e sexo.


echo "\n\nExercício 1, 2, 5 e 6\n\n";

class Cachorro {
    public $nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($nome, $idade, $raca, $castrado, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }

    public function mostrarCachorro(): void {
        echo "Nome: {$this->nome} \nIdade: {$this->idade} \nRaça: {$this->raca}" . "\nCastrado: " . ($this->castrado ? 'Sim' : 'Não') . "\nSexo: {$this->sexo}";
    }

    public function latir(): void {
        echo "\nO Cachorro {$this->nome} está latindo";
    }

    public function marcarTerritorio(): void {
        echo "\nO Cachorro {$this->nome} da raça {$this->raca} está marcando território\n\n";
    }

}

// Exercício 2:
// // Após a criação da classe do exercício 1, crie 10 cachorros (10 objetos).

$cachorros = [
    new Cachorro("Rex", 5, "Labrador", true, "Macho"),
    new Cachorro("Luna", 3, "Golden Retriever", false, "Fêmea"),
    new Cachorro("Thor", 2, "Bulldog Francês", true, "Macho"),
    new Cachorro("Maya", 4, "Poodle", true, "Fêmea"),
    new Cachorro("Bolt", 1, "Husky Siberiano", false, "Macho"),
    new Cachorro("Bella", 6, "Shih Tzu", true, "Fêmea"),
    new Cachorro("Spike", 7, "Pastor Alemão", false, "Macho"),
    new Cachorro("Daisy", 2, "Beagle", true, "Fêmea"),
    new Cachorro("Max", 5, "Boxer", false, "Macho"),
    new Cachorro("Nina", 3, "Yorkshire", true, "Fêmea")
];

foreach($cachorros as $cachorro){
    $cachorro->mostrarCachorro();
    $cachorro->latir();
    $cachorro->marcarTerritorio();
}

echo "\n\n ------------------------------------\n\n";

echo "\n\nExercício 3, 4, 7 e 8\n\n";

// Exercício 3:
//     Após a conclusão dos exercícios 1 e 2, crie uma classe chamada 'Usuario' com os
//  atributos: Nome, CPF, Sexo, Email, Estado civil, Cidade, Estado, Endereco e CEP.
class Usuario {
    public $nome;
    public $cpf;
    public $sexo;
    public $email;
    public $estadoCivil;
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;
    public $anosCasados;

    public function __construct($nome, $cpf, $sexo, $email, $estadoCivil, $cidade, $estado, $endereco, $cep) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estadoCivil = $estadoCivil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    public function mostrarUsuarios() {
        $anosCasados = $this->anosCasados ?? "N/A";

        echo "Nome: {$this->nome} \nCPF: {$this->cpf} \nSexo: {$this->sexo} \nEmail: {$this->email} \nEstado Civil: {$this->estadoCivil} \nAnos Casados: {$anosCasados} \nCidade: {$this->cidade} \nEstado: {$this->estado}  \nEndereço: {$this->endereco} \nCEP: {$this->cep}";
    }

    public function casamento(): void {
        if ($this->estadoCivil == "Casado") {
            $anosCasados = $this->anosCasados ?? 0;
            echo "\nParabéns pelo casamento de {$anosCasados} anos!\n\n";
        } else {
            echo "\nMuito buxa ksksksksksksk\n\n";
        }
    }

}

$usuarios = [
    new Usuario("Josenildo Afonso Souza", "100.200.300-40", "Masculino", "josenewdo.souza@gmail.com", "Casado", "Xique-Xique", "Bahia", "Rua da amizade, 99", "40123-98"),

    new Usuario("Valentina Passos Scherrer", "070.070.060-70", "Feminino", "scherrer.valen@outlook.com", "Divorciada", "Iracemápolis", "São Paulo", "Avenida da saudade, 1942", "23456-24"),
    
    new Usuario("Claudio Braz Nepumoceno", "575.575.242-32", "Masculino", "Clauclau.nepumoceno@gmail.com", "Solteiro", "Piripiri", "Piauí", "Estrada 3, 33", "12345-99")
];

$usuarios[0]->anosCasados = 90;
$usuarios[1]->anosCasados = 0;
$usuarios[2]->anosCasados = 0;

foreach ($usuarios as $usuario) {
    $usuario->mostrarUsuarios();
    $usuario->casamento();
}


?>