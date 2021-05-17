<?php
  require_once './partials/utente.php';

  $utente = new Utente('Wassim', 'Maatalla', '06/03/2001', 'Italia', 'Milano', 'via Roma 12', '22202');

  var_dump($utente);

?>
