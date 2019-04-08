
<?php
function returnNumber($numberFirst, $nb2) { // je stock 2 paramètre dans ma fonction 
  if( $numberFirst > $nb2 ) { // si le nombre 1 est plus grand 
    $result = 'Le premier nombre est plus grand'; // alors tu retourne la chaine de caractères
  } elseif ($numberFirst < $nb2) { // si le nombre 1 est plus petit que le nombre 2
    $result  = 'Le premier nombre est plus petit '; // alors tu retourne la chaine de caractères
  } else { // sinon
    $result = 'Les deux nombres sont identiques '; // retourne la chaine de caractères ( identiques )
  }
  return $message;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>partie 4 episode 4 php</title>
</head>
<body>
  <div>
    <p><?= returnNumber(8, 6) ?></p>
  </div>
</body>
</html>