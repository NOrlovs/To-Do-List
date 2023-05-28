<?php
    require 'configDB.php';

    $id = $_POST['id'];
    $newTask = $_POST['task'];
    $newTaskTime = $_POST['tasktime'];

    if ($newTask == '') {
      echo 'Enter your task';
      exit();
    }

    // Обновляем запись в базе данных
    $sql = 'UPDATE tasks SET task = :task, tasktime = :tasktime WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['task' => $newTask, 'tasktime' => $newTaskTime, 'id' => $id]);

    // Перенаправляем пользователя на главную страницу
    header('Location: /');
    exit();
?>
