<?
	
session_start();
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/classes/User.php");
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/classes/Main_classes.php");
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/core/dbo.php");





if($_POST){
	/* получатели */
$to= "info@pioneerdjschool.ru" . ", " ; //обратите внимание на запятую
$to .= $email_to;

/* тема/subject */
$subject = "Сообщение с сайта pioneerdjschool.ru ". $_POST['city'];

/* сообщение */
$message = '
<html>
<head>
 <title>Сообщение с сайта pioneerdjschool.ru</title>

</head>
<body>
<p>Город: '. $_POST["city"] .'</p>
<p>Имя: '. $_POST["name"] .'</p>
<p>Телефон: '. $_POST["phone"] .'</p>

<p>Наименование: '. $_POST["course"] .' руб.</p>

 ';

  $message .= '

</body>
</html>
';

/* Для отправки HTML-почты вы можете установить шапку Content-type. */
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

/* дополнительные шапки */
$headers .= "From: info@pioneerdjschool.ru\r\n";
//$headers .= "Cc: birthdayarchive@example.com\r\n";
//$headers .= "Bcc: birthdaycheck@example.com\r\n";

/* и теперь отправим из */
mail($to, $subject, $message, $headers);


unset($_POST);
echo "<div class='form_mess'>Ваша заявка находиться в обработке, мы обязательно с вами свяжемся.</div>";
}
?>