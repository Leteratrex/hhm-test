<?php
  $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
  $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
  $comment = trim(filter_var($_POST['comment'], FILTER_SANITIZE_STRING));

  $error = '';
  if(strlen($name) == 0)
    $error = 'Введите имя';
  else if(strlen($email) == 0)
    $error = 'Введите E-Mail';
  else if(strlen($comment) == 0)
    $error = 'Введите комментарий';

  if($error != '') {
    echo $error;
    exit;
  }

  require_once '../mysql_connect.php';

  $sql = 'INSERT INTO comments(name, email, comment) VALUES(?,?,?)';
  $query = $pdo->prepare($sql);
  $query->execute([$name, $email, $comment]);

  echo 'Готово';
?>
