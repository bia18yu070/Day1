<?php 
session_start();
require_once "connect.php";
$name = $_POST['Username'];
$email = $_POST['Email'];
$login = $_POST['Login'];
$pwd = $_POST['PwdHash'];
$hash =  hash('sha256',$pwd);

$result = mysqli_query($conn, "INSERT INTO `users` (`ID`, `UserName`, `Email`, `Login`, `PwdHash`) VALUES (NULL, '$name', '$email', '$login', '$hash')");

if ($result = True){
    echo '<meta http-equiv="refresh" content="2; url=login.php">';
    die("Пользователь зарегестрирован. Вы будете перенаправлены на страницу входа");
}
else {
    echo "<h1>Ошибка</h1>";
}
?>