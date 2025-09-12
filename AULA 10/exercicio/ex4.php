<?php
// Exercício 4 – Notificações
// Crie duas classes:
// - `Email` com o método `enviar()`, que retorna "Enviando email...",
// - `Sms` com o método `enviar()`, que retorna "Enviando SMS...".

interface Notificacoes {
    public function enviar();
}

class Email implements Notificacoes {
    public function enviar() {
        echo " - Enviando Email...";
    }
}

class Sms implements Notificacoes {
    public function enviar() {
        echo " - Enviando SMS...";
    }
}

$email = new Email();
$sms = new Sms();

$email->enviar();
echo "\n";
$sms->enviar();
?>