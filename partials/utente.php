<?php

  require_once './indirizzo.php';

  class Utente {
    private $nome;
    private $cognome;
    private $data_nascita;

    public function __construct($nome, $cognome, $data_nascita, $stato, $citta, $via, $cap) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->data_nascita = $data_nascita;
    $this->setStato($stato);
    $this->setCitta($citta);
    $this->setVia($via);
    $this->setCap($cap);
  }

    // set && get nome
    public function setNome($nome)
    {
      $this->nome = $nome;
    }
    public function getNome($nome)
    {
      return $this->nome;
    }

    // set && get cognome
    public function setCognome($cognome)
    {
      $this->cognome = $cognome;
    }
    public function getCognome($cognome)
    {
      return $this->cognome;
    }

    // set && get data di nascita
    public function setDataNascita($data_nascita)
    {
      $this->data_nascita = $data_nascita;
    }
    public function getDataNascita()
    {
      return $this->data_nascita;
    }
}
