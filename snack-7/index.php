
<?php
/* 
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. 
*/

$classeScuola = [
  [
    'nome' => 'Pasquale',
    'cognome' => 'Rossi',
    'voto' => [
      'matematica' => 7,
      'italiano' => 8,
      'musica' => 10,
      'arte' => 4,
    ]
  ],

  [
    'nome' => 'Orazio',
    'cognome' => 'Bianchi',
    'voto' => [
      'matematica' => 3,
      'italiano' => 4,
      'musica' => 5,
      'arte' => 2,
    ]
  ],

  [
    'nome' => 'Michele',
    'cognome' => 'Pozzo',
    'voto' => [
      'matematica' => 2,
      'italiano' => 4,
      'musica' => 9,
      'arte' => 9,
    ]
  ],


  [
    'nome' => 'Mario',
    'cognome' => 'Italiano',
    'voto' => [
      'matematica' => 8,
      'italiano' => 8,
      'musica' => 8,
      'arte' => 4,
    ]
  ],

  [
    'nome' => 'Ludo',
    'cognome' => 'Vico',
    'voto' => [
      'matematica' => 10,
      'italiano' => 10,
      'musica' => 10,
      'arte' => 10,
    ]
  ],

  [
    'nome' => 'Lorenzo',
    'cognome' => 'Mare',
    'voto' => [
      'matematica' => 5,
      'italiano' => 5,
      'musica' => 6,
      'arte' => 6,
    ]
  ],

];

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
  <h1>Pagella Alunni</h1>

  <div>
    <?php for($i = 0; $i < count($classeScuola); $i++): ?>
      <ul>
        <li>Nome: <?php echo$classeScuola[$i]['nome'] ?></li>
        <li>Cognome: <?php echo$classeScuola[$i]['cognome'] ?></li>
        <li>Media Voti: <?php echo round((array_sum($classeScuola[$i]['voto'])/ count($classeScuola[$i]['voto'])), 2) ?> </li>

      </ul>

      <?php endfor; ?>
  </div>


</body>
</html>