<?php

class Articolo
{
    public $titolo;
    public $testo;
    public $categoria;
    public $autore;
    public $data;

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
