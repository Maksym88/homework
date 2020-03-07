<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>

</head>
<body>


<form name="form1" action="" method="post">
    <img src="https://html5book.ru/wp-content/uploads/2016/10/profile-image.png">
    <h2>Регистрация</h2>
    <label>Имя<br>
        <input type="text" name="text"><br></label>
    <br>
    <label>E-mail <br>
        <input type="email" name="email"></label><br>
    <br>
    <label>Пароль <br>
        <input type="password" name="pass"></label><br>
    <br>
    <label>Пол <br>
        <input type="radio" name="gen" value="мужской">мужской<br>
        <input type="radio" name="gen" value="женский">женский</label> <br>
    <br>
    <button type="submit" name="sub">Отправить</button>


</form>
</body>
</html>

<?php

$name = $_POST['text'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$radio_gender = $_POST['gen'];
$button = $_POST['sub'];

if (!empty($_POST['text']) && !empty($_POST['email']) && !empty($_POST['pass'])
    && !empty($_POST['gen'])){
    echo "Поздравляем Вы зарегистрировались!";
}else{
    echo "Что-то пошло не так попробуйте ещё раз";
}





?>