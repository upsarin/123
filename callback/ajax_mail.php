<?
	
session_start();
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/classes/User.php");
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/classes/Main_classes.php");
require_once ("/var/www/u0205105/data/www/pioneerdjschool.ru/app/core/dbo.php");


switch($_POST['course']) {
	case "course-base":
		$_POST['course'] = "Базовый курс DJ Школы";
		break;
	case "pro-course":
		$_POST['course'] = "PRO курс DJ Школы";
		break;
	case "scratch-base":
		$_POST['course'] = "Scratch DJ курс DJ Школы"; 
		break;
	case "kids-course":
		$_POST['course'] = "Kids курс DJ Школы"; 
		break;
	case "midi-course":
		$_POST['course'] = "MIDI курс DJ Школы"; 
		break;
	case "vinyl-course":
		$_POST['course'] = "Vinyl курс DJ Школы"; 
		break;
	
	case "music-write-base":
		$_POST['course'] = "Базовый курс Школы Написания Музыки"; 
		break;
	case "music-write-pro":
		$_POST['course'] = "PRO курс Школы Написания Музыки"; 
		break;
	case "music-write-level-up":
		$_POST['course'] = "Level UP курс Школы Написания Музыки"; 
		break;
	case "salfedgio-course":
		$_POST['course'] = "Сольфеджио курс Школы Написания Музыки"; 
		break;
	case "vocal-course":
		$_POST['course'] = "Vocal курс Школы Написания Музыки"; 
		break;	
	case "tech-dj-course":
		$_POST['course'] = "Техничный диджеинг курс DJ Школы"; 
		break;
	case "actionsystem":
		$_POST['course'] = "Скидочная система"; 
		break;
	case "partnership":
		$_POST['course'] = "Партнёрская программа"; 
		break;
	case "photosession":
		$_POST['course'] = "Фотосессия (DJ портфолио)"; 
		break;
	case "rent":
		$_POST['course'] = "Аренда DJ Оборудования"; 
		break;
	case "traning":
		$_POST['course'] = "Разовое посещение DJ Центра в формате свободной тренировки."; 
		break;
	case "videomix":
		$_POST['course'] = "Видео-микс на Pioneer DJ TV"; 
		break;
}

switch($_POST['city']) {
	case "nsk":
		$email_to = "nsk_info@pioneerdjschool.ru";
		$_POST['city'] = "Новосибирск";
		break;
	case "moscow":
		$email_to = "msk_info@pioneerdjschool.ru";
		$_POST['city'] = "Москва";
		break;
	case "peter":
		$email_to = "peter_info@pioneerdjschool.ru";
		$_POST['city'] = "Питербург";
		break;
	case "almati":
		$email_to = "almati_info@pioneerdjschool.ru";
		$_POST['city'] = "Алматы";
		break;		
}




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
<p>Email: '. $_POST["email"] .'</p>
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
echo "Ваша заявка находиться в обработке, мы обязательно с вами свяжемся.";
}
?>