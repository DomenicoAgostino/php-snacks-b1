<?php
$posts = [

  '10/01/2019' => [
      [
          'title' => 'Guerra e pace,',
          'author' => 'Lev Nikolaevic Tolstoj ',
          'text' => 'Giallo'
      ],
      [
          'title' => 'Il Processo',
          'author' => 'Fraz Kakfa',
          'text' => 'Dramma'
      ],
  ],
  '10/02/2019' => [
      [
          'title' => 'Il barone rampante',
          'author' => 'Italo Calvino',
          'text' => 'Storia'
      ]
  ],
  '15/05/2019' => [
      [
          'title' => 'Moby Dick',
          'author' => 'Herman Melville',
          'text' => 'Natura'
      ],
      [
          'title' => 'delitto e castigo ',
          'author' => 'fedor mslo',
          'text' => 'Testo nuovo'
      ],
      [
          'title' => 'il deserto pazzo',
          'author' => 'dino pino',
          'text' => 'Testo vecchio'
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
  <title>Snake 3</title>

  <style>  
  .rectangle{
      width: 500px;
      height: 100px;
      margin-bottom: 20px;
      overflow: auto;
      background-color: yellowgreen;
      border-radius: 20px;
      color: red;
    }
    </style>
</head>
<body>
<?php foreach($posts as $data => $posters): ?>
  <div class="rectangle">
    <ul>
      <?php foreach($posters as $poster ): ?>
        <li>
          <?php echo $data?> -
          <?php echo $poster['title']?> -
          <?php echo $poster['author']?> -
          <?php echo $poster['text']?>
        </li>
      <?php endforeach; ?>  
    </ul>


  </div>
<?php endforeach; ?> 
</body>
</html>