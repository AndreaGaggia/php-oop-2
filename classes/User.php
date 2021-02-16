<?php

class User
{
    public $nome;
    public $cognome;
    public $età;
    public $email;
    public $username;
    public $password;
    public $commenti;

    public function __construct(int $età, string $username, string $password)
    {
        $this->età = $età;
        $this->username = $username;
        $this->password = $password;
    }

    public function setFullName(string $_nome, string $_cognome)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }

    public function getFullName()
    {
        if (!$this->nome && !$this->cognome) {
            return 'nome utente mancante!';
        } else {
            return $this->nome . " " . $this->cognome;
        }

    }
}

$user1 = new User(23, 'pippoForever', 'pass1lkn');
$user1->setFullName('Giorgio', 'Conti');

$user2 = new User(12, 'plutoFornow', 'pass2cdasln');
$user2->setFullName('Bianca', 'Verdi');

$user3 = new User(67, 'granKhan', 'pass3');
$user3->setFullName('Ludovico', 'Marino');

$user4 = new User(27, 'il_tuttologo', 'pass4lònòlkn');
$user4->setFullName('Matteino', 'Sapientucci');

$user5 = new User(34, 'lesperto', 'pass5kn');
