<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variable Static</title>
</head>

<body>
  <h1>Variable Static </h1>
  <?php
  function test()
  {
    static $A = 0;
    // dengan static
    echo "Nilai a=";
    echo $A;
    echo "<br>";
    $A++;
  }
  Test();
  Test();
  Test();
  Test();
  Test();
  ?>

</body>

</html>