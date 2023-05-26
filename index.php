<!DOCTYPE html> 
<html lang="eng">
<head>
  <meta charset="UTF-8"> <meta name="viewport" content "width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content=" ie=edge">
  <title>To-do List</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>To-Do List</h1>
    <form action="/add.php" method="post">
      <input type="text" name="task" id="task" placeholder="To Do..." class="form-control">
      <input type="date" name="tasktime" id="task" placeholder="Todo Time" class="form-control">
      <button type="submit" name="sendTask" class="btn btn-success">Submit</button>
    </form>

    <?php
      require 'configDB.php';

      echo '<ul>';
      $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
      while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->task.'</b>
        <i>'.$row->tasktime.'</i>
        <a href="/edit.php?id='.$row->id.'"><button id="ed">Edit</button></a>
        <a href="/delete.php?id='.$row->id.'"><button id="compl">Complete</button></a>
        <a href="/delete.php?id='.$row->id.'"><button id="del">Delete</button></a></li>';
      }
      echo '</ul>';
    ?>

  </div>
</body>
</html>