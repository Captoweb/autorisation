<?php
session_start();

if($_SESSION['admin']) {
    header("Location: admin.php");
    exit;
}

$admin = 'admin';
$pass = '141';

//проверка пароля и логина
if($_POST['submit']) {
    if($admin == $_POST['user'] AND $pass == $_POST['pass'] ) {
        $_SESSION['admin'] = $admin;
        header("Location: admin.php");
        exit;
    }else echo '<p>Не верный пароль или логин!</p>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href ="style.css"> 
</head>
    <body>
    <p><a href="index.php">Главная</a> |<a href="contact.php">Контакты</a> | <a href="admin.php">Админка</a><p>
    <hr>
   <p> Это страница авторизации</p>
   
    <form method="post" action="">
      Username: <input type="text" name="user">
      <br> <br>
      Password: <input type="text" name="pass">
      <br> <br>
      <input type="submit" name="submit" value="Войти">
    </form>
</body>
</html>
