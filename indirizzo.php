<?php

  trait Indirizzo
  {
    private $stato;
    private $citta;
    private $via;
    private $cap;

    // set && get stato
    public function setStato($stato)
    {
      $this->stato = $stato;
    }
    public function getStato()
    {
      return $this->stato;
    }

    // set && get città
    public function setCitta($citta)
    {
      $this->citta = $citta;
    }
    public function getCitta()
    {
      return $this->citta;
    }

    // set && get via
    public function setVia($via)
    {
      $this->via = $via;
    }
    public function getVia()
    {
      return $this->via;
    }

    // set && get cap
    public function setCap($cap)
    {
      $this->cap = $cap;
    }
    public function getCap()
    {
      return $this->cap;
    }
  }
