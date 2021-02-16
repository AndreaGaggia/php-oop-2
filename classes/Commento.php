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
