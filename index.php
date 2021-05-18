<?php
  require_once './partials/utente.php';
  require_once './partials/prodotto.php';

  $utente = new Utente('Wassim', 'Maatalla', '06/03/2001', 'Italia', 'Milano', 'via Roma 12', '22202');
  $quadro = new Prodotto('quadro Mj', 'Arredamenti', 'disponibile', 34, '12/03/2018', 'USA');
  $felpa = new Prodotto('felpa nike', 'Abbigliamento', 'disponibile', 59.90, '02/06/2020', 'UK');

  var_dump($utente);
  var_dump($quadro);
  var_dump($felpa);


?>
