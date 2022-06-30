<?php 
require_once "connect.php";
$tablename = mysqli_query($conn, "SELECT * FROM `users`");
$tablename = mysqli_fetch_all($tablename);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
			input, button {
			margin: 6px;
			}
			
			button {
				width:150px;
			}
		</style>
    <title>Balashov</title>
</head>
<body>
<a href = "index1.html">Домашняя страница</a>
    <h1>Регистрация нового пользователя</h1>
    <form action="create.php" method="post">
    Ваше имя: <br />
    <input type="text" name="Username"/> <br />
    Ваш Email: <br />
    <input type="text" name="Email"/> <br />
    Ваш логин: <br />
    <input type="text" name="Login"/> <br />
    Ваш пароль: <br />
    <input type="password" name="PwdHash"/><br />
    <input type="submit" value="Зарегестрироваться!"><br />
    Автор: Балашов Иван
</form>
</body>
</html>