<?php
    $text = 'Homme';
    function functionNumber($number1 = 1, $number2 = 2, $number3 = 3) {
      return $number1 + $number2 + $number3;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>p4e2 php</title>
</head>
<body>
  <div>
    <p><?= functionNumber(); ?></p>
  </div>
</body>
</html>