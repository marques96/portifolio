<?php require "calendario.php" ?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calendário</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="calendario">

    <h1>Calendário Fictício</h1>

    <table>
      <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
      </tr>

      <?php echo calendario(); ?>



    </table>
  </div>
</body>

</html>