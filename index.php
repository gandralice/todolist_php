<?php
require_once('database/conn.php');
$task = [];
$sql = $pdo->query("SELECT * FROM task ORDER BY id DESC");
if($sql->rowCount() > 0){
  $task = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-do List</title>
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div id="to-do">
    <h1>Things to-do</h1>
    <form action="actions/create.php" method="POST" class="to-do-form">
      <input type="text" name="description" placeholder="Write your task here" required>
      <button type="submit" class="form-btn">
        <i class="fa-solid fa-plus"></i>
      </button>
    </form>
    <div id="tasks">
      <?php foreach($task as $t): ?>
      <div class="task">
        <input
          type="checkbox"
          name="progress"
          class="progress"
          <?= $t['completed'] ? 'checked' : '' ?>
        >
        <p class="task-description">
          <?= $t['description'] ?>
        </p>
        <div class="task-actions">
          <a class="action-btn edit-btn"><i class="fa-solid fa-pencil"></i></i></a>
          <a href="actions/delete.php?id=<?= $t['id'] ?>" class="action-btn delete-btn"><i class="fa-solid fa-trash-can"></i></a>
        </div>

        <form action="actions/update.php" method="POST" class="to-do-form edit-task hidden">
          <input type="text" class="hidden" name="id" value="<?= $t['id'] ?>">
          <input
            type="text"
            name="description"
            placeholder="Edit your task here"
            value="<?= $t['description'] ?>"
          >
          <button type="submit" class="form-btn confirm-btn">
            <i class="fa-solid fa-check"></i>
          </button>
        </form>

      </div>
      <?php endforeach ?>  
    </div>
  </div>
  <script src="src/js/script.js"></script>
</body>

</html>