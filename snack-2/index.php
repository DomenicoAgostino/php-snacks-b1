<?php


/* snack-2 
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
1)Name sia più lungo di 3 caratteri
2)Mail contenga un punto e una chiocciola 
3)Age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

var_dump($_GET);

$isAuth = true;


if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])){
  $error = 'Inserisci i dati corretti';
  $isAuth = false;
}elseif(strlen($_GET['name']) < 3 ){  
  
  $error = 'Inserisci almeno 3 caratteri';
  $isAuth = false;
}elseif(!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.')){

  $error = 'Inserisci una mail';
  $isAuth = false;
}elseif(!is_numeric($_GET['age'])){

  $error = 'No number';
  $isAuth = false;
}

if($isAuth ){
  $output = 'Accesso riuscito';
}else{
  $output = 'Accesso negato';
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>

<h1>Controllo dati</h1>
  
<h2><?php echo $output ?></h2>

<?php if(!$isAuth): ?>
  <i>Errore: <?php echo $error ?></i>
<?php endif; ?>

</body>
</html>