<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="assents/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <h1>login</h1>
    <span>or <a href="singup.php">Registrate</a></span>

    <form action="login.php" method="post">
      <input type="text" name="email" placeholder="ingrese su email">
      <input type="password" name="password" placeholder="ingresa tu contraseña">
      <input type="submit" value="send">
    </form>

  </body>
</html>
