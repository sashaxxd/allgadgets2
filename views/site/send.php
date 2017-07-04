<div id="zakaz" style="margin: 0 auto; text-align: center; ">
    <img src="images/zakaz.jpg" id="zakaz" style="margin: 0 auto; text-align: center;" alt=""></a>
</div>

<?php
session_start();

/* Здесь проверяется существование переменных */
if (empty($_POST['name']) or empty($_POST['phone'])) {
    $_SESSION["error"] = "Заполните все данные формы!";
    header('Location: http://allgadgets/');
    exit;}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}



/* Сюда впишите свою эл. почту *info@sautom.ru*/
$emails = "webdizain@bk.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: УМНЫЙ ДОМ с http://allgadgets/!\nТелефон: $phone\nИмя: $name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='УМНЫЙ ДОМ '; //сабж
$email='УМНЫЙ ДОМ  <noreply>'; // от кого
$send = mail ($emails,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=http://allgadgets/');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="3; url=http://allgadgets/">
    <title>С вами свяжутся</title>
    <meta name="generator">

    <script type="text/javascript">
        setTimeout('location.replace("http://allgadgets/")', 3000);
        /*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
    </script>
</head>
</body>
</html>