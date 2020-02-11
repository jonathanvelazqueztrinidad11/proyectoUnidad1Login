<?php
  require 'database.php'

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO users (email,password) VALUES (:email, :password)"
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$password);

    if ($stmt->execute()) {
      $message = 'usuario creado satisfactoriamente';
    }else {
      $message = 'lo sentimos a ocurrido un error con su cuenta';
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="assents/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

      <?php if (!empty($message)): ?>
      <p><?php $message ?></p>
    <?php endif; ?>

    <h1>Registrate</h1>
    <span>or <a href="login.php">ingresa</a></span>
    <form action="singup.php" method="post">
      <input type="text" name="email" placeholder="ingrese su email">
      <input type="password" name="password" placeholder="ingresa tu contraseña">
      <input type="password" name="confirmar_password" placeholder="confirma tu contraseña">
      <input type="submit" value="send">
    </form>

  </body>
</html>
