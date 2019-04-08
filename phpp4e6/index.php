<?php
function functionReturn($name, $firstname, $age) {
  return $name . $firstname .' j\'ai'. ' '. $age. ' '. 'ans';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>p4e6 php</title>
</head>
<body>
  <div>
    <p><?= functionReturn('lanel ', 'kevin ', 6) ?></p>
  </div>
</body>
</html>