<?php
function functionReturn($age, $gender) {
  if ($age >= 18 && ($gender == 'Homme' || $gender == 'Femme')) {
    return 'vous êtes un ' . strtolower($gender) . ' et vous êtes majeur';
  } else {
    return 'vous êtes un ' . strtolower($gender) . ' et vous êtes mineur';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>partie 4 exercice 7 php</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
  <div>
    <p class="animated  flash delay-5s"><?= functionReturn(15, 'femme') ?></p>
  </div>
</body>
</html>