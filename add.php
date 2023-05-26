<?php
  $task = $_POST['task'];
  $tasktime = $_POST['tasktime'];
  if($task == '') {
    echo 'Enter your task';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO tasks (task, tasktime) VALUES(:task, :tasktime)';
  $query = $pdo->prepare($sql);
  $query->execute(['task' => $task, 'tasktime' => $tasktime]);

  header('Location: /');
?>
