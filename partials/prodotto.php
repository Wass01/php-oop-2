<?php

  class Prodotto {
    public $nome_prod;
    public $categoria;
    public $disponibilita;
    public $prezzo;
    public $data_uscita;
    public $provenienza;
    public $taglia;

    public function __construct($nome_prod, $categoria, $disponibilita, $prezzo, $data_uscita, $provenienza, $taglia) {
      $this->nome_prod = $nome_prod;
      $this->categoria = $categoria;
      $this->disponibilita = $disponibilita;
      $this->prezzo = $prezzo;
      $this->data_uscita = $data_uscita;
      $this->provenienza = $provenienza;
      $this->taglia = $taglia;
    }

    // set && get nome
    public function setNomeProd($nome_prod)
    {
      $this->nome_prod = $nome_prod;
    }
    public function getNomeProd()
    {
      return $this->nome_prod;
    }

    // set && get categoria
    public function setCategoria($categoria)
    {
      $this->categoria = $categoria;
    }
    public function getCategoria()
    {
      return $this->categoria;
    }

    // set && get disponibilità
    public function setDisponibilita($disponibilita)
    {
      $this->disponibilita = $disponibilita;
    }
    public function getDisponibilita()
    {
      return $this->disponibilita;
    }

    // set && get prezzo
    public function setPrezzo($prezzo)
    {
      $this->prezzo = $prezzo;
    }
    public function getPrezzo()
    {
      return $this->prezzo;
    }

    // set && get data uscita
    public function setDataUscita($data_uscita)
    {
      $this->data_uscita = $data_uscita;
    }
    public function getDataUscita()
    {
      return $this->data_uscita;
    }

    // set && get provenienza
    public function setProvenienza($provenienza)
    {
      $this->provenienza = $provenienza;
    }
    public function getProvenienza()
    {
      return $this->provenienza;
    }

    // set && get taglia
    public function setTaglia($taglia)
    {
      $this->taglia = $taglia;
    }
    public function getTaglia()
    {
      return $this->taglia;
    }
  }
