<?php
function functionsport($mot, $mots) {
  return $mot . $mots;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>p4e2 php</title>
</head>
<body>
  <div>
    <p><?= functionsport('tennis', 'football') ?></p>
  </div>
</body>
</html>