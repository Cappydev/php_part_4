<?php
function functionReturn($firstNumber, $firstMot) {
  return $firstNumber . $firstMot;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>partie 4 exercice 5 php</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
  <div>
    <p class="animated infinite bounce delay-2s"><?= functionReturn(6, 'ans') ?></p>
  </div>
</body>
</html>