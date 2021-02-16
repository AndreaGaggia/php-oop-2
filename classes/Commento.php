<?php

class Commento
{
    public $titolo_articolo;
    public $testo;
    public $data;
    public $autore;

    /**
     * Setta lo username dell'autore del commento, richiamabile con l'attributo 'autore'
     *
     * @param string $nome Nome dell'autore dell'articolo
     * @return void
     */
    public function setAuthor(string $username)
    {
        $this->autore = $username;
    }

    public function setDate(int $giorno, string $mese, int $anno)
    {
        $this->data = "{$giorno} {$mese} {$anno}";
        return $this->data;
    }
}

$commento1 = new Commento();
$commento1->setAuthor($user1->username);
$commento1->testo = 'Pezzo memorabile di Gino Lastname, sempre attuale...';
$commento1->setDate(12, 'Marzo', 2017);

$commento2 = new Commento();
$commento2->setAuthor($user2->username);
$commento2->testo = 'Gino Lastname un grande esempio di coerenza per tutti!';
$commento2->setDate(12, 'Marzo', 2011);

$commento3 = new Commento();
$commento3->setAuthor($user3->username);
$commento3->testo = 'Ennesima prova di lucidità e coerenza per Gino Lastname...';
$commento3->setDate(13, 'Marzo', 2011);
