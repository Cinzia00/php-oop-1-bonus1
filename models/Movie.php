<?php

class Movie {
    public $titolo;
    public $genere = [];
    public $trama;
    public $durata;
    public $lingua;
    public $annoDiUscita;

   

    
    function __construct($titolo, $durata) {
        $this->titolo = $titolo;
        $this->durata = $durata;
    }

    
    public function calcolaAnniUscita() {
        $annoCorrente = date('Y');
        $anni = $annoCorrente - $this->annoDiUscita;
        return $anni;
    }
   }