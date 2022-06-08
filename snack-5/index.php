
<?php

/*
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
aggiungete poi i seguenti snack da realizzare
*/

$paragrafo= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet odit perferendis dolorem voluptates vel voluptatum in, labore nulla corrupti! Quo asperiores labore nam atque pariatur et. Consectetur est deleniti similique.';

$elementi= explode('.', $paragrafo);

var_dump($elementi);


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-5</title>
</head>
<body>

<h2>Paragrafo</h2>

<p><?php echo $paragrafo ?></p>

<h2>Paragrafo suddiviso</h2>

<ul>
<?php for($i = 0; $i < count($elementi); $i++ ): ?>
  <?php if(strlen($elementi[$i]) > 0) :?>
    <li><?php echo $elementi[$i]?></li>
    <?php endif; ?>
    <?php endfor; ?>
</ul>
</body>
</html>