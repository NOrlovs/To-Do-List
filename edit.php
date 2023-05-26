<!DOCTYPE html> 
<html lang="eng">
<head>
  <meta charset="UTF-8"> <meta name="viewport" content "width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content=" ie=edge">
  <title>Edit task</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<?php
    $id = $_GET['id'];
    require 'configDB.php';
    $Rdata = mysqli_query($con, 'select * from `tasks` WHERE `id` = $id');
    $data = mysqli_fetch_array($Rdata);
?>

<body>
  <div class="container">
    <h1>Edit task</h1>
    <form action="/edit1.php" method="post">
      <input type="text" name="task" id="task" value="<?php echo $data['list']?>" placeholder="To Do..." class="form-control">
      <input type="date" name="tasktime" id="task" placeholder="Todo Time" class="form-control">
      <button type="submit" name="sendTask" class="btn btn-success">Edit</button>
    </form>
  </div>
</body>
</html>