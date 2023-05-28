<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8"> <meta name="viewport" content "width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content=" ie=edge">
  <title>Edit task</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1>Edit task</h1>
    <form action="/edit.php" method="POST">
    <?php
        $id = $_GET['id'];
        require 'configDB.php';
        $query = $pdo->prepare('SELECT task, tasktime FROM tasks WHERE id = :id');
        $query->execute(array('id' => $id));
        $row = $query->fetch();
        $task = $row['task'];
        $tasktime = $row['tasktime'];

      ?>
      <input type="text" name="task" id="task" value="<?php echo $task; ?>" class="form-control">
      <input type="date" name="tasktime" id="task" value="<?php echo $tasktime; ?>"  class="form-control">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <button type="submit" name="sendTask" class="btn btn-success">Edit</button>
    </form>
  </div>
</body>
</html>