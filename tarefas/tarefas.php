<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarefas</title>
</head>

<body>
  <h1>Lista de Tarefas</h1>
  <form>
    <label for="nome">Tarefa:</label>
    <input type="text" name="nome" placeholder="Adicionar tarefa">
    <input type="submit" value="Enviar">
  </form>

  <?php
  if (array_key_exists("nome", $_GET) && $_GET['nome'] !== "") {
    $_SESSION['listaTarefas'][] = $_GET['nome'];
    //   echo "<span>Nome da Tarefa: <b>" . $_GET['nome'] . "</b></span>"; # code...
    // } else {
    //   echo "<span style='color: red;'> Nenhuma tarefa informada </span>";
  }

  $listaTarefas = [];

  if (array_key_exists('listaTarefas', $_SESSION)) {
    $listaTarefas = $_SESSION['listaTarefas'];
  }
  ?>
  <table>
    <tr>
      <th>Tarefas</th>
    </tr>
    <?php foreach ($listaTarefas as $tarefa): ?>
      <tr>
        <td><?php echo $tarefa; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>