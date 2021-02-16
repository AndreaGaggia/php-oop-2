<?php

class Articolo
{
    public $titolo;
    public $testo;
    public $categoria;
    public $autore;
    public $data;
    public $commenti;

    /**
     * Setta il nome completo dell'autore dell'articolo, richiamabile con l'attributo 'autore'
     *
     * @param string $nome Nome dell'autore dell'articolo
     * @param string $cognome Cognome dell'autore dell'articolo
     * @return void
     */
    public function setAuthor(string $nome, string $cognome)
    {
        $this->autore = $nome . " " . $cognome;
    }

    /**
     * Setta la data di pubblicazione dell'articolo e restituisce immediatamente l'attributo 'data'
     *
     * @param integer $giorno numero da calendario del giorno di pubblicazione
     * @param string $mese nome del mese di pubblicazione scritto
     * @param integer $anno anno di pubblicazione
     * @return void
     */
    public function setDate(int $giorno, string $mese, int $anno)
    {
        $this->data = "{$giorno} {$mese} {$anno}";
        return $this->data;
    }
}

$articolo1 = new Articolo();
$articolo1->setAuthor('Gino', 'Lastname');
$articolo1->setDate(12, 'Febbraio', 1949);
$articolo1->titolo = 'Come si sta bene nella neonata Repubblica!';
$articolo1->testo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aperiam fugit illo enim perferendis perspiciatis doloribus quo, necessitatibus earum aspernatur corrupti, reiciendis qui! Ipsum in, deleniti delectus quas vero maiores?';
$articolo1->categoria = 'storia';
$articolo1->commenti = [$commento1];

$articolo2 = new Articolo();
$articolo2->setAuthor('Gino', 'Lastname');
$articolo2->setDate(12, 'Febbraio', 2009);
$articolo2->titolo = 'Come si stava bene nella prima Repubblica...';
$articolo2->testo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aperiam fugit illo enim perferendis perspiciatis doloribus quo, necessitatibus earum aspernatur corrupti, reiciendis qui! Ipsum in, deleniti delectus quas vero maiores?';
$articolo2->categoria = 'attualità';
$articolo2->commenti = [$commento2, $commento3];

$articolo3 = new Articolo();
$articolo3->setAuthor('Fulvio', 'Hitech');
$articolo3->setDate(12, 'Febbraio', 2022);
$articolo3->titolo = 'Self-service per il metano in arrivo quasi sicuramente';
$articolo3->testo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aperiam fugit illo enim perferendis perspiciatis doloribus quo, necessitatibus earum aspernatur corrupti, reiciendis qui! Ipsum in, deleniti delectus quas vero maiores?';
$articolo3->categoria = 'futuro';
